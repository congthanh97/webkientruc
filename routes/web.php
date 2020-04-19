<?php

Route::prefix('admin')->group(function() {

	Route::get('login', 'UsersController@getLogin');
	Route::post('login', 'UsersController@postLogin');

	Route::get('logout', 'UsersController@logOut');

	Route::get('/', 'AdminController@admin')->middleware('checkLogin');

	Route::get('project', 'ProjectController@getProjectAdmin')->middleware('checkLogin');
	Route::post('project', 'ProjectController@searchProjectAdmin');
	Route::get('addproject', 'ProjectController@getAddProject')->middleware('checkLogin');
	Route::post('addproject', 'ProjectController@postAddProject');

	Route::get('project/edit/{id}', 'ProjectController@getEditProject')->middleware('checkLogin');
	Route::post('project/edit/{id}', 'ProjectController@postEditProject');

	Route::get('project/delete/{id}', 'ProjectController@deleteProject')->middleware('checkLogin');

	Route::get('categories', 'CategoriesController@getCategory')->middleware('checkLogin');
	Route::post('addCate', 'CategoriesController@postAddCate');

	Route::get('editcate/{id}', 'CategoriesController@editCate')->middleware('checkLogin');
	Route::post('editcate/{id}', 'CategoriesController@editCate');
	
	Route::get('deletecate/{id}', 'CategoriesController@deleteCate')->middleware('checkLogin');


	Route::get('contact', 'ContactController@getAdminContact')->middleware('checkLogin');
	Route::post('contact', 'ContactController@postContact');

	// Route::get('user', 'UsersController@getUser')->middleware('checkLogin');
	// Route::get('adduser', 'UsersController@getAddUser')->middleware('checkLogin');
	// Route::post('adduser', 'UsersController@postAddUser');
	// Route::get('editUser/{id}', 'UsersController@getEditUser')->middleware('checkLogin');
	// Route::post('editUser/{id}', 'UsersController@postEditUser')->middleware('checkLogin');
	// Route::get('deleteUser/{id}', 'UsersController@deleteUser')->middleware('checkLogin');

	Route::get('theme', 'ThemesController@getTheme')->middleware('checkLogin');
	Route::post('theme', 'ThemesController@postTheme');

	Route::get('addSlideHome', 'SlideHomeController@getAddSlide')->middleware('checkLogin');
	Route::post('addSlideHome', 'SlideHomeController@postAddSlide')->middleware('checkLogin');
	Route::get('deleteSlideHome/{id}', 'SlideHomeController@deleteSlide')->middleware('checkLogin');
	Route::get('editSlideHome/{id}', 'SlideHomeController@getEditSlide')->middleware('checkLogin');
	Route::post('editSlideHome/{id}', 'SlideHomeController@postEditSlide')->middleware('checkLogin');

	Route::get('slideContact', 'SlideContactController@getAdminSlideContact')->middleware('checkLogin');
	Route::get('addSlideContact', 'SlideContactController@getAddSlide')->middleware('checkLogin');
	Route::post('addSlideContact', 'SlideContactController@postAddSlide')->middleware('checkLogin');
	Route::get('deleteSlideContact/{id}', 'SlideContactController@deleteSlide')->middleware('checkLogin');
	Route::get('editSlideContact/{id}', 'SlideContactController@getEditSlide')->middleware('checkLogin');
	Route::post('editSlideContact/{id}', 'SlideContactController@postEditSlide')->middleware('checkLogin');
});

Route::get('/', 'ProjectController@showProject');
Route::get('project/{id}', 'ProjectController@projectDetail');
Route::get('contact', 'ContactController@getContact');
// route::get('/user',function(){
// 	return view('admin/index_user');
// });

