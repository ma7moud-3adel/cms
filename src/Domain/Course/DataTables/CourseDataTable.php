<?php

namespace Domain\Course\DataTables;

use Domain\Course\Models\Course;
use Domain\Product\Models\Product;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class CourseDataTable extends DataTable
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
            ->addColumn('price', function ($query) {
                return $query->price;
            })
            ->addColumn('course_category_id', function ($query) {
                return $query->courseCategory
                    ? $query->courseCategory->name_en . ' / ' . $query->courseCategory->name_ar
                    : 'No Category Assigned';
            })
            ->addColumn('photo', function ($query) {
                return $query->photo
                    ? '<img src="' . asset('storage/' . $query->photo) . '" width="50" alt="Product Photo">'
                    : 'No Photo';
            })

            ->addColumn('action', function ($query) {

                $editBtn = "<a href='" . route('course.edit', $query->id) . "' class='btn btn-outline-primary mx-1'>
            " . __('admin.edit') . "</a>";

                $deleteBtn = "<a href='" . route('course.destroy', $query->id) . "' data-bs-toggle='modal' data-bs-target='#DeleteMedicalStaffModel" . $query->id . "' class='btn btn-outline-danger delete-item'>
            " . __('admin.delete') . "</a>";

                return $editBtn . $deleteBtn;
            })
            ->rawColumns(['action', 'photo'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Course $model): QueryBuilder
    {
        return $model->with('courseCategory');
    }
}
