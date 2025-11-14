<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
   protected $guarded = [];

   public function materi(){
        return $this->hasMany(Materi::class, 'writer_id', 'id');
   }
}
