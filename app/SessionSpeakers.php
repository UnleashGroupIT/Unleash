<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SessionSpeakers extends Model
{

  protected $fillable = [
	'session_id',
	'speaker_id'
];
  protected $table = 'sessionspeakers';

}
