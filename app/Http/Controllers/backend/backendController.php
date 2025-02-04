<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Image;
use App\Models\Info;
use App\Models\Language;
use App\Models\Level;
use App\Models\Profile;
use App\Models\ProSkill;
use App\Models\Skill;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

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
        return redirect()->route('user.edu')->with( $notification);

    }

    public function editSkill(Request $request){
        $skill = Skill::where('user_id', Auth::user()->id)->first();
        $skillName = $skill->skillName;
        $skills = explode(',',$skillName);

        return view('backend.editSkill', compact('skillName', 'skill'));
    }

    public function updateSkill(Request $request)
    {
        $id = $request->id;
        Skill::findOrFail($id)->update([
            'skillName'=>$request->skillName,
        ]);
        $notification =array(
            'message'=>'skills update successfully',
            'alert-type'=>'success',

        );

        return redirect()->back()->with( $notification);
    }

    public function userEdu(Request $request)
    {
        $kind = Level::get();
        return view('backend.edu', compact('kind'));


    }

    public function saveEdu(Request $request)
    {
        Education::insert([
            'user_id'=> Auth::user()->id,
            'level_id'=>$request->level_id,
            'eduName'=>$request->eduName,
            'startDate'=>$request->startDate,
            'EndDate'=>$request->EndDate,
            'desc'=>$request->desc,
            'field'=>$request->field,

        ]);
        $notification =array(
            'message'=>'Education inserted successfully',
            'alert-type'=>'success',

        );
        return redirect()->route('user.edu')->with( $notification);

    }

    public function editEdu(Request $request){
        $edus = Education::where('user_id', Auth::user()->id)->get();
        return view('backend.editEdu', compact('edus'));

    }

    public function editEduRow($id){
        $edu = Education::where('id', $id)->first();
        $kind = Level::get();

        return view('backend.editEduRow', compact('edu','kind'));

    }

    public function updateEdu(Request $request)
    {
        $id = $request->id;
        Education::findOrFail($id)->update([
            'level_id'=>$request->level_id,
            'eduName'=>$request->eduName,
            'startDate'=>$request->startDate,
            'EndDate'=>$request->EndDate,
            'desc'=>$request->desc,
            'field'=>$request->field,
        ]);
        $notification =array(
            'message'=>'Education row update successfully',
            'alert-type'=>'success',

        );

        return redirect()->route('edit.edu')->with( $notification);
    }

    public function deleteEduRow($id){

        Education::findOrFail($id)->delete();
        $notification =array(
            'message'=>'Education deleted successfully',
            'alert-type'=>'success',

        );

        return redirect()->back()->with( $notification);
    }

    public function userLanguage()
    {
        return view('backend.language');

    }
    public function saveLanguage(Request $request)
    {
        Language::insert([
            'user_id'=> Auth::user()->id,
            'languageName'=>$request->languageName,

        ]);
        $notification =array(
            'message'=>'language inserted successfully',
            'alert-type'=>'success',

        );
        return redirect()->route('user.image')->with( $notification);

    }


    public function editLanguage(Request $request){
        $language = Language::where('user_id', Auth::user()->id)->first();
        $languageName = $language->languageName;
        $languages = explode(',',$languageName);

        return view('backend.editLanguage', compact('languageName', 'language'));
    }

    public function updateLanguage(Request $request)
    {
        $id = $request->id;
        Language::findOrFail($id)->update([
            'languageName'=>$request->languageName,

        ]);
        $notification =array(
            'message'=>'Language update successfully',
            'alert-type'=>'success',

        );

        return redirect()->route('edit.language')->with( $notification);
    }


    public function userImage()
    {
        return view('backend.image');

    }

    public function saveImage(Request $request)
    {
        if($request->hasFile('img')){
            $manager = new ImageManager(new Driver());

                // Generate a unique name for the image
            $img_name = hexdec(uniqid()) . '.' . $request->file('img')->getClientOriginalExtension();

            // Read the image using Intervention Image
            $img = $manager->read($request->file('img'));

            // Resize the image to 480x480
            $img->resize(480, 480);

            // Save the image as JPEG with 80% quality
            $img->save(public_path('upload/' . $img_name), 80);

            // Create a URL path for the image
            $url = 'upload/' . $img_name;

            Image::insert([
                'user_id'=> Auth::user()->id,
                'img'=>$url,

            ]);
            $notification =array(
                'message'=>'Image uploaded successfully',
                'alert-type'=>'success',

            );
            return redirect()->back()->with( $notification);
        }
    }

    public function editImage(Request $request){

        $image = Image::where('user_id', Auth::user()->id)->first();
        return view('backend.editImage', compact( 'image'));
    }

    public function updateImage(Request $request)
    {
        $id = $request->id;
        $Old_img = $request->Old_img;

        if($request->hasFile('img')){
            $manager = new ImageManager(new Driver());

                // Generate a unique name for the image
            $img_name = hexdec(uniqid()) . '.' . $request->file('img')->getClientOriginalExtension();

            // Read the image using Intervention Image
            $img = $manager->read($request->file('img'));

            // Resize the image to 480x480
            $img->resize(480, 480);

            // Save the image as JPEG with 80% quality
            $img->save(public_path('upload/' . $img_name), 80);

            // Create a URL path for the image
            $url = 'upload/' . $img_name;

            if(file_exists($Old_img)){
                unlink($Old_img);
            }
            Image::findOrFail($id)->update([
                'img'=>$url,

            ]);
            $notification =array(
                'message'=>'Image updated successfully',
                'alert-type'=>'success',

            );
            return redirect()->back()->with( $notification);
        }
    }


    public function userProSkill(){
        return view('backend.proSkill');

    }

    public function saveProSkill(Request $request)
    {
        ProSkill::insert([
            'skill'=>$request->skill,
            'skill_level'=>$request->skill_level,

        ]);
        $notification =array(
            'message'=>' skill inserted successfully',
            'alert-type'=>'success',

        );

        return redirect()->back()->with( $notification);
    }

    public function editProSkill(Request $request){
        $proSkills = ProSkill::get();
        return view('backend.editProSkill', compact('proSkills'));

    }

    public function editProSkillRow($id){

        $proSkill = ProSkill::where('id', $id)->first();
        return view('backend.proSkillRow', compact('proSkill'));


    }

    public function updateProSkill(Request $request)
    {
        ProSkill::findOrFail($request->id)->update([
            'skill'=>$request->skill,
            'skill_level'=>$request->skill_level,

        ]);
        $notification =array(
            'message'=>' Technical Skill updated successfully',
            'alert-type'=>'success',

        );

        return redirect()->route("edit.proSkill")->with( $notification);
    }

    public function cv(Request $request){

        return view('backend.cv');
    }
    public function downloadCv(Request $request){
        $pdf = Pdf::loadView('backend.getCv')->setPaper('a4')->setOption([
            'temdir' => public_path(),
            'chroot '=> public_path(),

        ]);
        return $pdf->download('cv.pdf');
    }
}
