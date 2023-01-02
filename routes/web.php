<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $sliders = App\Models\Slider::all();
    $exams = App\Models\Exams::all();  
    return view('frontend.index',['sliders'=>$sliders],['exams'=>$exams]);
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/apply', function () {
    return view('frontend.apply.apply');
});

Route::get('/qualification', function () {
    return view('frontend.apply.qualification');
});

Route::get('/document', function () {
    return view('frontend.apply.document');
});

Route::get('/admit_card', function () {
    return view('admit_card');
});

Route::get('/active_exam', function () {
    $active= App\Models\ActiveExam::all();
    $upcoming= App\Models\UpcomingExam::all();
    $post= App\Models\PastExam::all();
    return view('frontend.active_exam',['active'=>$active],['upcoming'=>$upcoming],['post'=>$post]);
});

Route::get('/institute', function () {
    return view('frontend.institute');
});

Route::get('exam/{slug}', function($slug){
	$exam = App\Models\Exams::where('slug', '=', $slug)->firstOrFail();
	return view('frontend.exam_details', compact('exam'));
});

Route::get('/rti', function () {
    return view('frontend.rti');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');