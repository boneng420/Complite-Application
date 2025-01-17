<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'lesson';
    protected $primaryKey = 'lessonID';

    protected $fillable = [
        'lessonPicture', 
        'lessonContent'
    ];
}