<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    protected $guarded = [];

    public static function boot() {
        parent::boot();
        static::creating(function (Post $post) {
            $post->user_id = Auth::user()->id;
            // $post->created_by = Auth()->email;
        });
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
