<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


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

Route::post('logout', 'Auth\LoginController@logout');
Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::get('/', 'publiccontroller@index')->name('welcome');
Route::get('/movie/{id}','publiccontroller@singlmovie')->name('movie');
Route::get('about/','publiccontroller@about')->name('about');
Route::get('contact/','publiccontroller@contact')->name('contact');
Route::Post('contact/','publiccontroller@contactpost')->name('contactpost');
Route::get('seach/{letter}','publiccontroller@MovieNameSeachByletter')->name('serachmoviebyletter');

Route::get('seach/{letter}','publiccontroller@actorSeachByletter')->name('serachactorbyletter');
Route::get('seach/{letter}','publiccontroller@producerSeachByletter')->name('serachproducerbyletter');
Route::get('seach/{moviename?}/{actorsname?}/{producersname?}/{typesname?}','publiccontroller@search')->name('search');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::prefix('admin')->group(function(){
  Route::get('dashboard',"Admincontroller@dashboard")->name('AdminDashboard') ;
  Route::get('comments',"Admincontroller@comments")->name('Admincomments');
Route::get('users',"Admincontroller@users")->name('Adminusers');


Route::get('movie/upload',"Admincontroller@uploadnewmovie")->name('uploadmovie');
Route::post('movie/upload',"Admincontroller@uploadnewmovie1")->name('uploadmoviepost');
  Route::get('movies',"Admincontroller@movies")->name('adminmovies');
      Route::get('movies/edit/{id}',"Admincontroller@editmovie")->name('admineditmovie');
        Route::post('movies/edit/{id}',"Admincontroller@editmovie1")->name('admineditmovie');
        Route::post('movies/{id}/delete',"Admincontroller@deletemovie")->name('admindeletemovie');


Route::get('actor/upload',"Admincontroller@addnewactor")->name('addnewactors');
Route::post('actor/upload',"Admincontroller@addnewactor1")->name('addnewactorspost');
        Route::get('actors',"Admincontroller@actors")->name('Adminactors');
            Route::get('actors/edit/{id}',"Admincontroller@editactor")->name('Admineditactor');
              Route::post('actors/edit/{id}',"Admincontroller@editactor1")->name('Admineditactor');
              Route::post('actors/{id}/delete',"Admincontroller@deleteactor")->name('Admindeleteactor');




              Route::get('producer/upload',"Admincontroller@addnewproducer")->name('addnewproducer');
              Route::post('producer/upload',"Admincontroller@addnewproducer1")->name('addnewproducerpost');
              Route::get('producers',"Admincontroller@producers")->name('Adminproducers');
                  Route::get('producers/edit/{id}',"Admincontroller@editproducer")->name('Admineditproducer');
                    Route::post('producers/edit/{id}',"Admincontroller@editproducer1")->name('Admineditproducer');
                    Route::post('producers/{id}/delete',"Admincontroller@deleteproducer")->name('Admindeleteproducer');



                    Route::get('type/upload',"Admincontroller@addnewmoviestype")->name('addnewtype');
                    Route::post('type/upload',"Admincontroller@addnewmoviestype1")->name('addnewtypepost');
                    Route::get('moviestypes',"Admincontroller@moviestypes")->name('Adminmoviestypes');
                        Route::get('moviestypes/edit/{id}',"Admincontroller@editmoviestype")->name('Admineditmoviestype');
                          Route::post('moviestypes/edit/{id}',"Admincontroller@editmoviestype1")->name('Admineditmoviestype');
                          Route::post('moviestypes/{id}/delete',"Admincontroller@deletemoviestype")->name('Admindeletemoviestype');

        Route::post('comment/{id}/delete',"Admincontroller@deletecomment")->name('admindeletecomment');
        Route::post('user/{id}/delete',"Admincontroller@admindeleteuser")->name('admindeleteuser');
        Route::get('user/{id}/edit',"Admincontroller@adminedituser")->name('adminedituser');
          Route::post('user/{id}/edit',"Admincontroller@adminedituserpostmethod")->name('adminedituserpostmethod');

  Route::get('reports',"Admincontroller@reports")->name('reports');
    Route::POST('reports',"Admincontroller@reports1")->name('reports');

});
Route::prefix('user')->group(function()
{
  Route::post('movie/{id}/comment',"Usercontroller@addcomment")->name('addcomment');
  Route::get('dashboard',"Usercontroller@dashboard")->name('userdashboard');
  Route::post('comment/{id}/delete',"Usercontroller@deletecomment")->name('deletecomment');
  //  Route::get('comments',"Usercontroller@comments")->name('usercomments');
    Route::get('profile',"Usercontroller@profile")->name('userprofile');
    Route::Post('profile','Usercontroller@editprofile')->name('profileedit');
    Route::get('comments',"Usercontroller@comments")->name('usercomments');

    Route::post('movie/{id}/rate',"Usercontroller@addrate")->name('addrate');
    Route::post('movie/{id}/download',"Usercontroller@download_movie")->name('download_movie');
    Route::post('movie/{id}/buymovie',"Usercontroller@buymovie")->name('buymovie');



});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
