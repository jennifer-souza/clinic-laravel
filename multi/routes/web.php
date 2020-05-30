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
    return view('welcome');
});

//a rota com function abaixo serve para não ficar repitindo namespace
//mas a aplicação funciona sem ela
//sem ela é necessário colocar Route::verb('uri', 'Form\Controler@method')->name('route-name) 

Route::resource('profissionais', 'Form\ProfessionalController')
    ->names('professional')
    ->parameters(['profissionais' => 'professional']);

Route::resource('pacientes', 'Form\PatientController')
    ->names('patient')
    ->parameters(['pacientes' => 'patient']);

Route::resource('agendamentos', 'Form\ScheduleController')
    ->names('schedule')
    ->parameters(['agendamentos' => 'schedule']);

    //Route::get('profissionais/{id}', 'Form\ProfessionalController@show');
Route::group(['namespace' => 'Form'], function(){


    Route::get('listagem-usuario', 'TestController@listUser');

    //Route::verb('uri', 'Controler@method')->name('route-name);
    
    /** 
     * VERBO GET
     */
    //Users
    Route::get('usuarios', 'TestController@listAllUsers')->name('users.listAll');
    Route::get('usuarios/novo', 'TestController@formAddUser')->name('users.formAddUser');

    //Users
    //a uri abaixo pode ser igual a do put
    Route::get('usuarios/editar/{user}', 'TestController@formEditUser')->name('users.formEditUser');
    Route::get('usuarios/{user}', 'TestController@listUser')->name('users.list');

    /** 
     * VERBO POST
     */

    //Users
    //se coloca store porque pode ser uma palavra reservada do laravel para o crud
    //mas é indicado por questão de segurança
    Route::post('usuarios/store', 'TestController@storeUser')->name('users.store');

    /** 
     * VERBO PUT/PATCH
     */

    //Users
    //o patch faz a mesma coisa mas um deles é apenas pra editar o outro pra editar/salvar
    //pode-se usar o patch nessa rota no lugar de put
    //trocar também o @method('put') da view para @method('put') 
    Route::put('usuarios/edit/{user}', 'TestController@edit')->name('users.edit');

    /** 
     * VERBO DELETE
     */
    
    //Users
    //se coloca destroy porque pode ser uma palavra reservada do laravel para o crud
    //mas é indicado por questão de segurança
    Route::delete('usuarios/destroy/{user}', 'TestController@destroy')->name('user.destroy');
});

