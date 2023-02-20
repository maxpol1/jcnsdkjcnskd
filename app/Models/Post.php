<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
    protected $fillable = [ 'user_id', 'title', 'body'];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function  tag(){
        return $this->belongsToMany(Tag::class);
    }

    public  function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
}
