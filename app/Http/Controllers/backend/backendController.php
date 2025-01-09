<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class backendController extends Controller
{
    //
    public function userCv(){
        return view(view: "backend.basicinfo");
    }

    public function userLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function saveInfo(Request $request)
    {
        Info::insert([
            'user_id'=> Auth::user()->id,
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'city'=> $request->city,
        ]);
        $notification =array(
            'message'=>'basic info inserted successfully',
            'alert-type'=>'success',

        );

        return redirect()->back()->with( $notification);
    }

}
