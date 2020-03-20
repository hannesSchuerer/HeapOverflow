<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CodeSnipHasTag extends Model
{
    protected $table = 'codesniphastag';
    protected $fillable = [
        'codeSnipId',
        'tagId'
    ];
}
