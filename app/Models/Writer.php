<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
     protected $guarded = []; //fieldnya supaya diisi
    
    //relation one to many
    public function comments(){
        return $this->hasMany(Materi::class);
    }
}
