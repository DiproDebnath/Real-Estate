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

    }
    static function updateFeature($property, $request)
    {
        $request->validate([
            "feature_name.*" =>"string|max:255",
            "feature_value.*" =>"required|string|max:255",

        ]);
        $feature_length = count($request->feature_name);
        for ($i = 0 ; $i<$feature_length ; $i++ ){
            $property->additional_features()->updateOrCreate(
                 ["id" => $request->feature_id[$i]],
                ['name' => $request->feature_name[$i],
                "value" => $request->feature_value[$i]
            ]);
        }
    }



    public function destroy($id)
    {
        $feature = AdditionalFeature::findorfail($id);
        $feature->delete();
        return  response()->json($feature, 200);
    }
}
