<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    public $timestamps = true;

    public $table = 'programme';

    protected $fillable = ['name'];

    public function series() {
        return $this->hasMany(Series::class);
    }
}