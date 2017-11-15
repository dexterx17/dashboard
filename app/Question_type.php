<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question_type extends Model
{
    protected $table = "question_types";

    protected $fillable = [
    	'type','description'
    ];

    
    public function questions(){
    	return $this->hasMany('App\Question');
    }
    
}
