<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Property\Property;
use App\User;
use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $agentsCount = User::whereHas('roles', function ($q) {
            $q->where('name', 'agent')->with('properties');
        })->count();

        $agents = User::whereHas('roles', function ($q) {
            $q->where('name', 'agent')->with('properties');
        })->limit(10)->get();

        $propertiesCount = Property::count();

        $properties = Property::with([
            'property_cat', 'user'
        ])->limit(10)->get();

        $threads = Thread::forUserWithNewMessages(Auth::id())->count();
        return view('backend.admin.index', compact(['properties', 'propertiesCount' , 'agents', 'agentsCount', 'threads']));
    }

    public function propertyList()
    {
        $properties = Property::with([
            'statuses', 'additional_detail', 'property_cat', 'user'
        ])->get();
        return view('backend.properties', compact('properties'));
    }

    public function agents()
    {
        $agents = User::whereHas('roles', function ($q) {
            $q->where('name', 'agent')->with('properties');
        })->get();

        return view('backend.admin.agents', compact('agents'));
    }

    public function showAgent($id)
    {
        return redirect(route('public_single_agent', $id));
    }

    public function deleteAgent($id)
    {
        $agent = User::findorfail($id);
        $agent->delete();
        return back();
    }

}
