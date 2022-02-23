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
    $controller = "\App\Http\Controllers\\LoginController@index";
    return App::call($controller);
});

Route::get('/Login/register', function () {
    
    $controller = "\App\Http\Controllers\\LoginController@register";
    return App::call($controller);
});

Route::post('{controller}/{action?}/{user_id?}/{id?}', function($controller,$action = 'show',$user_id = null,$id = null) {

    if ($controller) {

        $namespace = "\App\Http\Controllers\\";
        $controller = $namespace.$controller.'Controller@'.$action;
        return App::call($controller,[
            'id' => $id,
            'user_id' => $user_id
        ]); 
    
    }
    
});


Route::middleware(['tmpsession'])->group(function () {
    
    Route::get('{controller}/{action?}/{user_id?}/{id?}', function($controller,$action = 'login',$user_id = null,$id = null) {
        
        if ($controller) {

            $namespace = "\App\Http\Controllers\\";
            $controller = $namespace.$controller.'Controller@'.$action;
            return App::call($controller,[
                'id' => $id,
                'user_id' => $user_id
            ]); 
        
        }
        
    });

});
