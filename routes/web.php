<?php

use App\Http\Controllers\ClassesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CoacheslController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SubscriptionPriceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;




// Users Controller Start :

Route::get('/', [UsersController::class, 'home']);
Route::get('/about', [UsersController::class, 'about']);
Route::get('/services', [UsersController::class, 'services']);
Route::get('/contact', [UsersController::class, 'contact']);
Route::get('/admin', [UsersController::class, 'admin']);
Route::get('/Aproduct', [UsersController::class, 'Aproduct']);
Route::get('/dashbord', [UsersController::class, 'dashbord'])->middleware('AdminLog');
Route::get('/users', [UsersController::class, 'users'])->middleware('AdminLog');
Route::get('/profile', [UsersController::class, 'profile'])->name('profile');
Route::get('/', [UsersController::class, 'home']);
Route::get('/adduser', [UsersController::class, 'adduser'])->middleware('AdminLog');
Route::post('/add', [UsersController::class, 'add']);
Route::get('/edituser/{id}', [UsersController::class, 'edituser'])->name('edituser')->middleware('AdminLog');
Route::post('/saveedit', [UsersController::class, 'saveedit'])->name('saveedit');
Route::get('/deleteuser/{id}', [UsersController::class, 'deleteuser'])->name('deleteuser')->middleware('AdminLog');
Route::get('/logout', [UsersController::class, 'logout']);
Route::get('/editmyprofile', [UsersController::class, 'editmyprofile']);
Route::post('/saveprofileedit', [UsersController::class, 'saveprofileedit'])->name('saveprofileedit');
Route::post('/confirm-subscription', [UsersController::class, 'confirmSubscription'])->middleware('web');
Route::post('/signin', [UsersController::class, 'signin']);
Route::get('/test/{id}', [UsersController::class, 'test']);


// Users Controller End :



// Admin Controller Start :

Route::get('/admins', [AdminController::class, 'admins'])->middleware('AdminLog');
Route::get('/editadmin/{id}', [AdminController::class, 'editadmin'])->name('editadmin')->middleware('AdminLog');
Route::post('/saveadmin', [AdminController::class, 'saveadmin']);
Route::get('/deleteadmin/{id}', [AdminController::class, 'deleteadmin'])->name('deleteadmin')->middleware('AdminLog');
Route::get('/addadmin', [AdminController::class, 'addadmin'])->middleware('AdminLog');
Route::post('/addnewadmin', [AdminController::class, 'addnewadmin']);
Route::get('/subreq', [AdminController::class, 'subreq']);
Route::get('/accecpt/{id}', [AdminController::class, 'accept'])->name('accecpt');
Route::get('/adminlogin', [AdminController::class, 'login']);
Route::post('/adminlogedd', [AdminController::class, 'adminlogedd'])->name('adminlogedd');
Route::get('/adminlogout', [AdminController::class, 'logout']);



// Admin Controller End :



// Price Controller Start :

Route::get('/addprice', [SubscriptionPriceController::class, 'addprice'])->middleware('AdminLog');
Route::post('/saveprice', [SubscriptionPriceController::class, 'saveprice'])->middleware('AdminLog');
Route::get('/editprice/{id}', [SubscriptionPriceController::class, 'editprice'])->name('editprice')->middleware('AdminLog');
Route::post('/savepriceedit', [SubscriptionPriceController::class, 'savepriceedit']);
Route::get('/deleteprice/{id}', [SubscriptionPriceController::class, 'deleteprice'])->name('deleteprice')->middleware('AdminLog');
Route::get('/prices', [SubscriptionPriceController::class, 'prices'])->middleware('AdminLog');

// Price Controller End :



// Coaches Controller Start

Route::get('/coaches', [CoacheslController::class, 'coaches'])->middleware('AdminLog');
Route::get('/team', [CoacheslController::class, 'team']);
Route::get('/addcoach', [CoacheslController::class, 'addcoach'])->middleware('AdminLog');
Route::post('/addcoaches', [CoacheslController::class, 'add']);
Route::get('/deletecoach/{id}', [CoacheslController::class, 'delete'])->name('deletecoach')->middleware('AdminLog');
Route::get('/editcoach/{id}', [CoacheslController::class, 'editcoach'])->name('editcoach')->middleware('AdminLog');
Route::post('/editcoaches', [CoacheslController::class, 'edit'])->name('editcoaches');

// Coaches Controller End



// Classes Controller Start

Route::get('/addclass', [ClassesController::class, 'addclass'])->middleware('AdminLog');
Route::post('/saveclass', [ClassesController::class, 'saveclass']);
Route::get('/editclass/{id}', [ClassesController::class, 'editclass'])->name('editclass')->middleware('AdminLog');
Route::post('/editclasses', [ClassesController::class, 'edit'])->name('editclasses');
Route::get('/deleteclass/{id}', [ClassesController::class, 'delete'])->name('deleteclass')->middleware('AdminLog');
Route::get('/classes', [ClassesController::class, 'classes'])->middleware('AdminLog');

// Classes Controller End


// Slider Controller Start

Route::get('/slider', [SliderController::class, 'slider'])->middleware('AdminLog');
Route::get('/addslider', [SliderController::class, 'addslider'])->middleware('AdminLog');
Route::post('/saveslider', [SliderController::class, 'saveslider']);
Route::get('/deleteslider/{id}', [SliderController::class, 'deleteslider'])->name('deleteslider')->middleware('AdminLog');

// Slider Controller End


// Contact Controller Start

Route::post('/snedComment', [ContactController::class, 'snedComment']);
Route::get('/comment', [ContactController::class, 'comment']);
Route::get('/deletecomment/{id}', [ContactController::class, 'deletecomment'])->name('deletecomment');

// Contact Controller End



// Login Controller Start

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/store', [LoginController::class, 'store'])->name('store');
Route::post('/userlogin', [LoginController::class, 'userlogin'])->name('userlogin');

// Login Controller End


// Subscription Controller Start

Route::get('/deletesubscriptions/{id}', [SubscriptionController::class, 'delete'])->name('deletesubscriptions')->middleware('AdminLog');
Route::get('/subscriptions', [SubscriptionController::class, 'subscriptions'])->middleware('AdminLog');

// Subscription Controller End





