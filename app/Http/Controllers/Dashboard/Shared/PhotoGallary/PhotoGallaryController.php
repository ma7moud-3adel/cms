<?php

namespace App\Http\Controllers\Dashboard\Shared\PhotoGallary;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Shared\PartnerRequest;
use App\Http\Requests\Dashboard\Shared\PhotoGallaryRequest;
use Domain\Shared\DTOs\PhotoGallaryData;
use Domain\Shared\Models\PhotoGallary;
use Domain\Shared\Services\PhotoGallaryService;

class PhotoGallaryController extends Controller
{
    public function __construct(private PhotoGallaryService $service) {}
    public function index()
    {
        $gallaries = PhotoGallary::all();
        return view('dashboard.shared.gallary.index', compact('gallaries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.shared.gallary.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PhotoGallaryRequest $request)
    {
        $data = PhotoGallaryData::from($request->validated());
        $this->service->createGallary($data, $request);
        return to_route('gallary.index')->with('success', 'Data is Add Successfully !');
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $gallary = PhotoGallary::findOrFail($id);
        return view('dashboard.shared.gallary.edit', compact('gallary'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(PhotoGallaryRequest $request, $id)
    {
        $data = PhotoGallaryData::from($request->validated());
        $this->service->updateGallary($id, $data, $request);
        return to_route('gallary.index')->with('success', 'Data is Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted = PhotoGallary::findOrFail($id);
        $deleted->delete();
        return redirect()->back()->with('success', 'Data is Deleted Successfully');
    }
}
