<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreAdminRequest;
use App\Http\Requests\Dashboard\UpdateAdminRequest;
use Domain\Admin\DataTables\AdminDataTable;
use Domain\Admin\DTOs\AdminData;
use Domain\Admin\DTOs\UpdateAdminData;
use Domain\Admin\Models\Admin;
use Domain\Admin\Services\AdminService;
use Domain\Shared\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{

    public function __construct(private AdminService $service)
    {
    }

    public function index()
    {

        return view('dashboard.admin.index');
    }

    public function indexDatatable(AdminDataTable $dataTable)
    {



        return $dataTable->render('dashboard.admin.datatable');
    }

    public function create()
    {
        return view('dashboard.admin.create');
    }

    public function store(StoreAdminRequest $request)
    {
        $data = AdminData::from($request->validated());
        $this->service->createAdmin($data, $request);

        session()->flash('success', 'Admin created successfully.');

        return redirect()->route('admin.index');


    }

    public function edit(Admin $admin)
    {
        return view('dashboard.admin.edit', compact('admin'));
    }

    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        $data = UpdateAdminData::from($request->validated());
        $this->service->updateAdmin($admin->id, $data, $request);

        return redirect()->route('admin.index')
            ->with('success', 'Admin updated successfully.');
    }

    public function destroy(int $id)
    {
        $this->service->deleteAdmin($id);

        return response()->json([
            'status' => 'success',
            'message' => 'Admin deleted successfully.',
        ], 200);
    }

    public function changeStatus(Request $request)
    {
        $this->service->changeStatus(
            $request->id,
            $request->status === "true"
        );

        return response()->json([
            'message' => 'Status changed successfully.',
        ], 200);
    }
}
