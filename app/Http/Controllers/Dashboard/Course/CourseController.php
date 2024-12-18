<?php

namespace App\Http\Controllers\Dashboard\Course;

use App\Http\Controllers\Controller;
use Domain\Course\DataTables\CourseDataTable;
use Domain\Course\Models\Course;
use Domain\Course\Models\CourseCategory;
use Domain\Shared\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $courses=Course::all();
        return view('dashboard.course.course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courseCategories = CourseCategory::all('name_en','id');
        return view('dashboard.course.course.create',compact('courseCategories'));
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
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'price'=>'required|min:0'
        ]);

        if ($request->hasFile('photo')) {
//            // Generate unique file name
//            $fileName = time() . '_' . $request->file('photo')->getClientOriginalName();
//
//            // Move the file directly to public/uploads/courses
//            $request->file('photo')->move(public_path('uploads/courses'), $fileName);
//
//            // Save path in database relative to public directory
//            $photoPath = 'uploads/courses/' . $fileName;

            $photoPath=$this->uploadImage($request->file('photo'),'photo','courses');

        }
        Course::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'course_category_id'=>$request->course_category_id,
            'photo' => $photoPath ?? null,
            'price'=>$request->price,
            'meta_title_en'=>$request->meta_title_en,
            'meta_title_ar'=>$request->meta_title_ar,
            'meta_desc_en'=>$request->meta_desc_en,
            'meta_desc_ar'=>$request->meta_desc_ar,
            'keywords'=>$request->keywords,
            'slug'=>$request->slug
        ]);
        $courses=Course::all();
        return view('dashboard.course.course.index',compact('courses'))
            ->with('success', 'Course created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories=CourseCategory::all();
        $course=Course::with('courseCategory')->findOrFail($id);
//        dd($course );
        return view('dashboard.course.course.edit',compact('course','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $course=Course::findOrFail($id);
//        dd($request);
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
            'photo' => 'image|mimes:jpg,jpeg,png|max:2048',
            'price'=>'required|numeric|min:0'
        ]);
        if ($request->hasFile('photo')) {
//            $fileName = time() . '_' . $request->file('photo')->getClientOriginalName();
//            $request->file('photo')->move(public_path('uploads/courses'), $fileName);
//            $photoPath = 'uploads/courses/' . $fileName;
            $photoPath=$this->uploadImage($request->file('photo'),'photo','courses');
        }
            $course->update([
                'name_en' => $request->name_en,
                'name_ar' => $request->name_ar,
                'description_en' => $request->description_en,
                'description_ar' => $request->description_ar,
                'course_category_id'=>$request->course_category_id,
                'photo' => $photoPath ?? $course->photo,
                'price'=>$request->price,
                'meta_title_en'=>$request->meta_title_en??$course->meta_title_en,
                'meta_title_ar'=>$request->meta_title_ar??$course->meta_title_ar,
                'meta_desc_en'=>$request->meta_desc_en??$course->meta_desc_en,
                'meta_desc_ar'=>$request->meta_desc_ar??$course->meta_desc_ar,
                'keywords'=>$request->keywords??$course->keywords,
                'slug'=>$request->slug??$course->slug
        ]);
        return redirect()->route('course.index')->with('success', 'Course Updated successfully');
    }
    public function indexDatatable(CourseDataTable $dataTable)
    {
        return $dataTable->render('dashboard.course.course.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $course=Course::findOrFail($id)->first();
        $course->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Admin deleted successfully.',
        ], 200);
    }
}
