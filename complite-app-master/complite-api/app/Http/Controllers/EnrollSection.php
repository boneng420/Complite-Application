<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnrollSection extends Model
{
    protected $table = 'enroll_section';
    protected $primaryKey = 'enrollID';
    
    protected $fillable = [
        'section_ID',
        'student_ID',
        'lessonStatus',
        'activityStatus',
    ];

    public function student()
    {
        return $this->belongsTo(StudentProfile::class, 'student_ID', 'studentID');
    }

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_ID', 'sectionID');
    }
}






