<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CodeSnip extends Model
{
    protected $table = 'codesnips';
    protected $fillable = [
        'codeSnip',
        'userId'
    ];

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'codesniphastag', 'codeSnipId', 'tagId');
    }

}
