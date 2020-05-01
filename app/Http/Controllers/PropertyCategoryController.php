<?php

namespace App\Http\Controllers;

use App\Property\PropertyCategory;
use Illuminate\Http\Request;

class PropertyCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = PropertyCategory::all();

        return view('backend.property_cat', compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'property_cate' => ['required', 'string', 'max:255'],
        ]);

        PropertyCategory::create(["category" => $request->property_cate]);
        return redirect('property-category');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property\PropertyCategory  $propertyCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyCategory $propertyCategory)
    {
        $category = $propertyCategory;
        return view('backend.edit_property_cat', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property\PropertyCategory  $propertyCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PropertyCategory $propertyCategory)
    {
        $request->validate([
            'property_cate' => ['required', 'string', 'max:255'],
        ]);

        $propertyCategory->update(["category" => $request->property_cate]);
        return redirect('property-category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property\PropertyCategory  $propertyCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyCategory $propertyCategory)
    {

        $propertyCategory->delete();
        return redirect('property-category');
    }
}
