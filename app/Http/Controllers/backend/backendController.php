<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Models\Info;
use App\Models\Profile;
use App\Models\Skill;
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

        return redirect()->route('user.profile')->with( $notification);
    }

    public function userProfile(Request $request)
    {
        return view(view: "backend.profile");

    }

    public function saveProfile(Request $request)
    {
        Profile::insert([
            'user_id'=> Auth::user()->id,
            'des'=>$request->des,

        ]);
        $notification =array(
            'message'=>'profile inserted successfully',
            'alert-type'=>'success',

        );
        return redirect()->route('user.skill')->with( $notification);

    }

    public function editInfo(Request $request){
        $info = Info::where('user_id', Auth::user()->id)->first();
        return view('backend.editInfo', compact('info'));
    }

    public function updateInfo(Request $request)
    {
        $id = $request->id;
        Info::findOrFail($id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'city'=> $request->city,
        ]);
        $notification =array(
            'message'=>'basic info update successfully',
            'alert-type'=>'success',

        );

        return redirect()->route('user.profile')->with( $notification);
    }

    public function editProfile(Request $request){
        $profile = Profile::where('user_id', Auth::user()->id)->first();
        return view('backend.editProfile', compact('profile'));
    }

    public function updateProfile(Request $request)
    {
        $id = $request->id;
        Profile::findOrFail($id)->update([
            'des'=>$request->des,
        ]);
        $notification =array(
            'message'=>'basic profile update successfully',
            'alert-type'=>'success',

        );

        return redirect()->back()->with( $notification);
    }

    public function userSkill(Request $request)
    {
        return view(view: "backend.skill");

    }

    public function saveSkill(Request $request)
    {
        Skill::insert([
            'user_id'=> Auth::user()->id,
            'skillName'=>$request->skillName,

        ]);
        $notification =array(
            'message'=>'skills inserted successfully',
            'alert-type'=>'success',

        );
        return redirect()->back()->with( $notification);

    }
}
