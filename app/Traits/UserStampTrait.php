<?php

namespace App\Traits;

use App\Post;
use Illuminate\Support\Facades\Auth;

trait UserStampTrait
{
    public static function bootUserStampTrait()
    {
        static::creating(function ($model) {
            $model->user_id = Auth::user()->id;
            $model->created_by = Auth::user()->name;
        });

        static::updating(function (Post $post) {
            $post->updated_by = Auth::user()->name;
        });

        static::deleting(function (Post $post) {
            $post->deleted_by = Auth::user()->name;
        });
    }
}
