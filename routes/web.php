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

Route::get('/index', function () {
    return redirect('/news/');
});

Route::get('/', function () {
    return redirect('/news/');
});



//Amsterdam

Route::get('/amsterdam/', 'MainPageController@index')->name('ams.index');

Route::get('/amsterdam/index', 'MainPageController@index')->name('ams.index');

Route::get('/amsterdam/speakers', 'SpeakersController@index')->name('ams.speakers');

Route::get('/amsterdam/speaker', 'SpeakersController@speaker');

Route::get('/amsterdam/speaker/{speakerId}', 'SpeakersController@speaker')->name('ams.speaker');

Route::get('/amsterdam/sponsors', 'SponsorsController@index')->name('ams.sponsors');

Route::get('/amsterdam/sponsor/{sponsorId}', 'SponsorsController@sponsor')->name('ams.sponsor');

Route::get('/amsterdam/sponsor', 'SponsorsController@index');

Route::get('/amsterdam/startups', 'StartupsController@index')->name('ams.startup');

Route::get('/amsterdam/agenda', 'AgendaController@index')->name('ams.agenda');

Route::get('/amsterdam/about', 'StaticPageController@about')->name('ams.about');

Route::get('/amsterdam/team', 'StaticPageController@about')->name('ams.team');

Route::get('/amsterdam/join', 'StaticPageController@about')->name('ams.join');

Route::get('/amsterdam/floorplan', 'StaticPageController@floorplan')->name('ams.floorplan');

//Route::get('/amsterdam/tickets', 'StaticPageController@about')->name('ams.tickets');


//London
Route::get('/london/', 'MainPageController@index')->name('london.index');

Route::get('/london/index', 'MainPageController@index')->name('london.index');

Route::get('/london/speakers', 'SpeakersController@index')->name('london.speakers');

Route::get('/london/speaker', 'SpeakersController@speaker');

Route::get('/london/speaker/{speakerId}', 'SpeakersController@speaker')->name('london.speaker');

Route::get('/london/sponsors', 'SponsorsController@index')->name('london.sponsors');

Route::get('/london/sponsor/{sponsorId}', 'SponsorsController@sponsor')->name('london.sponsor');

Route::get('/london/sponsor', 'SponsorsController@index');

Route::get('/london/startups', 'StartupsController@index')->name('london.startup');

//Route::get('/london/agenda', 'AgendaController@index')->name('london.agenda');

Route::get('/london/about', 'StaticPageController@about')->name('london.about');

Route::get('/london/floorplan', 'StaticPageController@floorplan')->name('london.floorplan');

//Route::get('/london/tickets', 'StaticPageController@about')->name('london.tickets');


//Las Vegas
Route::get('/lasvegas/', 'MainPageController@index')->name('lasvegas.index');

Route::get('/lasvegas/index', 'MainPageController@index')->name('lasvegas.index');

Route::get('/lasvegas/speakers', 'SpeakersController@index')->name('lasvegas.speakers');

Route::get('/lasvegas/speaker', 'SpeakersController@speaker');

Route::get('/lasvegas/speaker/{speakerId}', 'SpeakersController@speaker')->name('lasvegas.speaker');

Route::get('/lasvegas/sponsors', 'SponsorsController@index')->name('lasvegas.sponsors');

Route::get('/lasvegas/sponsor/{sponsorId}', 'SponsorsController@sponsor')->name('lasvegas.sponsor');

Route::get('/lasvegas/sponsor', 'SponsorsController@index');

Route::get('/lasvegas/startups', 'StartupsController@index')->name('lasvegas.startups');

//Route::get('/lasvegas/agenda', 'AgendaController@index')->name('lasvegas.agenda');

Route::get('/lasvegas/about', 'StaticPageController@about')->name('lasvegas.about');

Route::get('/lasvegas/floorplan', 'StaticPageController@floorplan')->name('lasvegas.floorplan');

//Route::get('/lasvegas/tickets', 'StaticPageController@about')->name('lasvegas.tickets');