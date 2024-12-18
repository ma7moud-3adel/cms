<?php

namespace App\Http\Controllers\Dashboard\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Service\ServiceGroupRequest;
use App\Http\Requests\Dashboard\Service\ServiceRequest;
use Domain\Service\DataTables\ServiceDataTable;
use Domain\Service\DTOs\ServiceData;
use Domain\Service\Models\Service;
use Domain\Service\Models\ServiceGroup;
use Domain\Service\Services\ServiceService;
use Domain\Shared\Traits\ImageUploadTrait;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(private ServiceService $service) {}

    use ImageUploadTrait;
    public function index()
    {
        $services = Service::all();
        $serviceGroups=ServiceGroup::all();
        return view('dashboard.service.service.index',compact('services','serviceGroups'));
    }
    public function indexDatatable(ServiceDataTable $dataTable)
    {
        return $dataTable->render('dashboard.service.service.index');

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $serviceGroups = ServiceGroup::all();
        return view('dashboard.service.service.create',compact('serviceGroups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request)
    {
//        dd($request);

        $data = ServiceData::from($request->validated());
        $this->service->createService($data,$request);
        $services = Service::all();
        $serviceGroups=ServiceGroup::all();
        return redirect()->route('service.index',compact('services','serviceGroups'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $service= Service::findOrFail($id);
        $serviceGroups=ServiceGroup::all();
        return view('dashboard.service.service.edit',compact('serviceGroups','service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceRequest $request, $id)
    {

        $data=ServiceData::from($request->validated());
        $this->service->updateService($id,$data,$request);
        $services = Service::all();
        $serviceGroups=ServiceGroup::all();
        return view('dashboard.service.service.index',compact('services','serviceGroups'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->service->deleteService($id);

        return response()->json([
            'status' => 'success',
            'message' => 'service deleted successfully.',
        ], 200);
    }
}
