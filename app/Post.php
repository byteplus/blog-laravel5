<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'body',
    ];

    /**
     * belongsTo function
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * hasMany function
     *
     * @return void
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // protected static function boot() {
    //     parent::boot();

    //     static::deleting(function($post) {
    //         $post->contacts()->delete();
    //     });
    // }
}
