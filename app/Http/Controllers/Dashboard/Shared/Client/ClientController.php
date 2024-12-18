<?php

namespace App\Http\Controllers\Dashboard\Shared\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Shared\ClientRequest;
use Domain\Shared\DataTables\ClientDataTable;
use Domain\Shared\DTOs\ClientData;
use Domain\Shared\Models\Client;
use Domain\Shared\Models\ClientCategory;
use Domain\Shared\Services\ClientService;

class ClientController extends Controller
{
    public function __construct(private ClientService $service) {}
    public function index()
    {
        $data = Client::all();
        $categories = ClientCategory::all();
        return view('dashboard.shared.client.index', compact('data', 'categories'));
    }

    public function indexDatatable(ClientDataTable $dataTable)
    {
        return $dataTable->render('dashboard.shared.client.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.shared.client.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request)
    {
        $data = ClientData::from($request->validated());
        $this->service->createClient($data, $request);
        return to_route('client.index')->with('success', 'Client Is Added Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('dashboard.shared.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(ClientRequest $request, $id)
    {
        $data = ClientData::from($request->validated());
        $this->service->updateClient($id, $data, $request);
        return to_route('client.index')->with('success', 'client Is Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted = Client::findOrFail($id);
        $deleted->delete();
        return redirect()->back()->with('success', 'client is Deleted Successfully');
    }
}
