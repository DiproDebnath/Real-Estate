<?php

namespace App\Http\Controllers;

use App\Property\FloorPlan;
use Illuminate\Http\Request;

class FloorPlanController extends Controller
{
   static function addFloorplans($property, $request){
       $request->validate([
                "plan_name.*"  => "string|max:255",
                "plan_desc.*" =>"required|string",
                "plan_area.*" => "required|integer",
                "plan_rooms.*" => "required|integer",
                "plan_baths.*" => "required|integer",
            ]);

       if($request->hasFile('plan_images')) {
            $allowedfileExtension = ['jpg', 'png', 'jpeg' ];
            $files = $request->file('plan_images');
            $counter = 0;

            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);
                if ($check) {
                    $path = public_path() . '/property/floorplan/';

                    $file->move($path, $filename);
                    //adding data to floorplan table
                    $property->floorplans()->create([
                        "name"  =>  $request->plan_name[$counter],
                        "description" =>  $request->plan_desc[$counter],
                        "area" =>  $request->plan_area[$counter],
                        "rooms" =>  $request->plan_rooms[$counter],
                        "baths" =>  $request->plan_baths[$counter],
                    ]);
                    //adding  floorplan Image to Image gellary table
                    $property->property_images()->create([
                        "image" => $filename,
                        "image_type" => 'floorplan'
                    ]);
                    $counter++;
                }

            }
        }
   }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property\FloorPlan  $floorPlan
     * @return \Illuminate\Http\Response
     */
    public function show(FloorPlan $floorPlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property\FloorPlan  $floorPlan
     * @return \Illuminate\Http\Response
     */
    public function edit(FloorPlan $floorPlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property\FloorPlan  $floorPlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FloorPlan $floorPlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property\FloorPlan  $floorPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(FloorPlan $floorPlan)
    {
        //
    }
}
