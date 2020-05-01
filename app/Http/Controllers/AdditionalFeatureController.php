<?php

namespace App\Http\Controllers;

use App\Property\AdditionalFeature;
use Illuminate\Http\Request;

class AdditionalFeatureController extends Controller
{
    static function addFeature($property, $request)
    {
        $request->validate([
            "feature_name.*" =>"string|max:255",
            "feature_value.*" =>"required|string|max:255",

        ]);
         $feature_length = count($request->feature_name);
        for ($i = 0 ; $i<$feature_length ; $i++ ){
            $property->additional_features()->create([
                'name' => $request->feature_name[$i],
                "value" => $request->feature_value[$i]
            ]);
        }
        return 'done';
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
     * @param  \App\Property\AdditionalFeature  $additionalFeature
     * @return \Illuminate\Http\Response
     */
    public function show(AdditionalFeature $additionalFeature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property\AdditionalFeature  $additionalFeature
     * @return \Illuminate\Http\Response
     */
    public function edit(AdditionalFeature $additionalFeature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property\AdditionalFeature  $additionalFeature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdditionalFeature $additionalFeature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property\AdditionalFeature  $additionalFeature
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdditionalFeature $additionalFeature)
    {
        //
    }
}
