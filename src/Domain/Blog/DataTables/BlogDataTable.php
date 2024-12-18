<?php

namespace Domain\Blog\DataTables;

use Domain\Blog\Models\Blog;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class BlogDataTable extends DataTable
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
            ->addColumn('image', function ($query) {
                return $query->image
                    ? '<img src="' . asset('storage/' . $query->image) . '" width="50" alt="Blog Photo">'
                    : 'No Photo';
            })

            ->addColumn('action', function ($query) {
                $viewBtn = "<a href='" . route('blogs.show', $query->id) . "' class='btn btn-outline-info mx-1'>
        " . __('main.Show') . "
    </a>";

                $editBtn = "<a href='" . route('blogs.edit', $query->id) . "' class='btn btn-outline-primary mx-1'>
        " . __('admin.edit') . "
    </a>";

                $deleteBtn = "<a href='" . route('blogs.destroy', $query->id) . "' data-bs-toggle='modal' data-bs-target='#DeleteMedicalStaffModel" . $query->id . "' class='btn btn-outline-danger delete-item'>
            " . __('admin.delete') . "
        </a>";
                return $viewBtn . $editBtn . $deleteBtn;
            })
            ->rawColumns(['action', 'image'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Blog $model): QueryBuilder
    {
        return $model->newQuery();
    }
}
