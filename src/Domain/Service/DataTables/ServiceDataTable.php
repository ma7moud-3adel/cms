<?php

namespace Domain\Service\DataTables;

use Domain\Service\Models\Service;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class ServiceDataTable extends DataTable
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
            ->addColumn('service_group_id', function ($query) {
                return $query->serviceGroup ? $query->serviceGroup->name_en : 'N/A';
            })
            ->addColumn('photo', function ($query) {
                return $query->photo
                    ? '<img src="' . asset('storage/' . $query->photo) . '" width="50" alt="Service Photo">'
                    : 'No Photo';
            })

            ->addColumn('action', function ($query) {

                $editBtn = "<a href='" . route('service.edit', $query->id) . "' class='btn btn-outline-primary mx-1'>
            " . __('admin.edit') . "</a>";

                $deleteBtn = "<a href='" . route('service.destroy', $query->id) . "' data-bs-toggle='modal' data-bs-target='#DeleteMedicalStaffModel" . $query->id . "' class='btn btn-outline-danger delete-item'>
            " . __('admin.delete') . "</a>";

                return $editBtn . $deleteBtn;
            })
            ->rawColumns(['action', 'photo'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Service $model): QueryBuilder
    {
        return $model->with('serviceGroup');
    }
}
