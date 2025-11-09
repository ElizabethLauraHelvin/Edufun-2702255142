<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    //belong to atau berhubungan dengan post, post = one many nya ke comment
    public function materi(){
        return $this->hasMany(Materi::class);
    }

}
