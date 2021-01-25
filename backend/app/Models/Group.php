<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public $timestamps = true;

    protected $fillable = ['name', 'series_id'];

    public function series() {
        return $this->belongsTo(Series::class,  'series_id');
    }
}