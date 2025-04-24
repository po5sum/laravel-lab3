<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Post;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'commenter_name', 'comment'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
