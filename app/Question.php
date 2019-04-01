<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Use_;

class Question extends Model
{
    protected $fillable=['title','body'];

    //define relationship a question.
    public function user(){
        return $this->belongsTo(User::class);
    }
}
