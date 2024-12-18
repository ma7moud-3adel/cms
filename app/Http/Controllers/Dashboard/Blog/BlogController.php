<?php

namespace App\Http\Controllers\Dashboard\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Blog\BlogRequest;
use Domain\Blog\DataTables\BlogDataTable;
use Domain\Blog\DTOs\BlogData;
use Domain\Blog\Models\Blog;
use Domain\Blog\Models\BlogCategory;
use Domain\Blog\Models\Comment;
use Domain\Blog\Services\BlogService;

class BlogController extends Controller
{

    public function __construct(private BlogService $service) {}

    public function index()
    {
        $sections = BlogCategory::all();
        $blogs = Blog::all();
        $comments = Comment::all();
        return view('dashboard.blog.blog', compact('sections', 'blogs', 'comments'));
    }

    public function indexDatatable(BlogDataTable $dataTable)
    {
        return $dataTable->render('dashboard.blog.blog');
    }

    public function show($id)
    {
        $blog = Blog::with('comments')->findOrFail($id);
        return view('dashboard.blog.blog_show', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blogs = Blog::all();
        $sections = BlogCategory::all();
        return view('dashboard.blog.blog_create', compact('blogs', 'sections'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        $data = BlogData::from($request->validated());
        $this->service->createBlog($data, $request);
        return to_route('blogs.index')->with('success', 'Your Blog Is Added Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $sections = BlogCategory::all();
        return view('dashboard.blog.blog_edit', compact('blog', 'sections'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(BlogRequest $request, $id)
    {
        $data = BlogData::from($request->validated());
        $this->service->updateBlog($id, $data, $request);
        return to_route('blogs.index')->with('success', 'Your blog has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->service->deleteBlog($id);
        return redirect()->back()->with('success', 'Blog is Deleted Successfully');
    }
}
