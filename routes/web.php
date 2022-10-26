<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\DonController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\EventController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\VeloLController;
use App\Http\Controllers\LocationVeloController;
use App\Http\Controllers\ComplaintController;


use App\Http\Controllers\AccessoireController;
use App\Http\Controllers\PromotionController;



use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\RepairController;


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

route::get('/view_category',[AdminController::class,'view_category']);
route::post('/add_category',[AdminController::class,'add_category']);
route::get('/delete_category/{id}',[AdminController::class,'delete_category']);
route::get('/view_velo',[AdminController::class,'view_velo']);
route::post('/add_velo',[AdminController::class,'add_velo']);
route::get('/show_velos',[AdminController::class,'show_velos']);
route::get('/delete_velo/{id}',[AdminController::class,'delete_velo']);
route::get('/update_velo/{id}',[AdminController::class,'update_velo']);
route::post('/update_velo_confirm/{id}',[AdminController::class,'update_velo_confirm']);
route::get('/velo_details/{id}',[HomeController::class,'velo_details']);
route::post('/add_cart/{id}',[HomeController::class,'add_cart']);
route::get('/show_cart',[HomeController::class,'show_cart']);
route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']);





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
Route::resource("complaints",ComplaintController::class);
Route::resource('associations', AssociationController::class);
Route::resource('dons', DonController::class);
route::get('/association',[AssociationController::class,'indexs']);

Route::resource('accessoire', AccessoireController::class);
Route::resource('/promotion', PromotionController::class);


Route::resource('reclamations', ReclamationController::class);
Route::resource('repairs', RepairController::class);


