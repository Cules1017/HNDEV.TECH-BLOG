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

Route::get('/home', function () {
    return view('admin');
});
Route::prefix('/')->group(function () {
    Route::get('',[
        'as'=>'Home.index',
        'uses'=>'HomeController@index',
    ]);
    Route::get('/artical/{id}',[
        'as'=>'Home.articalsshow',
        'uses'=>'HomeController@articalsshow',
    ]);
  Route::get('/search',[
        'as'=>'Home.searchshow',
        'uses'=>'HomeController@search',
    ]);
    Route::get('/aboutus',[
        'as'=>'Home.aboutus',
        'uses'=>'HomeController@aboutus',
    ]);
    Route::get('/menu/{menu}',[
        'as'=>'Home.menushow',
        'uses'=>'HomeController@menushow',
    ]);
});

Route::prefix('feedback')->group(function () {
    Route::get('/create',[
        'as'=>'feedback.create',
        'uses'=>'feedbackController@create'
        
    ]);
    Route::get('/listshow',[
        'as'=>'feedback.listlistshow',
        'uses'=>'feedbackController@listshow',
        'middleware'=>'can:category-list',
    ]);
    Route::post('/store',[
        'as'=>'feedback.store',
        'uses'=>'feedbackController@store',
    ]);
    Route::get('/edit/{id}',[
        'as'=>'feedback.edit',
        'uses'=>'feedbackController@edit',
    ]);
    Route::post('/update/{id}',[
        'as'=>'feedback.update',
        'uses'=>'feedbackController@update'
    ]);
});


Route::get('/category/{slug}/{id}', [
    'as'=>'category.articals',
    'uses'=>'CategoryController@showfoguss'
]);
Route::get('/ad','AdminController@loginAdmin');
Route::post('/ad','AdminController@postloginAdmin')->name('post.login');
Route::get('logout', ['as'=>'logout.user','uses'=>'AdminController@getLogout']);

Route::prefix('adhome')->group(function () {
    Route::prefix('category')->group(function () {
        Route::get('/',[
            'as'=>'category.index',
            'uses'=>'CategoryController@index',
            'middleware'=>'can:category-list',
        ]);
        Route::get('/create',[
            'as'=>'category.create',
            'uses'=>'CategoryController@create',
            'middleware'=>'can:category-create',
        ]);
        Route::post('/store',[
            'as'=>'category.store',
            'uses'=>'CategoryController@store'
        ]);
        Route::get('/edit/{id}',[
            'as'=>'category.edit',
            'uses'=>'CategoryController@edit',
            'middleware'=>'can:category-edit',
        ]);
        Route::post('/update/{id}',[
            'as'=>'category.update',
            'uses'=>'CategoryController@update'
        ]);
        Route::get('/destroy/{id}',[
            'as'=>'category.destroy',
            'uses'=>'CategoryController@destroy',
            'middleware'=>'can:category-destroy',
        ]);
    });
    
    Route::prefix('menus')->group(function () {
        Route::get('/',[
            'as'=>'menus.index',
            'uses'=>'MenusController@index',
            'middleware'=>'can:menu-list',
        ]);
        Route::get('/create',[
            'as'=>'menus.create',
            'uses'=>'MenusController@create',
            'middleware'=>'can:menu-create',
            
        ]);
        Route::post('/store',[
            'as'=>'menus.store',
            'uses'=>'MenusController@store',
        ]);
        Route::get('/edit/{id}',[
            'as'=>'menus.edit',
            'uses'=>'MenusController@edit',
            'middleware'=>'can:menu-edit',
        ]);
        Route::post('/update/{id}',[
            'as'=>'menus.update',
            'uses'=>'MenusController@update'
        ]);
        Route::get('/destroy/{id}',[
            'as'=>'menus.destroy',
            'uses'=>'MenusController@destroy',
            'middleware'=>'can:menu-destroy',
        ]);
    });

    Route::prefix('posts')->group(function () {
        Route::get('/',[
            'as'=>'posts.index',
            'uses'=>'PostController@index',
            'middleware'=>'can:post-list',
        ]);
        Route::get('/create',[
            'as'=>'posts.create',
            'uses'=>'PostController@create',
            'middleware'=>'can:post-create',
        ]);
        Route::post('/store',[
            'as'=>'posts.store',
            'uses'=>'PostController@store'
        ]);
        Route::get('/edit/{id}',[
            'as'=>'posts.edit',
            'uses'=>'PostController@edit',
            'middleware'=>'can:post-edit',
        ]);
        Route::post('/update/{id}',[
            'as'=>'posts.update',
            'uses'=>'PostController@update'
        ]);
        Route::get('/destroy/{id}',[
            'as'=>'posts.destroy',
            'uses'=>'PostController@destroy',
            'middleware'=>'can:post-destroy',
        ]);
    });
    Route::prefix('slider')->group(function () {
        Route::get('/',[
            'as'=>'slider.index',
            'uses'=>'sliderController@index',
            'middleware'=>'can:slider-list',
        ]);
        Route::get('/create',[
            'as'=>'slider.create',
            'uses'=>'sliderController@create',
            'middleware'=>'can:slider-create',
        ]);
        Route::post('/store',[
            'as'=>'slider.store',
            'uses'=>'sliderController@store'
        ]);
        Route::get('/edit/{id}',[
            'as'=>'slider.edit',
            'uses'=>'sliderController@edit',
            'middleware'=>'can:slider-edit',
        ]);
        Route::post('/update/{id}',[
            'as'=>'slider.update',
            'uses'=>'sliderController@update'
        ]);
        Route::get('/destroy/{id}',[
            'as'=>'slider.destroy',
            'uses'=>'sliderController@destroy',
            'middleware'=>'can:slider-destroy',
        ]);
    });
    Route::prefix('setting')->group(function () {
        Route::get('/',[
            'as'=>'setting.index',
            'uses'=>'settingController@index',
            'middleware'=>'can:setting-list',
        ]);
        Route::get('/create',[
            'as'=>'setting.create',
            'uses'=>'settingController@create',
            'middleware'=>'can:setting-create',
        ]);
        Route::post('/store',[
            'as'=>'setting.store',
            'uses'=>'settingController@store'
        ]);
        Route::get('/edit/{id}',[
            'as'=>'setting.edit',
            'uses'=>'settingController@edit',
            'middleware'=>'can:setting-edit',
        ]);
        Route::post('/update/{id}',[
            'as'=>'setting.update',
            'uses'=>'settingController@update'
        ]);
        Route::get('/destroy/{id}',[
            'as'=>'setting.destroy',
            'uses'=>'settingController@destroy',
            'middleware'=>'can:setting-destroy',
        ]);
    });
    Route::prefix('user')->group(function () {
        Route::get('/',[
            'as'=>'user.index',
            'uses'=>'ADuserController@index',
            'middleware'=>'can:user-list',
        ]);
        Route::get('/create',[
            'as'=>'user.create',
            'uses'=>'ADuserController@create',
            'middleware'=>'can:user-create',
        ]);
        Route::post('/store',[
            'as'=>'user.store',
            'uses'=>'ADuserController@store'
        ]);
        Route::get('/edit/{id}',[
            'as'=>'user.edit',
            'uses'=>'ADuserController@edit',
            'middleware'=>'can:user-edit',
        ]);
        Route::post('/update/{id}',[
            'as'=>'user.update',
            'uses'=>'ADuserController@update'
        ]);
        Route::get('/destroy/{id}',[
            'as'=>'user.destroy',
            'uses'=>'ADuserController@destroy',
            'middleware'=>'can:user-destroy',
        ]);
    });
    Route::prefix('roles')->group(function () {
        Route::get('/',[
            'as'=>'roles.index',
            'uses'=>'ADrolesController@index',
            'middleware'=>'can:permission-list',
        ]);
        Route::get('/create',[
            'as'=>'roles.create',
            'uses'=>'ADrolesController@create',
            'middleware'=>'can:permission-create',
        ]);
        Route::post('/store',[
            'as'=>'roles.store',
            'uses'=>'ADrolesController@store'
        ]);
        Route::get('/edit/{id}',[
            'as'=>'roles.edit',
            'uses'=>'ADrolesController@edit',
            'middleware'=>'can:permission-edit',
        ]);
        Route::post('/update/{id}',[
            'as'=>'roles.update',
            'uses'=>'ADrolesController@update'
        ]);
        Route::get('/destroy/{id}',[
            'as'=>'roles.destroy',
            'uses'=>'ADrolesController@destroy',
            'middleware'=>'can:permission-destroy',
        ]);
    });
});
