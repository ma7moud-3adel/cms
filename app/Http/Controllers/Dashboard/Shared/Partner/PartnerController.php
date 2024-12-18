<?php

namespace App\Http\Controllers\Dashboard\Shared\Partner;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Shared\PartnerRequest;
use Domain\Shared\DataTables\PartnerDataTable;
use Domain\Shared\DTOs\PartnerData;
use Domain\Shared\Models\Partner;
use Domain\Shared\Services\PartnerService;

class PartnerController extends Controller
{
    public function __construct(private PartnerService $service) {}
    public function index()
    {
        $partners = Partner::all();
        return view('dashboard.shared.partner.index', compact('partners'));
    }

    public function indexDatatable(PartnerDataTable $dataTable)
    {
        return $dataTable->render('dashboard.shared.partner.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.shared.partner.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PartnerRequest $request)
    {
        $data = PartnerData::from($request->validated());
        $this->service->createPartner($data, $request);
        return to_route('partner.index')->with('success', 'Data is Add Successfully !');
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('dashboard.shared.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(PartnerRequest $request, $id)
    {
        $data = PartnerData::from($request->validated());
        $this->service->updatePartner($id, $data, $request);
        return to_route('partner.index')->with('success', 'Data is Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted = Partner::findOrFail($id);
        $deleted->delete();
        return redirect()->back()->with('success', 'Data is Deleted Successfully');
    }
}
