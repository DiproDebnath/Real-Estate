<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Property\Property;
use App\User;
use Illuminate\Http\Request;
use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{
    public function index()
    {
        $agent = auth()->user();
        $propertiesCount = $agent->properties()->count();
        $properties = $agent->properties()->with([
            'property_cat'
        ])->limit(10)->get();
        $threadsCount = Thread::forUserWithNewMessages(Auth::id())->count();
        $threads = Thread::forUserWithNewMessages(Auth::id())->latest('updated_at')->limit(10)->get();

        return view('backend.agent.index', compact(['properties', 'propertiesCount' , 'threads', 'threadsCount']));
    }
    public function propertyList(){
        $user = auth()->user();
        $properties = $user->properties()->with([
            'statuses', 'additional_detail', 'property_cat', 'user'
        ])->get();
//        $properties = Property::with([
//            'statuses', 'additional_detail', 'property_cat', 'user'
//        ])->get();
        return view('backend.properties', compact('properties'));
    }

    public function publicIndex()
    {
        $agents = User::whereHas('roles' , function ($q) {
            $q->where('name', 'agent');
        })->paginate(10);
        return view('frontend.agents', compact('agents'));
    }
    public function publicShow ($id)
    {
        $agent = User::with('properties')->findorfail($id);
        return view('frontend.agent', compact('agent'));
    }

}
