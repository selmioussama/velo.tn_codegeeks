<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\VeloLController;
use App\Http\Controllers\LocationVeloController;
use App\Http\Controllers\ReclamationController;


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

route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect']);


Route::get('/events',[EventController::class,'index'])->name('event.showevent');
Route::get('/eventsfront',[EventController::class,'show'])->name('event.show');
Route::get('/createEvent',[EventController::class,'create'])->name('event.create');
Route::get('/storeEvent',[EventController::class,'store'])->name('event.store');
Route::get('/eventdelete/{id?}',[EventController::class,'destroy'])->name('event.delete');
Route::get('/eventEdit/{id?}',[EventController::class,'edit'])->name('event.edit');
Route::get('/updateEvent/{id?}',[EventController::class,'update'])->name('event.update');


Route::get('/feedbacks',[FeedbackController::class,'index'])->name('feedback.showfeedback');
Route::get('/createFeedback',[FeedbackController::class,'create'])->name('feedback.create');
Route::get('/storeFeedback',[FeedbackController::class,'store'])->name('feedback.store');
Route::get('/feedbackdelete/{id?}',[FeedbackController::class,'destroy'])->name('feedback.delete');
Route::get('/feedbackEdit/{id?}',[FeedbackController::class,'edit'])->name('feedback.edit');
Route::get('/updateFeedback/{id?}',[FeedbackController::class,'update'])->name('feedback.update');


//
//Route::get('/VeloLs/add',[VeloLController::class,'create']);
//Route::get("/allLocationVelo",[VeloLController::class , 'index']);
//Route::get('createVelo',[VeloLController::class,'store']);
Route::resource("veloLs",VeloLController::class);
Route::get("/myVelos",[VeloLController::class, 'getconnectedVelos']);
Route::get("/veloAdmin",[VeloLController::class, 'LocationVeloAdmin']);
Route::resource("reclamations",ReclamationController::class);
