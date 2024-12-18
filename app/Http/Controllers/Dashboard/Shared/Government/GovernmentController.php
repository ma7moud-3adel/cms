<?php

namespace App\Http\Controllers\Dashboard\Shared\Government;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Shared\GovernmentRequest;
use Domain\Shared\DataTables\GovernmentDataTable;
use Domain\Shared\DTOs\GovernmentData;
use Domain\Shared\Models\Government;
use Domain\Shared\Services\GovernmentService;

class GovernmentController extends Controller
{

    public function __construct(private GovernmentService $service) {}

    public function index()
    {
        $data = Government::all();
        return view('dashboard.shared.government.index', compact('data'));
    }

    public function indexDatatable(GovernmentDataTable $dataTable)
    {
        return $dataTable->render('dashboard.project.project');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Government::all();
        return view('dashboard.shared.government.index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GovernmentRequest $request)
    {
        $data = GovernmentData::from($request->validated());
        $this->service->createGov($data, $request);
        // $validated = $request->validated();
        // Government::create($validated);
        return to_route('government.index')->with('success', 'Government Is Added Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $data = Government::findOrFail($id);
        return view('dashboard.shared.government.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(GovernmentRequest $request, $id)
    {
        $data = GovernmentData::from($request->validated());
        $this->service->updateGov($id, $data, $request);
        // $single = Government::findOrFail($id);
        // $validated = $request->validated();
        // $single->update($validated);
        return to_route('government.index')->with('success', 'Government Is Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->service->deleteGov($id);

        return redirect()->back()->with('danger', 'Government is Deleted Successfully');
    }
}
