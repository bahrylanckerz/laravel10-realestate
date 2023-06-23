<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function profile()
    {
        $data['user'] = Auth::user();
        return view('admin.profile', $data);
    }

    public function profileUpdate(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->name    = $request->name;
        $user->email   = $request->email;
        $user->phone   = $request->phone;
        $user->address = $request->address;

        if ($request->file('image')) {
            @unlink(public_path('uploads/img/' . $user->photo));
            $file = $request->file('image');
            $filename = date('Ymdhis').'-'. $user->username.'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/img/'), $filename);
            $user->photo = $filename;
        }

        $user->save();

        $notification = [
            'alert-type' => 'success',
            'message'    => 'Data profile updated successfully',
        ];
        return redirect()->back()->with($notification);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
