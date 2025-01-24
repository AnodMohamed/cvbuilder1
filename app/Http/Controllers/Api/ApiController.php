<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function getAllinfo(){
        $info = Info::get();
        return response($info);
    }
}
