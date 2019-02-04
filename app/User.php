<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Trick;


class User extends Model
{
    //
protected $table = 'users';
protected $fillable =[
 'name'
];

 public function tricks()
{
  return $this->hasMany('tricks');
}


}
