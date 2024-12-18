<?php

namespace App\Http\Controllers\Dashboard\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Project\ProjectRequest;
use Domain\Project\DataTables\ProjectDataTable;
use Domain\Project\DTOs\ProjectData;
use Domain\Project\Models\Project;
use Domain\Project\Models\ProjectCategory;
use Domain\Project\Services\ProjectService;

class ProjectController extends Controller
{
    public function __construct(private ProjectService $service) {}
    public function index()
    {
        $projects = Project::with('projectGallery')->get();
        return view('dashboard.project.project', compact('projects'));
    }

    public function indexDatatable(ProjectDataTable $dataTable)
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
        return view('dashboard.project.project_create', compact('categories', 'projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        $data = ProjectData::from($request->validated());
        $this->service->createProject($data, $request);

        return to_route('projects.index')->with('success', 'City Is Added Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $categories = ProjectCategory::all();
        return view('dashboard.project.project_edit', compact('categories', 'project'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(ProjectRequest $request, $id)
    {
        $data = ProjectData::from($request->validated());
        $this->service->updateProject($id, $data, $request);

        return to_route('projects.index')->with('success', 'City Is Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted = Project::findOrFail($id);
        $deleted->delete();
        return redirect()->back()->with('success', 'Deleted Project SuccessFully');
    }
}
