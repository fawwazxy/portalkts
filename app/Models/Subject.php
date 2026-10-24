<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'description', 'course_id'
    ];

    protected $hidden = ['_token', '_method'];

    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}

