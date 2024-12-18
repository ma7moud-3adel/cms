<?php

namespace Domain\Shared\DataTables;

use Domain\Shared\Models\Slider;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class SliderDataTable extends DataTable
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
            ->addColumn('image_en', function ($query) {
                return $query->image_en
                    ? '<img src="' . asset('storage/' . $query->image_en) . '" width="50" alt="Blog Photo">'
                    : 'No Photo';
            })
            ->addColumn('image_ar', function ($query) {
                return $query->image_ar
                    ? '<img src="' . asset('storage/' . $query->image_ar) . '" width="50" alt="Blog Photo">'
                    : 'No Photo';
            })

            ->addColumn('action', function ($query) {
                $editBtn = "<a href='" . route('slider.edit', $query->id) . "' class='btn btn-outline-primary mx-1'>
            " . __('admin.edit') . "</a>";

                $deleteBtn = "<a href='" . route('slider.destroy', $query->id) . "' data-bs-toggle='modal' data-bs-target='#DeleteMedicalStaffModel" . $query->id . "' class='btn btn-outline-danger delete-item'>
            " . __('admin.delete') . "</a>";

                return $editBtn . $deleteBtn;
            })
            ->rawColumns(['action', 'image_en', 'image_ar'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Slider $model): QueryBuilder
    {
        return $model->newQuery();
    }
}
