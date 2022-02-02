<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


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
Route::get('analyse', function (Request $request) {
    dd($request);
})->name('analyse');
Route::get('match', [App\Http\Controllers\MatchController::class, 'match'])->name('match');
Route::get('/mail',function()
{
    $details = [
        'title' => 'About you question',
        'body' => 'test'
    ];
    Mail::to('a.jalal@enim.ac.ma')->send(new \App\Mail\MyTestMail($details));
});