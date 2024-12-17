<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activity';
    protected $primaryKey = 'activityID';

    protected $fillable = [
        'activityQuestions', 
        'activityChoices', 
        'activityKey', 
        'activityPicture'
    ];

    protected $casts = [
        'activityChoices' => 'array'
    ];

    // Optional: Disable timestamps if not needed
    public $timestamps = false;
}