<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use softDeletes;
    
    protected $tables = 'todos';

    protected $fillable = [
        'content',
    ];
    
}

