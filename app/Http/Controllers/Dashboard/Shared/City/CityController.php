<?php

namespace App\Http\Controllers\Dashboard\Shared\City;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Shared\CityRequest;
use Domain\Shared\DataTables\CityDataTable;
use Domain\Shared\DTOs\CityData;
use Domain\Shared\Models\City;
use Domain\Shared\Models\Government;
use Domain\Shared\Services\CityService;

class CityController extends Controller
{
    public function __construct(private CityService $service) {}
    public function index()
    {
        $cities = City::with('government')->get();
        $govs = Government::all();
        return view('dashboard.shared.city.index', compact('cities', 'govs'));
    }

    public function indexDatatable(CityDataTable $dataTable)
    {
        return $dataTable->render('dashboard.project.project');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::all();
        $govs = Government::all();
        return view('dashboard.shared.city.index', compact('cities', 'govs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CityRequest $request)
    {
        $data = CityData::from($request->validated());
        $this->service->createCity($data, $request);
        // $validated = $request->validated();
        // City::create($validated);
        return to_route('city.index')->with('success', 'City Is Added Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $data = City::findOrFail($id);
        $govs = Government::all();
        return view('dashboard.shared.city.edit', compact('data', 'govs'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(CityRequest $request, $id)
    {
        $data = CityData::from($request->validated());
        $this->service->updateCity($id, $data, $request);
        // $single = City::findOrFail($id);
        // $validated = $request->validated();
        // $single->update($validated);
        return to_route('city.index')->with('success', 'City Is Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->service->deleteCity($id);
        // $deleted = City::findOrFail($id);
        // $deleted->delete();

        return redirect()->back()->with('success', 'City is Deleted Successfully');
    }
}
