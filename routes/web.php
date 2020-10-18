<?php
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
     'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    
    function(){
        Route::name('frontend.')->group(function(){
        Route::get('/','HomeController@index')->name('index');
 
        Route::get('/blog','BlogController@index')->name('blog.index');

        Route::get('/blog/{post}','BlogController@show')->name('blog.show');

        Route::get('/services','CategoryController@index')->name('services.index');
        
        Route::get('/services/find_service/{service}','CategoryController@show')->name('services.show');

        Route::get('/services/{surgery}','CategoryController@get_surgery')->name('services.get_surgery');

        Route::get('/videos','VideosController@index')->name('videos.index');

        Route::get('/about','PagesController@about_page')->name('pages.about');

        Route::get('/before_after','BeforeAfterController@index')->name('pages.before_after');
        Route::get('/before_after/{surgery}','BeforeAfterController@show')->name('pages.before_after.show');


        
        //Route::get('/before_after','PagesController@before_after')->name('pages.before_after');

        Route::get('/contact','ContactController@index')->name('contact.index');
        Route::post('/contact','ContactController@store')->name('contact.store');


        });//end of frontend routes
});
