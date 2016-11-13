<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::match(['get', 'post'], '/', function () {
	$email = Input::get('email');
	$language = Input::get('language');
	$news = Input::get('news');

	
	return view('index', ['email' => $email,	'language' => $language,	'news' => $news]);
});

Route::get( '/details', function () {
	$id = Input::get('id');
	$technologies = [	'PHP',
				'CodeIgniter' ,
				'Laravel',
				'Yii',
				'Symfony',
				'Java', 
				'Javascript', 
				'Python', 
				'Ruby',
				'Ruby on Rails',
				'Sinatra',
				'JRuby'
				];

	$search_result = $technologies;

	if($id != '')
	{
		$search_result = [];
		$search_result[] = $technologies[$id];

	}
    return view('search', [ 'options' => $technologies, 'results' => $search_result ]);
});




