<?php

namespace App\Http\Controllers\Dashboard\Shared\ClientCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Shared\ClientCategoryRequest;
use Domain\Shared\DataTables\ClientCatDataTable;
use Domain\Shared\DTOs\ClientCategoryData;
use Domain\Shared\Models\ClientCategory;
use Domain\Shared\Services\ClientCategoryService;

class ClientCategoryController extends Controller
{
    public function __construct(private ClientCategoryService $service) {}
    public function index()
    {
        $data = ClientCategory::all();
        return view('dashboard.shared.clientCategory.index', compact('data'));
    }

    public function indexDatatable(ClientCatDataTable $dataTable)
    {
        return $dataTable->render('dashboard.shared.clientCategory.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.shared.clientCategory.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientCategoryRequest $request)
    {
        $data = ClientCategoryData::from($request->validated());
        $this->service->createCat($data, $request);
        return to_route('clientCategory.index')->with('success', 'ClientCategory Is Added Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $clientCat = ClientCategory::findOrFail($id);
        return view('dashboard.shared.clientCategory.edit', compact('clientCat'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(ClientCategoryRequest $request, $id)
    {
        $data = ClientCategoryData::from($request->validated());
        $this->service->updateCat($id, $data, $request);
        return to_route('clientCategory.index')->with('success', 'clientCategory Is Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted = ClientCategory::findOrFail($id);
        $deleted->delete();
        return redirect()->back()->with('success', 'clientCategory is Deleted Successfully');
    }
}
