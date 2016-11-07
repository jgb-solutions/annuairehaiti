<?php

// Pages
Route::get('/', ['as'=>'home','uses'=>'PagesController@index']);
Route::get('contact', ['as' => 'contact','uses' => 'PagesController@contactPage']);
Route::get('recherche', ['as' => 'search','uses' => 'SearchController@index']);

// Enterprises
Route::get('entreprises', ['as'=>'enterprises.index','uses'=>'EnterprisesController@index']);
Route::get('ajouter/entreprise', ['as'=>'enterprise.create','uses'=>'EnterprisesController@getCreateForm']);
Route::post('ajouter/entreprise', ['as'=>'enterprise.create','uses'=>'EnterprisesController@create']);
Route::get('entreprise/{slug}/{id}', ['as' => 'enterprise.show','uses' => 'EnterprisesController@show']);
Route::get('modifier/entreprise/{enterprise}', ['as' => 'enterprise.edit','uses' => 'EnterprisesController@getEditForm']);
Route::put('modifier/entreprise/{enterprise}', ['as' => 'enterprise.edit','uses' => 'EnterprisesController@update']);
Route::delete('entreprise/{id}', ['as' => 'enterprise.delete','uses' => 'EnterprisesController@destroy']);

// Categories
Route::get('categories', ['as'=>'categories','uses'=>'CategoriesController@index']);
Route::get('categorie/{slug}', ['as' => 'category.show','uses' => 'CategoriesController@show']);
Route::get('categorie/delete/{slug}', 'TaxController@deleteCategory');
Route::get('categorie/edit/{slug}', 'TaxController@editCategory');
Route::put('categorie/edit/{slug}', 'TaxController@updateCategory');

// Departments
Route::get('departements', ['as' => 'departments','uses' => 'DepartmentsController@index']);
Route::get('departement/{slug}', ['as' => 'department.show','uses' => 'DepartmentsController@show']);
Route::get('departement/delete/{slug}', 'TaxController@deleteDepartement');
Route::get('departement/edit/{slug}', 'TaxController@editDepartement');

// Cities
Route::get('villes', ['as' => 'cities','uses' => 'CitiesController@index']);
Route::get('ville/{slug}', ['as' => 'city.show','uses' => 'CitiesController@show']);
Route::get('city/delete/{slug}', 'CityController@delete');
Route::get('city/edit/{slug}', 'CityController@edit');

// Towns
Route::get('communes', ['as' => 'towns','uses' => 'TownsController@index']);
Route::get('commune/{slug}', ['as' => 'town.show','uses' => 'TownsController@show']);
Route::get('commune/delete/{slug}', 'TaxController@deleteCommune');
Route::get('commune/edit/{slug}', 'TaxController@editCommune');

// Auth
Route::get('connexion', ['as' => 'getLogin','uses' => 'AuthController@getLoginForm']);
Route::post('connexion', ['as'=>'auth.login','uses'=>'AuthController@authenticate']);
Route::get('creer-compte', ['as'=>'auth.register','uses'=>'AuthController@getRegister']);
Route::post('creer-compte', ['as'=>'auth.register','uses'=>'AuthController@register']);
Route::get('deconnexion', ['as'=>'auth.logout','uses'=>'AuthController@logout']);

// Account
Route::get('compte', ['as'=>'account.index','uses'=>'UsersController@account']);
Route::put('compte', ['as'=>'account.update','uses'=>'UsersController@update']);
Route::get('modifier/compte', ['as'=>'account.edit','uses'=>'UsersController@getEditForm']);
Route::get('compte/entreprises', ['as'=>'account.enterprises','uses'=>'UsersController@enterprises']);