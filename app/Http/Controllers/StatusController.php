<?php

namespace App\Http\Controllers;

use App\Property\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{


    public function index()
    {
        $statuses = Status::all();
        return view("backend.property_status", compact('statuses'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
        ]);

        Status::create([ 'title' => $request->title]);
        return redirect('status');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Property\Status $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status)
    {

        return view('backend.edit_property_status', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Property\Status $status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Status $status)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
        ]);

        $status->update([ 'title' => $request->title]);
        return redirect('status');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Property\Status $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
        $status->delete();
        return redirect('status');
    }
}
