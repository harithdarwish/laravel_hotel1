<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('home.index');
});
*/

route::get('/',[AdminController::class, 'home']) ;

route::get('/home',[AdminController::class, 'index'])->name('home');

route::get('/create_room',[AdminController::class, 'create_room'])  -> middleware(['auth','admin']);

route::post('/add_room',[AdminController::class, 'add_room'])  -> middleware(['auth','admin']);

route::get('/view_room',[AdminController::class, 'view_room'])  -> middleware(['auth','admin']);

route::get('/room_delete/{id}',[AdminController::class, 'room_delete'])  -> middleware(['auth','admin']);

route::get('/room_update/{id}',[AdminController::class, 'room_update'])  -> middleware(['auth','admin']);

route::post('/edit_room/{id}',[AdminController::class, 'edit_room'])  -> middleware(['auth','admin']);

route::get('/room_details/{id}',[HomeController::class, 'room_details']);

route::post('/add_booking/{id}',[HomeController::class, 'add_booking']);

//Show data from two diff table 
route::get('/bookings',[AdminController::class, 'bookings']) -> middleware(['auth','admin']);

//Delete booking data from admin
route::get('/delete_booking/{id}',[AdminController::class, 'delete_booking'])  -> middleware(['auth','admin']);

//Approve and reject status
route::get('/approve_book/{id}',[AdminController::class, 'approve_book'])  -> middleware(['auth','admin']);

route::get('/reject_book/{id}',[AdminController::class, 'reject_book'])  -> middleware(['auth','admin']);

//Upload,Display,Delete image
route::get('/view_gallery',[AdminController::class, 'view_gallery'])  -> middleware(['auth','admin']);

route::post('/upload_gallery',[AdminController::class, 'upload_gallery'])  -> middleware(['auth','admin']);

route::get('/delete_gallery/{id}',[AdminController::class, 'delete_gallery'])  -> middleware(['auth','admin']);

//Contact US
route::post('/contact',[HomeController::class, 'contact']);

//Message admin
route::get('/all_messages',[AdminController::class, 'all_messages'])  -> middleware(['auth','admin']);

route::get('/send_mail/{id}',[AdminController::class, 'send_mail'])  -> middleware(['auth','admin']);

route::post('/mail/{id}',[AdminController::class, 'mail'])  -> middleware(['auth','admin']);


//header
route::get('our_rooms',[HomeController::class, 'our_rooms']);

route::get('hotel_gallery',[HomeController::class, 'hotel_gallery']);

route::get('contact_us',[HomeController::class, 'contact_us']);



//Reminder Google Calender
route::get('/reminder_calender',[AdminController::class, 'reminder_calender'])  -> middleware(['auth','admin']);




