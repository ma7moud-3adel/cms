<?php

namespace Domain\Course\DataTables;

use Domain\Course\Models\CourseCategory;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class CourseCategoryDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {

        return (new EloquentDataTable($query))
            ->addColumn('id', function ($query) {
                return $query->id;
            })
            ->addColumn('name_en', function ($query) {
                return $query->name_en;
            })
            ->addColumn('name_ar', function ($query) {
                return $query->name_ar;
            })

            ->addColumn('action', function ($query) {

                $editBtn = "<a href='" . route('course-category.edit', $query->id) . "' class='btn btn-outline-primary mx-1'>
        " . __('admin.edit') . "
    </a>";

                $deleteBtn = "<a href='" . route('course-category.destroy', $query->id) . "' data-bs-toggle='modal' data-bs-target='#DeleteMedicalStaffModel" . $query->id . "' class='btn btn-outline-danger delete-item'>
            " . __('admin.delete') . "
        </a>";
                return $editBtn . $deleteBtn;
            })
            ->rawColumns(['action'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(CourseCategory $model): QueryBuilder
    {
        return $model->newQuery();
    }
}
