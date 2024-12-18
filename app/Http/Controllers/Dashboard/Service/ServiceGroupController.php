<?php

namespace App\Http\Controllers\Dashboard\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Service\ServiceGroupRequest;
use Domain\Service\DataTables\ServiceGroupDataTable;
use Domain\Service\DTOs\ServiceGroupData;
use Domain\Service\Models\ServiceGroup;
use Domain\Service\Services\ServiceGroupService;
use Illuminate\Http\Request;

class ServiceGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(private ServiceGroupService $service) {}

    public function index()
    {
        $serviceGroups=ServiceGroup::all();
        return view('dashboard.service.service_group.index',compact('serviceGroups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function indexDatatable(ServiceGroupDataTable $dataTable)
    {
//        dd('sdf0');
        return $dataTable->render('dashboard.service.service_group.index');

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceGroupRequest $request)
    {
        $data=ServiceGroupData::from($request->validated());
        $this->service->createServiceGroup($data);
        $serviceGroups=ServiceGroup::all();
        return view('dashboard.service.service_group.index',compact('serviceGroups'));
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceGroup $serviceGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $serviceGroup=ServiceGroup::findOrFail($id);
        return view('dashboard.service.service_group.edit',compact('serviceGroup'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceGroupRequest $request,$id)
    {
//        dd('sdfkj');
        $data=ServiceGroupData::from($request->Validated());
        $this->service->updateServiceGroup($id,$data);
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->service->deleteServiceGroup($id);
        return response()->json([
            'status' => 'success',
            'message' => 'service deleted successfully.',
        ], 200);    }
}
