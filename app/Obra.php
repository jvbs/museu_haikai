<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Obra extends Model
{
    protected $guarded = [];

    public function user(){
        $this->belongsTo(User::class);
    }
}
