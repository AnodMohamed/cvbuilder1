<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    //
    public function index(){
        $info = Info::where('user_id', 2)->first();
        return view('index', compact('info'));

    }
}
