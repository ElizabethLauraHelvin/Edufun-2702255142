<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $guarded = [];

    public function writer(){
        return $this->belongsTo(Writer::class, 'writer_id', 'id');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
