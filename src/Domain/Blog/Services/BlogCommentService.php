<?php

namespace Domain\Blog\Services;

use App\Http\Requests\Dashboard\Blog\CommentRequest;
use Domain\Blog\DTOs\BlogCommentData;
use Domain\Blog\Models\Comment;
use Domain\Shared\Traits\ImageUploadTrait;

class BlogCommentService
{
    use ImageUploadTrait;


    public function createComment(BlogCommentData $data, CommentRequest $request): void
    {

        Comment::create([
            'user_name' => $data->user_name,
            'phone' => $data->phone,
            'comment' => $data->comment,
            'blog_id' => $data->blog_id,
        ]);
    }


    public function updateComment($id, BlogCommentData $data, CommentRequest $request): void
    {
        $comment = Comment::findOrFail($id);



        $updateData = [
            'user_name' => $data->user_name,
            'phone' => $data->phone,
            'comment' => $data->comment,
            'blog_id' => $data->blog_id,
        ];
        $comment->update($updateData);
    }


    public function deleteComment($id): void
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
    }
}
