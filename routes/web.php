<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\SubscriptionController;

use Illuminate\Support\Facades\Route;

use App\Models\Courses;
use App\Models\Skill; // What is listed on the welcome page 

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

Route::get('/', function () {

    $courses = Courses::all();
    $skills = Skill::all();

    return view('welcome')->with('courses', $courses)
                            ->with('skills', $skills);
})->name('welcome');

Route::resource('courses', CourseController::class);

Route::resource('subscriptions', SubscriptionController::class);

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
