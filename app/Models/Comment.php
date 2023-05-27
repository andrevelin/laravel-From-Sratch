<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function posts (){
        return $this->belongsTo(User::class);    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}