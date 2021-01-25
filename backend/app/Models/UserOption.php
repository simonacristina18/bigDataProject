<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserOption extends Model
{
    public $timestamps = true;
    public $table = 'users_options';

    protected $fillable = ['request_from_id', 'request_with_id', 'request_id'];

    public function request() {
        return $this->belongsTo(Request::class, 'request_id');
    }
}