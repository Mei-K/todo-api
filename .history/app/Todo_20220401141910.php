<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'last_update';
    //
    protected  $fillable = [
        'title',
        'content',
        'goaldate',
        'finished',
      ];
}