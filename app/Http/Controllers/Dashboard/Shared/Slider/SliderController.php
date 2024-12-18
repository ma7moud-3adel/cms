<?php

namespace App\Http\Controllers\Dashboard\Shared\Slider;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Shared\CityRequest;
use App\Http\Requests\Dashboard\Shared\SliderRequest;
use Domain\Shared\DataTables\SliderDataTable;
use Domain\Shared\DTOs\SliderData;
use Domain\Shared\Models\Slider;
use Domain\Shared\Services\SliderService;

class SliderController extends Controller
{
    public function __construct(private SliderService $service) {}
    public function index()
    {
        $sliders = Slider::all();
        return view('dashboard.shared.slider.index', compact('sliders'));
    }

    public function indexDatatable(SliderDataTable $dataTable)
    {
        return $dataTable->render('dashboard.shared.slider.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.shared.slider.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request)
    {
        $data = SliderData::from($request->validated());
        $this->service->createSlider($data, $request);
        return to_route('slider.index')->with('success', 'Slider Is Added Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('dashboard.shared.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(SliderRequest $request, $id)
    {
        $data = SliderData::from($request->validated());
        $this->service->updateSlider($id, $data, $request);
        return to_route('slider.index')->with('success', 'Slider Is Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted = Slider::findOrFail($id);
        $deleted->delete();
        return redirect()->back()->with('success', 'Slider is Deleted Successfully');
    }
}
