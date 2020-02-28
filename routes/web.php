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
Route::get('/student','StudentsController@showStudent');
Route::get('/students','StudentsController@getStudent');
Route::get('/studentform','StudentsController@formStudent');
Route::post('/createstudent','StudentsController@insertStudent');
Route::get('/showform/{id}','StudentsController@showform')->name('showeditform');
Route::patch('updatestudent/{id}','StudentsController@updateStudent') -> name('updateStudent');
Route::get('student/{name}','StudentsController@searchStudent');
Route::get('/deletestudent/{id}','StudentsController@delete')-> name("deletestudent");
Route::get('/subject','SubjectsController@showSubject')-> name("subject");
Route::get('/our_action','PagesController@action') -> name("our_action");
Route::get('/about_us','PagesController@about') -> name("about_us");
Route::get('/join_us', 'PagesController@join') -> name("join_us");
Route::get('/news', 'PagesController@news') -> name("news");
Route::get('/contact_us', 'PagesController@contact') -> name("contact_us");



Route::resource('/comments', 'CommentController');

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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addProfile', 'UserController@addProfiles');
Route::get('/showProfile', 'UserController@showProfile')->name('showProfile');
Route::get('/editProfile', 'UserController@updateProfile');
Route::get('/showName', 'ProfileController@showUserName');

Route::get('/showPost', 'PostController@showPost')->name('showPost');
Route::post('/addPost', 'PostController@addPost')->name('addPost');
