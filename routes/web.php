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

/*Route::get('/', function () {
    $catalog_posts = [
        'large' => App\Post::inRandomOrder()->first(),
        'small' => [
            App\Post::limit(4)->offset(4)->get()
        ],
        'default' => [
            App\Post::orderBy('created_at', 'desc')->take(3)->first()
        ]
    ];

    foreach ($catalog_posts['small'] as $key => $value) {
    	foreach ($value as $k => $v) {
    		echo $v->user->name;
    	}
    }
});*/

Route::get('/', 'FrontendController@index')->name('homepage');

Route::get('/post/{category}/{slug}', 'FrontendController@single')->name('single');

Route::get('/category/{category}', 'FrontendController@category')->name('category');

Route::get('/tag/{tag}', 'FrontendController@tag')->name('tag');

Route::post('/post/{category}/{slug}/comment/{id?}', 'FrontendController@comment_store')->name('store.comment');

Route::get('p/{post}', 'FrontendController@_page')->name('page');


/*Route::get('/', function(){
	$tags = "merhaba,selam";
	$tag = explode(',', $tags);
	for ($i=0; $i < count($tag); $i++) { 
		App\Tag::create([
			'name' => $tag[$i],
			'slug' => str_slug($tag[$i])
		]);
	}
	$all = App\Tag::all();
	foreach ($all as $a) {
		echo $a->name;
	}
});*/

/*Route::get('/', function(){

	$all_category = App\Category::take(6)->get();
	//dd($all_category);
	foreach ($all_category as $value) {
		foreach ($value->posts()->get() as $v) {
			echo $v->title;
		}
	}

});*/

Auth::routes();



Route::group(['prefix' => 'admin', 'middleware' => ['auth' => 'admin']], function (){

	Route::get('/home', 'HomeController@index')->name('home');

	/**
	 * 
	 ***********  |Post CRUD|  *********** 
	 * 
	 */
	Route::get('/posts', 'PostsController@index')->name('posts');
	Route::get('/posts/get_datatable', 'PostsController@get_datatable');
	Route::post('/post/create', 'PostsController@create')->name('create.post');
	Route::post('/post/store', 'PostsController@store')->name('store.post');
	Route::get('/post/edit/{id}', 'PostsController@edit')->name('edit.post');
	Route::post('/post/update/{id}', 'PostsController@update')->name('update.post');

	Route::get('/post/trashed', 'PostsController@trashed')->name('trash.post');
	Route::get('/post/trashed/restore/{id}', 'PostsController@restore')->name('restore.post');
	Route::get('/post/destroy/{id}', 'PostsController@destroy')->name('delete.post');
	Route::get('/post/delete/{id}', 'PostsController@kill')->name('kill.post');


	Route::post('/page/store', 'PostsController@store_page')->name('store.page');
	/**
	 * 
	 ************ |Category CRUD| ************
	 *
	 */
	Route::get('/categories', 'CategoriesController@index')->name('categories');
	Route::post('/category/store', 'CategoriesController@store')->name('store.category');
	Route::get('/category/delete/{id}', 'CategoriesController@destroy')->name('delete.category');
	Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('edit.category');
	Route::post('/category/update/{id}', 'CategoriesController@update')->name('update.category');




	/**
	 * 
	 ************ |Tags CRUD|
	 *
	 */
	Route::get('/tags', 'TagsController@index')->name('tags');
	Route::post('tag/store', 'TagsController@store')->name('store.tag');
	Route::get('/tag/edit/{id}', 'TagsController@edit')->name('edit.tag');
	Route::post('/tag/update/{id}', 'TagsController@update')->name('update.tag');
	Route::get('/tag/delete/{id}', 'TagsController@destroy')->name('delete.tag');


	/**
	 * 
	 ************ |User-Profile CRUD|
	 *
	 */
	Route::get('/users', 'ProfilesController@index')->name('users');
	Route::get('/user/create/profile', 'ProfilesController@create')->name('create.user');
	Route::post('/user/store', 'ProfilesController@store')->name('store.user');
	Route::get('/user/edit/{id}', 'ProfilesController@edit')->name('edit.user');
	Route::post('/user/update/{id}', 'ProfilesController@update')->name('update.user');
	Route::get('/user/delete/{id}', 'ProfilesController@destroy')->name('delete.user');


	Route::get('/user/{id}/profile', 'ProfilesController@profile')->name('user.profile');


	/**
	 * 
	 ************ |Settings CRUD|
	 *
	 */
	Route::get('/settings', 'SettingsController@index')->name('settings');
	Route::post('/settings/update/{id}', 'SettingsController@update')->name('update.settings');
	Route::get('/settings/privacy/{title?}', 'SettingsController@create_policy')->name('create.set');



	/**
	 * 
	 ************ |Appearance CRU|
	 *
	 */
	Route::get('/appearance', 'AppearanceController@index')->name('appearance');
	Route::post('/appearance/update/{id}', 'AppearanceController@update')->name('update.appearance');
});
//dd($request->all());
        