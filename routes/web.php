<?php

use App\Http\Controllers\KiderController;
use Illuminate\Support\Facades\Route;

Route::get('/',[KiderController::class,'index'])->name('index');
Route::get('/appointment',[KiderController::class,'appointment'])->name('appointment');
Route::get('/error',[KiderController::class,'error'])->name('error');
Route::get('/about',[KiderController::class,'about'])->name('about');
Route::get('/call_to_action',[KiderController::class,'call_to_action'])->name('call_to_action');
Route::get('/classes.',[KiderController::class,'classes'])->name('classes');
Route::get('/contact',[KiderController::class,'contact'])->name('contact');
Route::get('/facility',[KiderController::class,'facility'])->name('facility');
Route::get('/teamteam',[KiderController::class,'team'])->name('team');
Route::get('/testimonial',[KiderController::class,'testimonial'])->name('testimonial');