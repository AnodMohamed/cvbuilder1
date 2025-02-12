<?php

use App\Http\Controllers\backend\backendController;
use App\Http\Controllers\frontend\frontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(backendController::class)->group(function () {
        Route::get('/user/cv','userCv')->name('usercv');
        Route::get('/user/logout','userLogout')->name('user.logout');

        Route::post('/save/info','saveInfo')->name('save.info');
        Route::get('/edit/info','editInfo')->name('edit.info');
        Route::post('/update/info','updateInfo')->name('update.info');

        Route::get('/user/profile','userProfile')->name('user.profile');
        Route::post('/save/profile','saveProfile')->name('save.profile');
        Route::get('/edit/profile','editProfile')->name('edit.profile');
        Route::post('/update/profile','updateProfile')->name('update.profile');

        Route::get('/user/skill','userSkill')->name('user.skill');
        Route::post('/save/skill','saveSkill')->name('save.skill');
        Route::get('/edit/skill','editSkill')->name('edit.skill');
        Route::post('/update/skill','updateSkill')->name('update.skill');

        Route::get('/user/edu','userEdu')->name('user.edu');
        Route::post('/save/edu','saveEdu')->name('save.edu');
        Route::get('/edit/edu','editEdu')->name('edit.edu');
        Route::get('/edit/edu/row/{id}','editEduRow')->name('edit.edu.row');
        Route::post('/update/edu','updateEdu')->name(name: 'update.edu');
        Route::get('/delete/edu/row/{id}','deleteEduRow')->name('delete.edu.row');

        Route::get('/user/language','userLanguage')->name('user.language');
        Route::post('/save/language','saveLanguage')->name('save.language');
        Route::get('/edit/language','editLanguage')->name('edit.language');
        Route::post('/update/language','updateLanguage')->name('update.language');

        route::get('/user/proSkill','userProSkill')->name('user.proSkill');
        Route::post('/save/proSkill','saveProSkill')->name('save.proSkill');
        Route::get('/edit/proSkill','editProSkill')->name('edit.proSkill');
        Route::get('/edit/proSkill/row/{id}', 'editProSkillRow')->name('edit.proSkill.row');
        Route::post('/update/proSkill','updateProSkill')->name('update.proSkill');
        Route::get('/delete/proSkill/row/{id}','deleteProskillRow')->name('delete.proSkill.row');

        Route::get('/user/image','userImage')->name('user.image');
        Route::post('/save/image','saveImage')->name('save.image');
        Route::get('/edit/image','editImage')->name('edit.image');
        Route::post('/update/image','updateImage')->name('update.image');

        Route::get('/user/portfolio','userPortfolio')->name('user.portfolio');
        Route::post('/save/portfolio','savePortfolio')->name('save.portfolio');
        Route::get('/edit/portfolio','editPortfolio')->name('edit.portfolio');
        Route::get('/edit/portfolio/row/{id}','editPortfolioRow')->name('edit.portfolio.row');
        Route::post('/update/portfolio','updatePortfolio')->name(name: 'update.portfolio');
        Route::get('/delete/portfolio/row/{id}','deletePortfolioRow')->name('delete.portfolio.row');

        Route::get('/cv',action: 'cv')->name('cv');
        Route::get('/downloadCv','downloadCv')->name('downloadCv');

    });

});

Route::get('/', [frontendController::class,'index'])->name('index');



require __DIR__.'/auth.php';
