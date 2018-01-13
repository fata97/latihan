<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    //
    protected $table = 'guru';
    public $timestamps = false;
    protected $guarded = [];

    public function kelas(){
      return $this->belongsTo('App\Models\Kelas');
    }
}
