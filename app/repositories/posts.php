<?php
namespace App\Repositories;
use App\Post;
class Posts 
{
    public function all()
    {
        return Post::all();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
?>