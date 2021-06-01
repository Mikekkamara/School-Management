<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\reportsController;
use Jenssegers\Agent\Facades\Agent;


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
        return view('welcome');
});

Route::get('/home/category', function () {
    return view('home') ;
})->name('category');
Route::get('/home/category/updates', function () {
    return view('layouts.comingSoon') ;
})->name('comingSoon');

Route::get('/hey', [
    'as'=> 'hey',
    'uses'=>'homepageController@redirectFx'
]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// New user
Route::get('/home/new_user', [homepageController::class, 'new_user']);
// New item
Route::get('/home/new_item', [homepageController::class, 'new_item'])->name('new_item');
// place order
Route::get('/home/order', [homepageController::class, 'order_item'])->name('order');
//Pos
Route::post('/home/placeOrder', [homepageController::class, 'place_order'])->name('placeOrder');
// store
Route::get('/home/store', function (){
    return view('layouts.storemgmt');
});
// Reports
Route::get('/home/reports', function (){
    return view('layouts.reports');
});
// new student
Route::get('/home/new_user/student', function () {
    return view('layouts.newstudent');
});
// new teacher
Route::get('/home/new_user/teacher', function () {
    return view('layouts.newteacher');
});
// new supplier
Route::get('/home/new_user/supplier', function () {
    return view('layouts.newsup');
});
/*
====================
SAVE NEW USER
=============
*/
Route::post('/home/new_user/student', [homepageController::class, 'create_student']);
Route::post('/home/new_user/teacher', [homepageController::class, 'create_teacher']);
Route::post('/home/new_user/supplier', [homepageController::class, 'create_supplier']);

// reorder
Route::get('/home/store/reorder', [homepageController::class, 'reorder']);
Route::get('/home/store/expire', [homepageController::class, 'expire']);
// new consumable
Route::get('/home/consumables', function (){
    return view('layouts.consumable');
});
// new permanent
Route::get('/home/permanent', function () {
    return view('layouts.permanent');
});
// new expendable
Route::get('/home/expendable', function (){
    return view('layouts.expendable');
});

// create record consumable
Route::post('/home/consumable', [homepageController::class, 'create_consumable']);
// create record permanent
Route::post('/home/permanent',[homepageController::class,'create_permanent']);
// create record expendable
Route::post('/home/expendable',[homepageController::class,'create_expendable']);

// REPORTS

/*
===================
suppliers
============
*/
Route::get('/home/reports/suppliers', [reportsController::class, 'sup_report']);

/*
===================
students
============
*/
Route::get('/home/reports/students', [reportsController::class,'stud_report']);

/*
===================
teachers
============
*/
Route::get('/home/reports/teachers',[reportsController::class,'teach_report']);
/*
===================
orders
============
*/
Route::get('/home/reports/orders',[reportsController::class, 'ord_report'] );
/*
===================
expendable
============
*/
Route::get('/home/reports/expendable', [reportsController::class,'exp_report']);
/*
===================
permanent
============
*/
Route::get('/home/reports/permanent',[reportsController::class, 'perm_report']);
/*
===================
consumable
============
*/
Route::get('/home/reports/consumable',[reportsController::class, 'cons_report']);
/*
==============
Borrow
========
*/
Route::get('/home/borrow', [reportsController::class, 'borrow_item'])->name('Borrow');






