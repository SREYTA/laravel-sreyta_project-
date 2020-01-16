<?php

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
// Route::get('/customer','PagesController@showCustomer');
Route::get('/customer','PagesController@listCustomer');
Route::get('/our_action','PagesController@action') -> name("our_action");
Route::get('/about_us','PagesController@about') -> name("about_us");
Route::get('/join_us', 'PagesController@join') -> name("join_us");
Route::get('/news', 'PagesController@news') -> name("news");
Route::get('/contact_us', 'PagesController@contact') -> name("contact_us");
// create new route
Route::get('/teacher/{index}',function($index){
    // create new array
    $teachers = array("Channak","Ronan","Shieha","Rady","Rith");
    $result = "";
    $size = sizeof($teachers);
    if($index < $size){
        $result = "This teacher is : " . $teachers[$index];
    }else{
        $result = "This array is :";
        $item = "";
        $countIndex = $size -1;
        for($i= 0 ; $i < $size; $i++){
            $item .= "[$i] " .$teachers[$i];
            if($i < $countIndex){
                $item.= ", ";
            }
        }
        $result.=$item."<br>No Teacher with this index: " .$index."<br>The largest index is :" . $countIndex;
    }
    return $result;
    
});