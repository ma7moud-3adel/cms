@extends('dashboard.layout.app')
@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Categories
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="d-flex">
                        <a href="" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M12 5l0 14"/>
                                <path d="M5 12l14 0"/>
                            </svg>
                            New Category
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Categories</h3>
                </div>
                <div class="card-body border-bottom py-3">
                    <div class="d-flex">
                        <div class="text-secondary">
                            Show
                            <div class="mx-2 d-inline-block">
                                <input type="number" id="entries-input" min="1" step="1"
                                       class="form-control form-control-sm" value="8" size="3"
                                       aria-label="Entries count">
                            </div>
                            entries
                        </div>
                        <div class="ms-auto text-secondary">
                            Search:
                            <div class="ms-2 d-inline-block">
                                <input type="text" id="custom-search" class="form-control form-control-sm"
                                       aria-label="Search categories">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    {{ $dataTable->table(attributes: ['class' => 'table card-table table-vcenter text-nowrap']) }}
                </div>
            </div>
        </div>
    </div>

    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endsection

@section('libs-js')

@endsection

@section('js')

    <script>

        // Wait for the DataTable to be initialized
        document.addEventListener('DOMContentLoaded', function () {
            function ensureTableReady(callback, retries = 10) {
                if (window.LaravelDataTables && window.LaravelDataTables['category-table']) {
                    callback(window.LaravelDataTables['category-table']);
                } else if (retries > 0) {
                    setTimeout(() => ensureTableReady(callback, retries - 1), 500);
                } else {
                    console.error('Failed to initialize DataTable for "category-table".');
                }
            }

            ensureTableReady(function (table) {
                // Add custom search and entries length logic
                const entriesInput = document.getElementById('entries-input');
                if (entriesInput) {
                    entriesInput.addEventListener('change', function () {
                        const newLength = parseInt(this.value, 10);
                        if (!isNaN(newLength)) {
                            table.page.len(newLength).draw();
                        }
                    });
                }

                const searchInput = document.getElementById('custom-search');
                if (searchInput) {
                    searchInput.addEventListener('keyup', function () {
                        table.search(this.value).draw();
                    });
                }

                table.on('length.dt', function (e, settings, len) {
                    if (entriesInput) {
                        entriesInput.value = len;
                    }
                });
            });
        });

    </script>
@endsection
