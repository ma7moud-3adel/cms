<?php

namespace App\Http\Controllers\Dashboard\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Blog\CommentRequest;
use Domain\Blog\DTOs\BlogCommentData;
use Domain\Blog\Models\Blog;
use Domain\Blog\Models\BlogCategory;
use Domain\Blog\Models\Comment;
use Domain\Blog\Models\Section;
use Domain\Blog\Services\BlogCommentService;
use Illuminate\Support\Facades\Request;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CommentController extends Controller
{
    public function __construct(private BlogCommentService $service) {}


    public function index()
    {
        $sections = BlogCategory::all();
        $blogs = Blog::all();
        $comments = Comment::all();
        return view('dashboard.blog.comment', compact('sections', 'blogs', 'comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $comments = Comment::all();
        $blogs = Blog::all();
        return view('dashboard.blog.comment_create', compact('comments', 'blogs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentRequest $request)
    {
        $data = BlogCommentData::from($request->validated());
        $this->service->createComment($data, $request);

        if (Request::route()->getName() == 'comments.create') {
            return to_route('comments.index')->with('success', 'Your comment has been added successfully.');
        }
        return redirect()->back()->with('success', 'Your comment has been added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        $blogs = Blog::all();
        return view('dashboard.blog.comment_edit', compact('comment', 'blogs'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(CommentRequest $request, $id)
    {
        $data = BlogCommentData::from($request->validated());
        $this->service->updateComment($id, $data, $request);
        return to_route('comments.index')->with('success', 'Your comment has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->service->deleteComment($id);
        return redirect()->route('comments.index')->with('success', 'Comment is Deleted Successfully');
    }
}
