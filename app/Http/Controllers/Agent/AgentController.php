<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function publicIndex()
    {
        $agents = User::whereHas('roles' , function ($q) {
            $q->whereIn('name', ['agent', 'admin']);
        })->paginate(10);
        return view('frontend.agents', compact('agents'));
    }
    public function publicShow ($id)
    {
        $agent = User::with('properties')->findorfail($id);
        return view('frontend.agent', compact('agent'));
    }
}
