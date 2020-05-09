<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {

        $threadsCount = Thread::forUserWithNewMessages(Auth::id())->count();
        $threads = Thread::forUserWithNewMessages(Auth::id())->latest('updated_at')->limit(10)->get();

        return view('backend.user.index', compact(['threads', 'threadsCount']));
    }


}
