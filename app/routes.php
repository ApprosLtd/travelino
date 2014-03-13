<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::resource('/ajax/{controller}/{action?}', 'Ajax\RegionController@{$2}');

Route::any('/ajax/{controller}/{action?}', function($controller, $action = 'index'){
    
    $controller = 'Ajax\\' . ucfirst( strtolower($controller) ) . 'Controller';
    
    return App::make($controller)->callAction($action, array());
});

Route::controller('/', 'HomeController');

