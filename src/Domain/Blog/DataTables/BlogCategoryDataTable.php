<?php

namespace Domain\Blog\DataTables;

use Domain\Blog\Models\Blog;
use Domain\Blog\Models\BlogCategory;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class BlogCategoryDataTable extends DataTable
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
            ->addColumn('title_en', function ($query) {
                return $query->title_en;
            })
            ->addColumn('title_ar', function ($query) {
                return $query->title_ar;
            })

            ->addColumn('action', function ($query) {

                $editBtn = "<a href='" . route('sections.edit', $query->id) . "' class='btn btn-outline-primary mx-1'>
        " . __('admin.edit') . "
    </a>";

                $deleteBtn = "<a href='" . route('sections.destroy', $query->id) . "' data-bs-toggle='modal' data-bs-target='#DeleteMedicalStaffModel" . $query->id . "' class='btn btn-outline-danger delete-item'>
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
    public function query(BlogCategory $model): QueryBuilder
    {
        return $model->newQuery();
    }
}
