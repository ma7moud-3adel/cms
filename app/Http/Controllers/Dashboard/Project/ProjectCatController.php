<?php

namespace App\Http\Controllers\Dashboard\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Project\ProjectCatRequest;
use Domain\Project\DataTables\ProjectCategoryDataTable;
use Domain\Project\DTOs\ProjectCatData;
use Domain\Project\Models\Project;
use Domain\Project\Models\ProjectCategory;
use Domain\Project\Services\ProjectCatService;

class ProjectCatController extends Controller
{
    public function __construct(private ProjectCatService $service) {}
    public function index()
    {
        $projects = Project::all();
        $categories = ProjectCategory::all();
        return view('dashboard.project.category', compact('projects', 'categories'));
    }

    public function indexDatatable(ProjectCategoryDataTable $dataTable)
    {
        return $dataTable->render('dashboard.project.project');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::all();
        $categories = ProjectCategory::all();
        return view('dashboard.project.category', compact('projects', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectCatRequest $request)
    {
        $data = ProjectCatData::from($request->validated());
        $this->service->createCat($data, $request);

        return to_route('project_categories.index')->with('success', 'Project Categories Is Added Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $category = ProjectCategory::findOrFail($id);
        return view('dashboard.project.category_edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(ProjectCatRequest $request, $id)
    {
        $data = ProjectCatData::from($request->validated());
        $this->service->updateCat($id, $data, $request);
        return to_route('project_categories.index')->with('success', 'Project Categories Is Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted = ProjectCategory::findOrFail($id);
        $deleted->delete();
        return redirect()->back()->with('success', 'Deleted Category SuccessFully');
    }
}
