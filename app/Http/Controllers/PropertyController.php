<?php

namespace App\Http\Controllers;



use \App\Property\Property;
use App\Property\PropertyCategory;
use App\Property\Status;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $properties= Property::with(['statuses', 'additional_detail', 'property_images'])->paginate(10);

       return view('frontend.property.properties', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = Status::all();
        $property_cat = PropertyCategory::all();
        return view('frontend.property.submit-property', compact(['status', "property_cat"]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);

        $property =  Property::create([
            "title" => $request->title,
            "user_id" => 1,
            "description"   => $request->description,
            "price" =>$request->price,
            "city"  =>$request->city,
            "zip_code"  =>$request->zip_code,
            "street"    =>$request->street,
            "area"  =>$request->area,
            "property_cate_id" => $request->property_cate_id,
        ]);
        //pivot table
        $property->statuses()->sync($request->status);

        $property->additional_detail()->create([
            "bedrooms"  => $request->bedrooms,
            "bathrooms" => $request->bathrooms,
            "garages"    => $request->garages,
            "area"    => $request->area_ft,
            "year_built"    => $request->year_built,
        ]);
        if ( $request->feature_name[0] !== null ){
            AdditionalFeatureController::addFeature( $property, $request);
        }
        if($request->hasFile('g_images')) {
            $allowedfileExtension = ['jpg', 'png', 'jpeg' ];
            $files = $request->file('g_images');
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);
                if ($check) {
                    $path = public_path() . '/property/gellary/';
                    $file->move($path, $filename);
                    //adding  gellary Image to Image gellary table
                    $property->property_images()->create([
                        "image" => $filename,
                        "image_type" => 'gellary'
                    ]);
                }
            }
        }
        return view('frontend.property.property-confirmation', compact('property'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::with([
            'statuses', 'additional_detail',
            'additional_features', 'property_images'
        ])->findOrFail($id);
        return view('frontend.property.singleProperty', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $status = Status::all();
        $property_cat = PropertyCategory::all();
        $property = Property::with([
                'statuses', 'additional_detail',
                'additional_features',  'property_images'
            ])
            ->findOrFail($id);
        $details = $property->additional_detail;
        $features = $property->additional_features;
        $g_images = $property->property_images;
        $property_stats =$property->statuses;
        return view('frontend.property.submit-property', compact([
            'property', 'details', 'features',
            'status', "property_cat", 'g_images', 'property_stats'
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, property $property)
    {

        $this->validation($request);

        $property ->update([
            "title" => $request->title,
            "user_id" => 1,
            "description"   => $request->description,
            "price" =>$request->price,
            "city"  =>$request->city,
            "zip_code"  =>$request->zip_code,
            "street"    =>$request->street,
            "area"  =>$request->area,
            "property_cate_id" => $request->property_cate_id,
        ]);
        $property->additional_detail()->update([
            "bedrooms"  => $request->bedrooms,
            "bathrooms" => $request->bathrooms,
            "garages"    => $request->garages,
            "area"    => $request->area_ft,
            "year_built"    => $request->year_built,
        ]);

         $property->statuses()->sync($request->status);

        if ( $request->feature_name[0] !== null ){
            AdditionalFeatureController::updateFeature( $property, $request);
        }
        if($request->hasFile('g_images')) {
            $allowedfileExtension = ['jpg', 'png', 'jpeg' ];
            $files = $request->file('g_images');

            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);
                if ($check) {
                    $path = public_path() . '/property/gellary/';
                    $file->move($path, $filename);
                    //adding  gellary Image to Image gellary table
                    $property->property_images()->Create([
                            "image" => $filename,
                            "image_type" => 'gellary'
                        ]);

                }
            }
        }
        return redirect(route('properties.show', $property->id));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(property $property)
    {
        //
    }


    private function validation($data){
       return $data->validate([
            "title" => "required|string|max:255",
            "description"   => "required|string",
            "price" => "required|integer",
            "property_cate_id"  => "required",
            "city"  => "required|string|max:255",
            "zip_code"  => "required|integer",
            "street"    => "required|string|max:255",
            "area"  => "required|string|max:255",
            "bedrooms"  => "required|integer",
            "bathrooms" => "required|integer",
            "garages"    => "required|integer",
            "area_ft"    => "required|integer",
            "year_built"    => "required|integer",

            'status'  => "required",

        ]);
    }
}
