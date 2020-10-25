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

        
        //Route::get('/about','PagesController@about_page')->name('pages.about');

        Route::get('/partners','PartnerController@index')->name('partners.index');


        Route::get('/cultures','CultureController@index')->name('cultures.index');
        
        Route::get('/careers','CareerController@index')->name('careers.index');

        Route::get('/careers/{department}/vacancies','CareerController@vacancies')->name('careers.vacancies');

        Route::get('/careers/{department}/vacancies/{job}','CareerController@vacancy')->name('careers.vacancy');

        Route::get('/careers/{department}/vacancies/{job}/apply','CareerController@apply')->name('careers.vacancy.apply');

        Route::post('/careers/{department}/vacancies/{job}/apply','CareerController@apply_post')->name('careers.vacancy.apply_post');

        Route::get('/categories','CategoryController@index')->name('categories.index');

        Route::get('/inventory','ProductController@index')->name('products.index');

        Route::get('/inventory/{product}','ProductController@show')->name('products.show');

        Route::get('/delars','DelarController@index')->name('delars.index');
  
        Route::get('/sectors','SectorController@index')->name('sectors.index');




        //Route::get('/before_after','PagesController@before_after')->name('pages.before_after');

        Route::get('/contact','ContactController@index')->name('contact.index');
        Route::post('/contact','ContactController@store')->name('contact.store');
        Route::post('/contact/subscribe','ContactController@subscribe')->name('subscribe');


        });//end of frontend routes
});
  