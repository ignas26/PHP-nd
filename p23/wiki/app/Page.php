<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
        public function cat(){
        return $this->belongsTo('App\Category', 'category');
    }
}
