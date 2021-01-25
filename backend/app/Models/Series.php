<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    public $timestamps = true;

    protected $fillable = ['name', 'programme_id'];

    public function programme() {
        return $this->belongsTo(Programme::class, 'programme_id');
    }

    public function groups() {
        return $this->hasMany(Group::class);
    }
}