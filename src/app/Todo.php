<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $tables = 'todos';

    protected $fillable = [
        'content',
    ];
}
