<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['activity_id', 'url_img'];

    public function activity(){
        return $this->belongsTo('App\Models\Activity');
    }
}
