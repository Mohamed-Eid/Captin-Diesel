<?php


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    
    function(){
        Route::prefix('dashboard')->name('dashboard.')->group(function(){
           
            Auth::routes(['register' => false]);


            Route::get('get_video_ajax/', function () {
                //return request()->all();
                return get_video_id(request()->link);
            })->name('get_video_id');

            Route::middleware(['auth'])->group(function(){
                Route::get('/','DashboardController@index')->name('index');

                //user routes
                Route::resource('users' , 'UserController');
                Route::resource('/categories','CategoryController');
                Route::resource('/surgery','SurgeryController');

                Route::resource('/partners','PartnerController');

                
                Route::resource('/image_album','ImageAlbumController')->only(['index' , 'create' , 'store' , 'destroy']);
                Route::resource('/question_answer','QuestionAnswerController');
                Route::resource('/videos','VideoController');
 
                Route::resource('/blog','PostController');
                Route::resource('/pages','PageController');

                Route::post('/pages/{page}/upload_images','PageController@upload_images')->name('pages.upload_images');

                Route::delete('/pages/{page}/delete_image/{id}','PageController@delete_image')->name('pages.delete_image');


                Route::get('settings/all','SettingController@all')->name('settings.all_settings');

                Route::resource('/settings','SettingController');

                Route::get('/contact_messages','ContactMessageController@index')->name('contact.index');
                Route::delete('/contact_messages/{message}','ContactMessageController@destroy')->name('contact.destroy');


                Route::get('profile','ProfileController@edit')->name('profiles.edit');
                Route::put('profile','ProfileController@update')->name('profiles.update');
                
                Route::get('profile/change_password','ProfileController@change_password')->name('profiles.change_password');
                Route::put('profile/change_password','ProfileController@change_password_method')->name('profiles.change_password_method');
    
    
    
            });
        });//end of dashboard routes
});

