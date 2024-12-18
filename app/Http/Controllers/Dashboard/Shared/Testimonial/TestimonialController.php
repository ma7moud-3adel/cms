<?php

namespace App\Http\Controllers\Dashboard\Shared\Testimonial;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Shared\SliderRequest;
use App\Http\Requests\Dashboard\Shared\TestimonialRequest;
use Domain\Shared\DataTables\TestimonialDataTable;
use Domain\Shared\DTOs\TestimonialData;
use Domain\Shared\Models\Testimonial;
use Domain\Shared\Services\TestimonialService;

class TestimonialController extends Controller
{
    public function __construct(private TestimonialService $service) {}
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('dashboard.shared.testimonial.index', compact('testimonials'));
    }

    public function indexDatatable(TestimonialDataTable $dataTable)
    {
        return $dataTable->render('dashboard.shared.testimonial.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.shared.testimonial.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestimonialRequest $request)
    {
        $data = TestimonialData::from($request->validated());
        $this->service->createTestimonial($data, $request);
        return to_route('testimonial.index')->with('success', 'Data is Add Successfully !');
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('dashboard.shared.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(TestimonialRequest $request, $id)
    {
        $data = TestimonialData::from($request->validated());
        $this->service->updateTestimonial($id, $data, $request);
        return to_route('testimonial.index')->with('success', 'Data is Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted = Testimonial::findOrFail($id);
        $deleted->delete();
        return redirect()->back()->with('success', 'Data is Deleted Successfully');
    }
}
