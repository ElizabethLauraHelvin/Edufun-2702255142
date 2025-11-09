<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $guarded = [];

    //belong to atau berhubungan dengan post, post = one many nya ke comment
    public function post(){
        return $this->belongsTo(Writer::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
