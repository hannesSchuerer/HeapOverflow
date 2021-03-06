<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';

    protected $fillable = [
        'tag'
    ];

    public function codeSnips()
    {
        return $this->belongsToMany('App\CodeSnip', 'codesniphastag', 'tagId', 'codeSnipId');
    }
}
