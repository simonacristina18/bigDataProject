<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    public $timestamps = true;

    public $table = 'requests';

    protected $fillable = ['request_from_id'];
}