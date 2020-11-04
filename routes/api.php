<?php

use App\Http\Controllers\leermedicina;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/home', 'HomeController@index')->name('home');
//Route::apiResource("medicina", "MedicinaController");

//$router->get('/', function () use ($router) {
 //   return $router->app->version();
//});

//Envio de parametro
//$router->get('user', function () use ($router) {
  //  return "HOLA MUNDO";
//});

//$router->get('medicinaprueba', function () use ($router){
//    return "MedicinaController";
//});

//$router->get('medicina','MedicinaController');


Route::post('/ingresarmedicina', 'MedicinaController@estoesingresarmedicina'); 
Route::get('/ingresarmedicina', 'MedicinaController@leermedicina');



