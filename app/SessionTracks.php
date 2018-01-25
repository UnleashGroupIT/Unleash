<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SessionTracks extends Model
{
  protected $fillable = [
	'session_id',
	'track_id'
];

  protected $table = 'sessiontracks';

}
