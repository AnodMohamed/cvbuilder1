<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Info;
use App\Models\Profile;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    //
    public function index(){
        $info = Info::where('user_id', 2)->first();
        $profile = Profile::where('user_id',2)->first();
        $edu = Education::where('user_id',2)->first();

        return view('index', compact('info','profile','edu'));

    }
}
