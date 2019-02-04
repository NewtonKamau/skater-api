<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Trick extends Model
{
    //
protected $table = 'tricks';
protected $fillable = [
'name',
'decription',
'name_of_place',

];

public function user()
{
  return $this->belongsTo('user');
}
}
