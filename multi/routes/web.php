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

Route::group(['namespace' => 'Form'], function(){

    Route::get('listagem-usuario', 'TestController@listUser');

    //Route::verb('uri', 'Controler@method')->name('route-name);
    
    /** 
     * VERBO GET
     */
    //Users
    Route::get('usuarios', 'TestController@listAllUsers')->name('users.listAll');
    Route::get('usuarios/novo', 'TestController@formAddUser')->name('users.formAddUser');
    //Professionals
    //Route::get('profissionais', 'ProfessionalController@listAll')->name('prof.listAll');
    //Route::get('profissionais/novo', 'ProfessionalController@formAdd')->name('prof.formAdd');

    //Users
    //a uri abaixo pode ser igual a do put
    Route::get('usuarios/editar/{user}', 'TestController@formEditUser')->name('users.formEditUser');
    Route::get('usuarios/{user}', 'TestController@listUser')->name('users.list');
    //Professionals
    //Route::get('profissionais/editar/{professional}', 'ProfessionalController@formEdit')->name('prof.formEdit');
    //Route::get('profissionais/{professional}', 'ProfessionalsController@list')->name('prof.list');

    /** 
     * VERBO POST
     */

    //Users
    //se coloca store porque pode ser uma palavra reservada do laravel para o crud
    //mas é indicado por questão de segurança
    Route::post('usuarios/store', 'TestController@storeUser')->name('users.store');
    //Professionals
    //Route::post('profissionais/store', 'ProfessionalController@store')->name('prof.store');


    /** 
     * VERBO PUT/PATCH
     */

    //Users
    //o patch faz a mesma coisa mas um deles é apenas pra editar o outro pra editar/salvar
    //pode-se usar o patch nessa rota no lugar de put
    //trocar também o @method('put') da view para @method('put') 
    Route::put('usuarios/edit/{user}', 'TestController@edit')->name('users.edit');
    //Professionals
    //Route::put('profissionais/edit/{professional}', 'ProfessionalController@edit')->name('prof.edit');


    /** 
     * VERBO DELETE
     */
    
    //Users
    //se coloca destroy porque pode ser uma palavra reservada do laravel para o crud
    //mas é indicado por questão de segurança
    Route::delete('usuarios/destroy/{user}', 'TestController@destroy')->name('user.destroy');
    //Professionals
    //Route::delete('profissionais/destroy/{professional}', 'ProfessionalController@destroy')->name('prof.destroy');
});

