<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Info;
use App\Models\Language;
use App\Models\Portfolio;
use App\Models\Profile;
use App\Models\ProSkill;
use App\Models\Skill;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    //
    public function index(){
        $info = Info::where('user_id', 2)->first();
        $profile = Profile::where('user_id',2)->first();
        $edu = Education::where('user_id',2)->first();

        $language = Language::where( 'user_id', 2)->first();
        $languageName = $language->languageName;

        $skill = Skill::where('user_id', 2)->first();
        $skillName = $skill->skillName;
        $skills = explode(',',$skillName);

        $proskills = ProSkill::get();
        $portfolios = Portfolio::get();


        return view('index', compact('info','profile','edu','languageName','skills','proskills','portfolios'));

    }
}
