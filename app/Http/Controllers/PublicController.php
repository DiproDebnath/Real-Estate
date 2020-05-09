<?php

namespace App\Http\Controllers;

use App\Property\Property;
use App\Property\PropertyCategory;
use App\User;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $categories = PropertyCategory::all();
        return view('frontend.index', compact('categories'));
   }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        $user = User::whereHas('roles', function ($q){
             $q->where('name', 'admin');
        })->firstorfail();
        return view('frontend.contact', compact('user'));
    }
    public function loanCalculator()
    {
        return view('frontend.loan-calculator');
    }


    public function search(Request $request)
    {
        $query  = Property::query();

        $city = $request->city;
        $priceForm =$request->price_form;
        $priceTo = $request->price_to;
        $cateogryId = $request->cateogry_id;

        if($city){
            $query->where('city', 'like', '%' . $city . '%')->get();
        }
        if($priceForm && $priceTo){
            $query->whereBetween('price', [$priceForm, $priceTo])->get();
        }
        if($cateogryId){
            $query->where('property_cate_id', $cateogryId)->get();
        }
        $properties = $query->with(['statuses', 'additional_detail', 'property_images'])->paginate(10);
        $categories = PropertyCategory::all();
        return view('frontend.property.properties', compact(['properties', 'categories']));
    }
}
