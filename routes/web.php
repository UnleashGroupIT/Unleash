<?php
use Carbon\Carbon;
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

/*********** GLOBAL ************/
Route::get('/index', function () {
    return redirect('/news/');
});

Route::get('/', function () {
    return redirect('/news/');
});

Route::get('/terms', function () {
  return view('amsterdam.pages.terms');
});

Route::get('/about', function () {
  return view('amsterdam.pages.about');
})->name('ams.about');

Route::get('/about-prev', function () {
  return view('amsterdam.pages.about-prev');
})->name('ams.about-prev');


Route::get('/search/{query}', function ($query) {
  return App\AgendaSessions::search($query)->paginate(25)->load('speakers');
});



Route::get('/wpredirect', 'StaticPageController@wpredirect');
	  
/*********** Amsterdam ************/

Route::get('/amsterdam/', 'MainPageController@index')->name('ams.index');

Route::get('/amsterdam/index', 'MainPageController@index')->name('ams.index');

Route::get('/amsterdam/speakers', 'SpeakersController@index')->name('ams.speakers');

//Route::get('/amsterdam/speaker', 'SpeakersController@speaker');

//Route::get('/amsterdam/speaker/{speakerId}', 'SpeakersController@speaker')->name('ams.speaker');

Route::get('/amsterdam/sponsors', 'SponsorsController@index')->name('ams.sponsors');

Route::get('/amsterdam/sponsor/{sponsorId}', 'SponsorsController@sponsor')->name('ams.sponsor');

Route::get('/amsterdam/sponsor', function () {
    return redirect('/amsterdam/sponsors');
});

//Route::get('/amsterdam/sponsor', 'SponsorsController@index');

/*Route::get('/amsterdam/sponsors', function () {
    return redirect('/amsterdam/index#spnsrgrd');
});*/



Route::get('/amsterdam/speaker', function () {
    return redirect('/amsterdam/index#spkrgrd');
});

Route::get('/amsterdam/speaker/{speakerId}', 'SpeakersController@speaker')->name('ams.speaker');

Route::get('/amsterdam/speakers', function () {
    return redirect('/amsterdam/index#spkrgrd');
})->name('ams.speakers');


Route::get('/amsterdam/startups', 'StartupsController@index')->name('ams.startup');

Route::get('/amsterdam/agenda', 'AgendaController@index')->name('ams.agenda');


Route::get('/amsterdam/about', function () {
    return redirect('/about');
});

Route::get('/amsterdam/team', 'StaticPageController@about')->name('ams.team');

Route::get('/amsterdam/join', 'StaticPageController@about')->name('ams.join');


Route::get('/amsterdam/sponsor-pdf', function () {
  return view('amsterdam.pages.sponsorshippdf');
});

Route::get('/amsterdam/index-prev', function () {
  return view('amsterdam.pages.index-prev');
});

Route::get('/amsterdam/venue', 'StaticPageController@venue')->name('ams.floorplan');


Route::get('/amsterdam/stream', function(){
	return view('amsterdam.pages.livestream');
})->name('ams.livestream');

Route::get('/amsterdam/live', function(){
	return view('amsterdam.pages.streamform');
})->name('ams.live');
Route::get('/amsterdam/thankyou', function(){
	return view('amsterdam.pages.streamthankyou');
});

//Route::get('/amsterdam/tickets', 'StaticPageController@about')->name('ams.tickets');

Route::get('/amsterdam/terms', function () {
    return redirect('/terms');
});

/*********** London ************/

Route::get('/london/', 'MainPageController@index')->name('london.index');

Route::get('/london/index', 'MainPageController@index')->name('london.index');

//Route::get('/london/speakers', 'SpeakersController@index')->name('london.speakers');

//Route::get('/london/speaker', 'SpeakersController@speaker');

Route::get('/london/speaker', function () {
    return redirect('/london/index#spkrgrd');
});

Route::get('/london/speakers', function () {
    return redirect('/london/index#spkrgrd');
})->name('london.speakers');

Route::get('/london/travel', function () {
  return view('london.pages.travel');
})->name('london.travel');

Route::get('/london/sponsor-pdf', function () {
  return view('london.pages.sponsorshippdf');
});

Route::get('/london/delegate-brochure', function () {
  return view('london.pages.delegatepdf');
});

Route::get('/london/room-availability', function () {
  return view('london.pages.roompdf');
});



Route::get('/london/speaker/{speakerId}', 'SpeakersController@speaker')->name('london.speaker');

Route::get('/london/sponsors', 'SponsorsController@index')->name('london.sponsors');



//Route::get('/london/sponsor', 'SponsorsController@index');

/*Route::get('/london/sponsors', function () {
    return redirect('/london/index#spnsrgrd');
})->name('london.sponsors');*/

Route::get('/london/sponsor', function () {
    return redirect('/london/index#spnsrgrd');
});


Route::get('/london/sponsor/{sponsorId}', 'SponsorsController@sponsor')->name('london.sponsor');

Route::get('/london/startups', 'StartupsController@index')->name('london.startup');

//Route::get('/london/agenda', 'AgendaController@index')->name('london.agenda');

Route::get('/london/about', 'StaticPageController@about')->name('london.about');

Route::get('/london/venue', 'StaticPageController@venue')->name('london.floorplan');

Route::get('/london/tickets', function(){

	$now = Carbon::now();
	
	$early = Carbon::create(2017, 11, 30, 23, 0, 0);

	if ($now->gt($early)){
		return view('london.pages.tickets_earlybird');
	
	} else {
		return view('london.pages.tickets');
	}

	
})->name('london.tickets');


Route::get('/london/terms', function () {
    return redirect('/terms');
});
/*********** America ************/

Route::get('/lasvegas/', function () {
    return redirect('/america/');
});

Route::get('/lasvegas/{pageID}', function () {
    return redirect('/america/{pageID}');
});


Route::get('/america/', 'MainPageController@index')->name('lasvegas.index');

Route::get('/america/index', 'MainPageController@index')->name('lasvegas.index');

//Route::get('/america/speakers', 'SpeakersController@index')->name('lasvegas.speakers');

//Route::get('/america/speaker', 'SpeakersController@speaker');


Route::get('/america/speaker', function () {
    return redirect('/america/index#spkrgrd');
});

Route::get('/america/speakers', function () {
    return redirect('/america/index#spkrgrd');
})->name('lasvegas.speakers');

Route::get('/america/speaker/{speakerId}', 'SpeakersController@speaker')->name('lasvegas.speaker');

//Route::get('/america/sponsors', 'SponsorsController@index')->name('lasvegas.sponsors');

//Route::get('/america/sponsor', 'SponsorsController@index');

Route::get('/america/sponsors', function () {
    return redirect('/america/index#spnsrgrd');
});

Route::get('/america/sponsor', function () {
    return redirect('/america/index#spnsrgrd');
})->name('lasvegas.sponsors');

Route::get('/america/sponsor/{sponsorId}', 'SponsorsController@sponsor')->name('lasvegas.sponsor');

Route::get('/america/startups', 'StartupsController@index')->name('lasvegas.startups');

//Route::get('/lasvegas/agenda', 'AgendaController@index')->name('lasvegas.agenda');

Route::get('/america/about', 'StaticPageController@about')->name('lasvegas.about');

Route::get('/america/venue', 'StaticPageController@venue')->name('lasvegas.floorplan');

//Route::get('/lasvegas/tickets', 'StaticPageController@about')->name('lasvegas.tickets');

Route::get('/america/sponsor-pdf', function () {
  return view('lasvegas.pages.sponsorshippdf');
});

Route::get('/america/terms', function () {
    return redirect('/terms');
});
