<?php

namespace Domain\Admin\DataTables;


use Domain\Admin\Models\Admin;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class AdminDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($query) {
                $isSuperAdmin = $query->is_super_admin;


                $editBtn = "<a href='" . route('admin.edit', $query->id) . "' class='btn btn-outline-primary mx-3'>
        <svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-user-edit' width='24' height='24' viewBox='0 0 24 24' stroke-width='2' stroke='currentColor' fill='none' stroke-linecap='round' stroke-linejoin='round'>
            <path stroke='none' d='M0 0h24v24H0z' fill='none'></path>
            <path d='M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0'></path>
            <path d='M6 21v-2a4 4 0 0 1 4 -4h3.5'></path>
            <path d='M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z'></path>
        </svg>
        " . __('admin.edit') . "
    </a>";


                if (!$isSuperAdmin) {
                    $deleteBtn = "<a href='" . route('admin.destroy', $query->id) . "' data-bs-toggle='modal' data-bs-target='#DeleteMedicalStaffModel" . $query->id . "' class='btn btn-outline-danger delete-item'>
            <svg xmlns='http://www.w3.org/2000/svg' class='icon' width='16' height='16' viewBox='0 0 24 24' stroke-width='2' stroke='currentColor' fill='none' stroke-linecap='round' stroke-linejoin='round'>
                <path stroke='none' d='M0 0h24v24H0z' fill='none'/>
                <line x1='4' y1='7' x2='20' y2='7' />
                <line x1='10' y1='11' x2='10' y2='17' />
                <line x1='14' y1='11' x2='14' y2='17' />
                <path d='M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12' />
                <path d='M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3' />
            </svg>
            " . __('admin.delete') . "
        </a>";
                    return $editBtn . $deleteBtn;
                }

                return $editBtn;
            })
            ->addColumn('photo', function ($admin) {
                $photoUrl = $admin->photo ? asset('storage/' . $admin->photo) : asset('dashboard/img/000m.jpg');
                return '<img src="' . $photoUrl . '" alt="Admin Photo" style="width: 50px; height: 50px; border-radius: 50%">';
            })

            ->addColumn('status', function ($query) {
                $isSuperAdmin = $query->is_super_admin;


                if ($isSuperAdmin) {
                    $button = '<label class="form-check form-check-single form-switch">
                    <input type="checkbox" checked disabled class="form-check-input">
                    <span class="custom-switch-indicator"></span>
                   </label>';
                } else {
                    if ($query->status == 1) {
                        $button = '<label class="form-check form-check-single form-switch">
                        <input type="checkbox" checked name="custom-switch-checkbox" data-id="'.$query->id .'" class="form-check-input change-status">
                        <span class="custom-switch-indicator"></span>
                       </label>';
                    } else {
                        $button = '<label class="form-check form-check-single form-switch">
                        <input type="checkbox" name="custom-switch-checkbox" data-id="'.$query->id .'" class="form-check-input change-status">
                        <span class="custom-switch-indicator"></span>
                       </label>';
                    }
                }

                return $button;
            })

            ->rawColumns(['action', 'photo' , 'status'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Admin $model): QueryBuilder
    {
        return $model->newQuery();
    }


}
