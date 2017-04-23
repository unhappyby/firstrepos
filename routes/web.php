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

Route::get('role', [
    'middleware' => 'Role:editor',
    'uses' => 'TestController@index',
]);

Route::get('name/{name?}', function($name = 'Ты похоже поц, раз не ввел свое имя') {
    echo "Name: $name";
});

Route::get('terminate', [
    'middleware' => 'terminate',
    'uses' => 'ABCController@index',
]);

Route::get('/usercontroller/path',[
   'middleware' => 'First',
   'uses' => 'UserController@showPath'
]);

Route::resource('my', 'MyController');

//class MyClass{
//   public $foo = 'bar';
//}
//Route::get('/myclass','ImplicitController@index');

Route::get('foo/bar', 'UriController@index');

Route::get('/register', function() {
    return view('register');
});
Route::post('/user/register', array('uses'=>'UserRegistration@postRegister'));

Route::get('/cookie/set', 'CookieController@setCookie');

Route::get('/cookie/get', 'CookieController@getCookie');

Route::get('/header', function() {
    return response("Hello", 200)->header('Content-Type', 'text/html')->withCookie(cookie('name', 'Virat Gandhi'));
});

Route::get('json',function(){
   return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
});

Route::get('blade', function() {
  return view('page', array('name' => 'Virat Gandhi'));
});

Route::get('/test', ['as' => 'testing', function() {
  return view('test');
}]);

Route::get('redirect', function() {
  return redirect()->route('testing');
});

Route::get('rr', 'RedirectController@index');
Route::get('/redirectcontroller', function() {
  return redirect()->action('RedirectController@index');
});

//---------------------Work with DB--------------------------

Route::get('insert', 'StudInsertController@insertform');
Route::post('create', 'StudInsertController@insert');

Route::get('view-records', 'StudViewController@index');

Route::get('edit-records', 'StudUpdateController@index');
Route::get('edit/{id}', 'StudUpdateController@show');
Route::post('edit/{id}', 'StudUpdateController@edit');

Route::get('delete-records', 'StudDeleteController@index');
Route::get('delete/{id}', 'StudDeleteController@destroy');

//------------------------------------------------------------

Route::get('/form', function() {
    return view('form');
});

Route::get('localization/{locale}', 'LocalizationController@index');

Route::get('session/get', 'SessionController@accessSessionData');
Route::get('session/set', 'SessionController@storeSessionData');
Route::get('session/remove', 'SessionController@deleteSessionData');

Route::get('/validation', 'ValidationController@showform');
Route::post('/validation', 'ValidationController@validateform');

Route::get('/uploadfile', 'UploadFileController@index');
Route::post('/uploadfile', 'UploadFileController@showUploadFile');

Route::get('/sendbasicemail', 'MailController@basic_email');
Route::get('/sendhtmlemail', 'MailController@html_email');

Route::get('ajax', function () {
    return view('message');
});
Route::post('/getmsg', 'AjaxController@index');

Route::get('/error', function (){
    abort(404);
});

Route::get('event', 'CreateStudentController@insertForm');
Route::post('addstudent', "CreateStudentController@insert");