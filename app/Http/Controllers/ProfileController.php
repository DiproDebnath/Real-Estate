<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{

    public function changePassword()
    {
        return view('backend.change-password');
    }

    public function PasswordStore(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);


        if (Hash::check($request->currentpassword, $user->password)) {
            $user->update([
                "password" => Hash::make($request->password),
            ]);

            if (Gate::allows('isAdmin')) {
                return redirect(route('admin_dashboard'));
            } elseif (Gate::allows('isAgent')) {
                return redirect(route('agent_dashboard'));
            } else {
                return redirect(route('user_dashboard'));
            }

        }


    }

    public function profile()
    {
        $user = auth()->user();
        return view('backend.profile', compact('user'));
    }

    public function profileStore(Request $request)
    {

        $user = auth()->user();

      $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'bio' => ['required', 'string'],


        ]);
        if ($request->hasFile('profile_pic')) {

            $allowedfileExtension = ['jpg', 'png', 'jpeg'];
            $file = $request->file('profile_pic');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);
            if ($check) {
                $path = public_path() . '/profile/';
                $file->move($path, $filename);

                $user->update([
                    "image" => $filename,
                    'name' => $request->name,
                    "email" => $request->email,
                    'bio' => $request->bio,
                ]);
                if (Gate::allows('isAdmin')) {
                    return redirect(route('admin_dashboard'));
                } elseif (Gate::allows('isAgent')) {
                    return redirect(route('agent_dashboard'));
                } else {
                    return redirect(route('user_dashboard'));
                }

            }
        }
    }
}

