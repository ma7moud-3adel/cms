<?php

namespace Domain\Shared\DataTables;

use Domain\Shared\Models\Government;
use Domain\Shared\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class UserDataTable extends DataTable
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
            ->addColumn('name', function ($query) {
                return $query->name;
            })
            ->addColumn('email', function ($query) {
                return $query->email;
            })

            ->addColumn('action', function ($query) {

                $deleteBtn = "<a href='" . route('users.destroy', $query->id) . "' data-bs-toggle='modal' data-bs-target='#DeleteMedicalStaffModel" . $query->id . "' class='btn btn-outline-danger delete-item'>
            " . __('admin.delete') . "</a>";

                return $deleteBtn;
            })
            ->rawColumns(['action'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(User $model): QueryBuilder
    {
        return $model->newQuery();
    }
}
