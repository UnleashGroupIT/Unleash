<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:api', 'roles'])->get('/user', function (Request $request) {
    return $request->user();
});

//TODO: Middleware that validates http input (checks proper fields)
//TODO: User permission handling. Not everyone should be allowed to do stuff :D
//TODO: Middleware that specifically checks eventId (if it is given and it's valid)

Route::get('/agenda/search', 'AgendaController@search');

//Events
Route::middleware(['auth:api', 'roles'])->get('/events', 'Admin\EventController@listEvents');

//Grids
Route::middleware(['auth:api', 'roles', 'checkevent:0'])->get('/grids', 'Admin\GridController@getGrids');

Route::middleware(['auth:api', 'roles'])->post('/grids', 'Admin\GridController@storeGrid');

Route::middleware(['auth:api', 'roles'])->get('/grid/{gridId}', 'Admin\GridController@showGrid');

Route::middleware(['auth:api', 'roles'])->patch('/grid/{gridId}', 'Admin\GridController@editGrid');

//Speakers
Route::middleware(['auth:api', 'roles'])->get('/speakers', 'Admin\SpeakerController@getSpeakers');

Route::middleware(['auth:api', 'roles'])->post('/speakers', 'Admin\SpeakerController@storeSpeaker');

Route::middleware(['auth:api', 'roles'])->get('/speaker/{speakerId}', 'Admin\SpeakerController@showSpeaker');

Route::middleware(['auth:api', 'roles'])->patch('/speaker/{speakerId}', 'Admin\SpeakerController@editSpeaker');

Route::middleware(['auth:api', 'roles'])->delete('/speaker/{speakerId}', 'Admin\SpeakerController@deleteSpeaker');

//Sponsors
Route::middleware(['auth:api', 'roles'])->get('/sponsors', 'Admin\SponsorController@getSponsors');

Route::middleware(['auth:api', 'roles'])->post('/sponsors', 'Admin\SponsorController@storeSponsor');

Route::middleware(['auth:api', 'roles'])->get('/sponsor/{sponsorId}', 'Admin\SponsorController@showSponsor');

Route::middleware(['auth:api', 'roles'])->patch('/sponsor/{sponsorId}', 'Admin\SponsorController@editSponsor');

Route::middleware(['auth:api', 'roles'])->delete('/sponsor/{sponsorId}', 'Admin\SponsorController@deleteSponsor');

//Agenda Tracks
Route::middleware(['auth:api', 'roles'])->get('/tracks', 'Admin\TrackController@getTracks');

Route::middleware(['auth:api', 'roles'])->post('/tracks', 'Admin\TrackController@storeTrack');

Route::middleware(['auth:api', 'roles'])->get('/track/{trackId}', 'Admin\TrackController@showTrack');

Route::middleware(['auth:api', 'roles'])->patch('/track/{trackId}', 'Admin\TrackController@editTrack');

Route::middleware(['auth:api', 'roles'])->delete('/track/{trackId}', 'Admin\TrackController@deleteTrack');


//Sessions
Route::middleware(['auth:api', 'roles'])->get('/sessions', 'Admin\AgendaController@getSessions');

Route::middleware(['auth:api', 'roles'])->post('/session', 'Admin\AgendaController@storeSession');

Route::middleware(['auth:api', 'roles'])->get('/session/{sessionId}', 'Admin\AgendaController@showSession');

Route::middleware(['auth:api', 'roles'])->patch('/session/{sessionId}', 'Admin\AgendaController@editSession');

Route::middleware(['auth:api', 'roles'])->delete('/session/{sessionId}', 'Admin\AgendaController@deleteSession');

Route::middleware(['auth:api', 'roles'])->post('/sessionspeaker', 'Admin\AgendaController@addSpeakerToSession');

Route::middleware(['auth:api', 'roles'])->delete('/sessionspeaker', 'Admin\AgendaController@removeSpeakerFromSession');


//Speaker Grid
Route::middleware(['auth:api', 'roles'])->get('/speakergrid/{gridId}', 'Admin\SpeakerGridController@listGridContent');

Route::middleware(['auth:api', 'roles'])->post('/speakergrid/{gridId}', 'Admin\SpeakerGridController@addToGrid');

Route::middleware(['auth:api', 'roles'])->get('/speakergriditem/{gridId}/{speakerId}', 'Admin\SpeakerGridController@showGridItem');

Route::middleware(['auth:api', 'roles'])->patch('/speakergrid/{gridId}/{speakerId}', 'Admin\SpeakerGridController@editGridItem');

Route::middleware(['auth:api', 'roles'])->delete('/speakergriditem/{gridId}/{speakerId}', 'Admin\SpeakerGridController@removeFromGrid');

//Sponsor Grid
Route::middleware(['auth:api', 'roles'])->get('/sponsorgrid/{gridId}', 'Admin\SponsorGridController@listGridContent');

Route::middleware(['auth:api', 'roles'])->post('/sponsorgrid/{gridId}', 'Admin\SponsorGridController@addToGrid');

Route::middleware(['auth:api', 'roles'])->get('/sponsorgriditem/{gridId}/{sponsorId}', 'Admin\SponsorGridController@showGridItem');

Route::middleware(['auth:api', 'roles'])->patch('/sponsorgrid/{gridId}/{sponsorId}', 'Admin\SponsorGridController@editGridItem');

Route::middleware(['auth:api', 'roles'])->delete('/sponsorgriditem/{gridId}/{sponsorId}', 'Admin\SponsorGridController@removeFromGrid');