<?php

namespace App\Repositories\Shared;

use App\Models\Shared\Comment;

class CommentsRepository
{
    public function create(Comment $comment) {
        return $comment->save();
    }
    
    public function update(Comment $comment) {
        return $comment->save();
    }

    public function getById($commentId) {
        return Comment::whereId($commentId)->first();
    }
}

