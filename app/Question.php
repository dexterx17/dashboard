<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

    protected $fillable = [
    	'question', 'question_types_id'
    ];

    public function type(){
    	return $this->belongsTo('App\Question_type');
    }
}
