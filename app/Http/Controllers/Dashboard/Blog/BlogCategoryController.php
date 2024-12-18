<?php

namespace App\Http\Controllers\Dashboard\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Blog\BlogCategoryRequest;
use Domain\Blog\DataTables\BlogCategoryDataTable;
use Domain\Blog\DTOs\BlogCategoryData;
use Domain\Blog\Models\Blog;
use Domain\Blog\Models\BlogCategory;
use Domain\Blog\Services\BlogCategoryService;

class BlogCategoryController extends Controller
{
    public function __construct(private BlogCategoryService $service) {}

    public function index()
    {
        $sections = BlogCategory::all();
        $blogs = Blog::all();
        return view('dashboard.blog.category', compact('sections', 'blogs'));
    }

    public function indexDatatable(BlogCategoryDataTable $dataTable)
    {
        return $dataTable->render('dashboard.blog.category');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sections = BlogCategory::all();
        return view('dashboard.blog.section_create', compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogCategoryRequest $request)
    {

        $data = BlogCategoryData::from($request->validated());
        $this->service->createSection($data, $request);
        // $validatedData = $request->validated();
        // Section::create($validatedData);
        return to_route('sections.index')->with('success', 'Your Section Is Added Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $section = BlogCategory::findOrFail($id);
        return view('dashboard.blog.section_edit', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(BlogCategoryRequest $request, $id)
    {
        $data = BlogCategoryData::from($request->validated());
        $this->service->updateSection($id, $data, $request);
        return to_route('sections.index')->with('success', 'Your Section has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->service->deleteSection($id);
        return redirect()->back()->with('info', 'Section is Deleted Successfully');
    }
}
