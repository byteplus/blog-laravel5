<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'post_id', 'body',
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
     * belongsTo function
     *
     * @return void
     */
    public function comment()
    {
        return $this->belongsTo(Comment::class, 'post_id');
    }
}
