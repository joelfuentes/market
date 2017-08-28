<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
  public function farms(){
    return $this->belongsToMany('App\Farm')->withTimestamps();
  }
    protected $fillable = [ 'name', 'city', 'website' ];
}
