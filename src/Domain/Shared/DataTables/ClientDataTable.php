<?php

namespace Domain\Shared\DataTables;

use Domain\Shared\Models\Client;
use Domain\Shared\Models\Slider;
use Domain\Shared\Models\Testimonial;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class ClientDataTable extends DataTable
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
            ->addColumn('link', function ($query) {
                return $query->link;
            })
            ->addColumn('image', function ($query) {
                return $query->image
                    ? '<img src="' . asset('storage/' . $query->image) . '" width="50" alt="Blog Photo">'
                    : 'No Photo';
            })

            ->addColumn('action', function ($query) {
                $editBtn = "<a href='" . route('client.edit', $query->id) . "' class='btn btn-outline-primary mx-1'>
            " . __('admin.edit') . "</a>";

                $deleteBtn = "<a href='" . route('client.destroy', $query->id) . "' data-bs-toggle='modal' data-bs-target='#DeleteMedicalStaffModel" . $query->id . "' class='btn btn-outline-danger delete-item'>
            " . __('admin.delete') . "</a>";

                return $editBtn . $deleteBtn;
            })
            ->rawColumns(['action', 'image'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Client $model): QueryBuilder
    {
        return $model->newQuery();
    }
}
