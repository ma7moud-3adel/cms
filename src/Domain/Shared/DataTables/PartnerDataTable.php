<?php

namespace Domain\Shared\DataTables;

use Domain\Shared\Models\Partner;
use Domain\Shared\Models\Slider;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class PartnerDataTable extends DataTable
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
            ->addColumn('title', function ($query) {
                return $query->title;
            })
            ->addColumn('photo', function ($query) {
                return $query->photo
                    ? '<img src="' . asset('storage/' . $query->photo) . '" width="50" alt="Blog Photo">'
                    : 'No Photo';
            })

            ->addColumn('action', function ($query) {
                $editBtn = "<a href='" . route('partner.edit', $query->id) . "' class='btn btn-outline-primary mx-1'>
            " . __('admin.edit') . "</a>";

                $deleteBtn = "<a href='" . route('partner.destroy', $query->id) . "' data-bs-toggle='modal' data-bs-target='#DeleteMedicalStaffModel" . $query->id . "' class='btn btn-outline-danger delete-item'>
            " . __('admin.delete') . "</a>";

                return $editBtn . $deleteBtn;
            })
            ->rawColumns(['action', 'photo'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Partner $model): QueryBuilder
    {
        return $model->newQuery();
    }
}
