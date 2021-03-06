<?php

Route::get('/', [
    'uses' => 'BlogController@index',
    'as'   => 'blog'
]);

Route::get('/search', [
    'uses' => 'BlogController@search',
    'as'   => 'search'
]);

Route::get('/archives', [
    'uses' => 'BlogController@archives',
    'as'   => 'archives'
]);

<<<<<<< HEAD
=======
Route::get('/membres', [
    'uses' => 'BlogController@membres',
    'as'   => 'membres'
]);

>>>>>>> 089f58c8e215ef874f1bf94f727e4715c8ab1662
Route::get('/actualites', [
    'uses' => 'BlogController@actualites',
    'as'   => 'actualites'
]);

<<<<<<< HEAD
Route::get('/blog/{post}', [
=======
Route::get('/events', [
    'uses' => 'BlogController@events',
    'as'   => 'events'
]);

Route::get('/projets', [
    'uses' => 'BlogController@projets',
    'as'   => 'projets'
]);

Route::get('/article/{post}', [
>>>>>>> 089f58c8e215ef874f1bf94f727e4715c8ab1662
    'uses' => 'BlogController@show',
    'as'   => 'blog.show'
]);

Route::post('/article/{post}/comments', [
    'uses' => 'CommentsController@store',
    'as'   => 'blog.comments'
]);

Route::get('/category/{category}', [
    'uses' => 'BlogController@category',
    'as'   => 'category'
]);

Route::get('/author/{author}', [
    'uses' => 'BlogController@author',
    'as'   => 'author'
]);

Route::get('/tag/{tag}', [
    'uses' => 'BlogController@tag',
    'as'   => 'tag'
]);

Route::post('subscribe',
['uses' => 'NewsletterController@subscribe',
'as' => 'subscribe']);

// paypal
Route::get('/payment', 'PaymentController@index');

// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal')->name('paypal');

// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');

Route::auth();

Route::get('/home', 'Backend\HomeController@index');
Route::get('/edit-account', 'Backend\HomeController@edit');
Route::put('/edit-account', 'Backend\HomeController@update');

Route::put('/backend/blog/restore/{blog}', [
    'uses' => 'Backend\BlogController@restore',
    'as'   => 'backend.blog.restore'
]);
Route::delete('/backend/blog/force-destroy/{blog}', [
    'uses' => 'Backend\BlogController@forceDestroy',
    'as'   => 'backend.blog.force-destroy'
]);
Route::resource('/backend/blog', 'Backend\BlogController', ['as' => 'backend']);

Route::resource('/backend/categories', 'Backend\CategoriesController', ['as' => 'backend']);

Route::get('/backend/users/confirm/{users}', [
    'uses' => 'Backend\UsersController@confirm',
    'as' => 'backend.users.confirm'
]);
Route::resource('/backend/users', 'Backend\UsersController', ['as' => 'backend']);

