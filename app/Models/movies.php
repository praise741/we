<?php

namespace App\Models;
use Laravel\Scout\Searchable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    use HasFactory,Searchable;
    protected $fillable =[

        'cover',
        'title',
        'description',
        'releaseyear',
        'runningtime',
       'quality',
        'age',
      'genre',
        'type',
        'link'

    ];
}
