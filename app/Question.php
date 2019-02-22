<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Singular looks for Plural tables in database (Question - Questions). But can override. See Database tables in docs
class Question extends Model
{
    public function answers() {
        return $this->hasMany('App\Answer');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
