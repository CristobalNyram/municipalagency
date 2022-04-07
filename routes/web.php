<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('dashboard.index');
    })->name('dashboard');

    //INCOMES
   
    Route::get('/ingreso',function()
    {
        return view('crud.income.index');    
    })->name('income');

    Route::get('/profile/settings',function()
    {
        return view('profile.settings');    
    })->name('profile.settings');



    //EXPENSES
    Route::get('/egreso',function()
    {
        return view('crud.expenses.index');    
    })->name('expense');

      //BOX MONEY
      Route::get('/caja',function()
      {
          return view('crud.moneybox.index');    
      })->name('boxmoney');



});
