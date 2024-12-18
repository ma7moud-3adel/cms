<?php

namespace Domain\Shared\DataTables;

use Domain\Shared\Models\City;
use Domain\Shared\Models\Government;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class CityDataTable extends DataTable
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
            ->addColumn('gov_name', function ($query) {
                return $query->government ? $query->government->name_en : 'N/A';
            })

            ->addColumn('action', function ($query) {
                $editBtn = "<a href='" . route('city.edit', $query->id) . "' class='btn btn-outline-primary mx-1'>
            " . __('admin.edit') . "</a>";

                $deleteBtn = "<a href='" . route('city.destroy', $query->id) . "' data-bs-toggle='modal' data-bs-target='#DeleteMedicalStaffModel" . $query->id . "' class='btn btn-outline-danger delete-item'>
            " . __('admin.delete') . "</a>";

                return $editBtn . $deleteBtn;
            })
            ->rawColumns(['action'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(City $model): QueryBuilder
    {
        return $model->newQuery();
    }
}
