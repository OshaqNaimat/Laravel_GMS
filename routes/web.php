<?php
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function() {
    return view('about');
});

Route::get('/services',function() {
    return view('services');
});

Route::get('/contact',function() {
    return view('contact');
});

Route::POST('/add-survey',[SurveyController::class,'createSurvey']);

Route::get('/services',[SurveyController::class,'getData']  );
Route::post('/delete/{id}',[SurveyController::class,'deleteData']);
Route::post('/update-survey/{id}',[SurveyController::class,'updateData']);

