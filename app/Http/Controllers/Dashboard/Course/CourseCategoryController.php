<?php

namespace App\Http\Controllers\Dashboard\Course;

use App\Http\Controllers\Controller;
use Domain\Course\DataTables\CourseCategoryDataTable;
use Domain\Course\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courseCategories = CourseCategory::all();
        return view('dashboard.course.course_category.index', compact('courseCategories'));
    }

    public function indexDatatable(CourseCategoryDataTable $dataTable)
    {
        return $dataTable->render('dashboard.course.course_category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('dashboard.course.course_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
        ]);

        CourseCategory::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'meta_title_en' => $request->meta_title_en,
            'meta_title_ar' => $request->meta_title_ar,
            'meta_desc_en' => $request->meta_desc_en,
            'meta_desc_ar' => $request->meta_desc_ar,
            'keywords' => $request->keywords,
            'slug' => $request->slug
        ]);
        $courseCategories = CourseCategory::all();
        return view('dashboard.course.course_category.index', compact('courseCategories'))
            ->with('success', 'Course category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show() {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $courseCategory = CourseCategory::findOrFail($id);

        return view('dashboard.course.course_category.edit', compact('courseCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $courseCategory = CourseCategory::findOrFail($id);
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
        ]);

        $courseCategory->update([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'meta_title_en' => $request->meta_title_en ?? $courseCategory->meta_title_en,
            'meta_title_ar' => $request->meta_title_ar ?? $courseCategory->meta_title_ar,
            'meta_desc_en' => $request->meta_desc_en ?? $courseCategory->meta_desc_en,
            'meta_desc_ar' => $request->meta_desc_ar ?? $courseCategory->meta_desc_ar,
            'keywords' => $request->keywords ?? $courseCategory->keywords,
            'slug' => $request->slug ?? $courseCategory->slug
        ]);
        return redirect()->back()->with('success', 'Course category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $courseCategory = CourseCategory::findOrFail($id);
        $courseCategory->delete();
        return redirect()->back()->with('success', 'Course category deleted successfully');
    }
}
