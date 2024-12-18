<?php

namespace Domain\Service\DataTables;

use Domain\Service\Models\Service;
use Domain\Service\Models\ServiceGroup;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class ServiceGroupDataTable extends DataTable
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
            ->addColumn('actions', function ($query) {

                $editBtn = "<a href='" . route('service-group.edit', $query->id) . "' class='btn btn-outline-primary mx-1'>
            " . __('main.edit') . "</a>";

                $deleteBtn = "<a href='" . route('service-group.destroy', $query->id) . "' data-bs-toggle='modal' data-bs-target='#DeleteMedicalStaffModel" . $query->id . "' class='btn btn-outline-danger delete-item'>
            " . __('main.delete') . "</a>";

                return $editBtn . $deleteBtn;
            })
            ->rawColumns(['actions'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(ServiceGroup $model): QueryBuilder
    {
        return $model->newQuery();
    }
}
