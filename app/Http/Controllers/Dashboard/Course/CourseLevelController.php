<?php

namespace App\Http\Controllers\Dashboard\Course;

use App\Http\Controllers\Controller;
use Domain\Course\Models\Course;
use Domain\Course\Models\CourseLevel;
use Illuminate\Http\Request;

class CourseLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courseLevels = CourseLevel::all();
        $courses = Course::all();
        return view('dashboard.course.course_levels.index', compact('courseLevels', 'courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $courseLevels = CourseLevel::all();
        $courses = Course::all();
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
        ]);

        CourseLevel::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'course_id' => $request->course_id
        ]);
        $courseLevels = CourseLevel::all();
        return view('dashboard.course.course_levels.index', compact('courseLevels', 'courses'))
            ->with('success', 'Course level created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseLevel $courseLevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseLevel $courseLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseLevel $courseLevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseLevel $courseLevel)
    {
        //
    }
}
