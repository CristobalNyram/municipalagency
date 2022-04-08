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

    Route::get('/profile/settings',function()
    {
        return view('profile.settings');    
    })->name('profile.settings');

    Route::get('/', function () {
        return view('dashboard.index');
    })->name('dashboard');

    //INCOMES
   
    Route::get('/ingreso',function()
    {
        return view('crud.income.index');    
    })->name('income');

    Route::get('/ingreso/profile/1',function()
    {
        return view('crud.income.profile');    
    })->name('income.profile');

    Route::get('/ingreso/resumen',function()
    {
        return view('crud.income.summary');    
    })->name('income.summary');


     //INCOMES------------------------END


 



    //EXPENSES------------------------START
    Route::get('/egreso',function()
    {
        return view('crud.expenses.index');    
    })->name('expense');

    
    Route::get('/egreso/profile/1',function()
    {
        return view('crud.expenses.profile');    
    })->name('expense.profile');


    Route::get('/egreso/resumen',function()
    {
        return view('crud.expenses.summary');    
    })->name('expense.summary');

    //EXPENSES------------------------END



      //BOX MONEY----------------------START
      Route::get('/caja',function()
      {
          return view('crud.moneybox.index');    
      })->name('boxmoney');

      Route::get('/caja/profile',function()
      {
          return view('crud.moneybox.profile');    
      })->name('boxmoney.profile');

      Route::get('/caja/resumen',function()
      {
          return view('crud.moneybox.summary');    
      })->name('moneybox.summary');
  

     //BOX MONEY----------------------END





});
