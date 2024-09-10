@extends('layouts.app')
@section('title')
{{ 'Daily QC' }}
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="d-flex justify-content-between">
            <h5 class="card-header">Daily QC</h5>
            <div class="d-flex">
                <a href="#"
                    style="background: #787bff; width: fit-content; height: fit-content; padding: 6px 20px; border-radius: 5px; color: #fff; margin-top: 1.5rem; margin-right: 1.5rem;"
                    data-bs-toggle="modal" data-bs-target="#addItemModal">Add new</a>
            </div>
        </div>
        <div class="card-datatable text-nowrap">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        {{-- <div class="dataTables_length" id="DataTables_Table_0_length">
                            <label>Show
                                <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                    class="form-select">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> entries
                            </label>
                        </div> --}}
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end ">
                        <form action="{{ route('patient.search') }}" class="d-flex mb-5 me-2">
                            <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                <label>Search:
                                    <input type="search" class="form-control" placeholder=""
                                        aria-controls="DataTables_Table_0" required name="search">
                                </label>
                                <button style="background: transparent; border:none; height:100%;">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="datatables-ajax table table-bordered dataTable no-footer" id="DataTables_Table_0"
                        aria-describedby="DataTables_Table_0_info" style="width: 1390px;">
                        <thead>
                            <tr role="row">
                                <th class="dt-center sorting_disabled" rowspan="1" colspan="1" aria-label="&amp;nbsp;"
                                    style="width: 120px;">Action</th>
                                <th class="sorting" tabindex="0" aria-controls="dailyqc-datatable" rowspan="1"
                                    colspan="1" aria-label="INSTRUMENT: activate to sort column ascending"
                                    style="width: 90px;">INSTRUMENT</th>
                                <th class="sorting" tabindex="0" aria-controls="dailyqc-datatable" rowspan="1"
                                    colspan="1" aria-label="RUN NO.: activate to sort column ascending"
                                    style="width: 30px;">RUN NO.</th>
                                <th class="dt-center sorting_asc" tabindex="0" aria-controls="dailyqc-datatable"
                                    rowspan="1" colspan="1" aria-label="DATE/TIME: activate to sort column ascending"
                                    aria-sort="ascending" style="width: 128px;">DATE/TIME</th>
                                <th class="dt-center sorting" tabindex="0" aria-controls="dailyqc-datatable" rowspan="1"
                                    colspan="1" aria-label="PERFORMED BY: activate to sort column ascending"
                                    style="width: 129px;">PERFORMED BY</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="TESTS"
                                    style="width: 457px;">TESTS</th>
                                <th class="dt-center sorting_disabled" rowspan="1" colspan="1" aria-label="&amp;nbsp;"
                                    style="width: 120px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($items->isNotEmpty())
                            @foreach ($items as $item)
                            <tr role="row" class="odd">
                                <td>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editItemModal" class="edit-icon"
                                        data-item-id="{{ $item->id }}" style="margin-right: 15px;">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteItemModal"
                                        data-item-id="{{ $item->id }}"
                                        onclick="document.getElementById('ItemID').value = {{ $item->id }}">
                                        <i class="bx bx-trash me-1"></i>
                                    </a>
                                </td>
                                <td>{{$item->instrument}}</td>
                                <td class="sorting_1">{{$item->run_no}}</td>
                                <td class="sorting_1">{{$item->run_date_time}}</td>
                                <td class=" dt-center">{{$item->performed_by}}</td>
                                <td class=" dt-center">{{ implode(', ', $item->tests) }}</td>
                                <td class=" dt-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editItemModal" class="edit-icon"
                                        data-item-id="{{ $item->id }}" style="margin-right: 15px;">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteItemModal"
                                        data-item-id="{{ $item->id }}"
                                        onclick="document.getElementById('ItemID').value = {{ $item->id }}">
                                        <i class="bx bx-trash me-1"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="9" class="text-center">
                                    No data found
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                @if ($items->lastPage() > 1)
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                            <ul class="pagination">
                                @if ($items->onFirstPage())
                                <li class="paginate_button page-item previous disabled"
                                    id="DataTables_Table_0_previous">
                                    <span aria-controls="DataTables_Table_0" aria-disabled="true" role="link"
                                        data-dt-idx="previous" tabindex="-1" class="page-link">
                                        Previous
                                    </span>
                                </li>
                                @else
                                <li class="paginate_button page-item previous" id="DataTables_Table_0_previous">
                                    <a href="{{ $items->previousPageUrl() }}" aria-controls="DataTables_Table_0"
                                        aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1"
                                        class="page-link">
                                        Previous
                                    </a>
                                </li>
                                @endif
                                @foreach ($items->getUrlRange(1, $items->lastPage()) as $page => $url)
                                <li
                                    class="paginate_button page-item {{ $items->currentPage() === $page ? 'active' : '' }}">
                                    <a href="{{ $url }}" aria-controls="DataTables_Table_0" role="link"
                                        aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">
                                        {{ $page }}
                                    </a>
                                </li>
                                @endforeach
                                @if ($items->hasMorePages())
                                <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                                    <a href="{{ $items->nextPageUrl() }}" aria-controls="DataTables_Table_0" role="link"
                                        data-dt-idx="next" tabindex="0" class="page-link">
                                        Next
                                    </a>
                                </li>
                                @else
                                <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                                    <span aria-controls="DataTables_Table_0" role="link" data-dt-idx="next" tabindex="0"
                                        class="page-link">
                                        Next
                                    </span>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Add Card Modal -->
    <div class="modal fade modal-80-scrollable-center" id="addItemModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h3>Add New</h3>
                    </div>
                    <form id="addForm" action="{{route('qc.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="instrument" class="form-label">Instrument </label>
                                    <input type="text" class="form-control" id="instrument" name="instrument"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('instrument') }}"
                                        required />
                                    @error('instrument')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="run_no" class="form-label">Run no </label>
                                    <input type="text" class="form-control" id="run_no" name="run_no"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('run_no') }}"
                                        required />
                                    @error('run_no')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="run_date_time" class="form-label">Run Date/Rime </label>
                                    <input type="datetime-local" class="form-control" id="run_date_time"
                                        name="run_date_time" aria-describedby="defaultFormControlHelp"
                                        value="{{ old('run_date_time') }}" />
                                    @error('run_date_time')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="performed_by" class="form-label">Performed by </label>
                                    <input type="text" class="form-control" id="performed_by" name="performed_by"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('performed_by') }}" />
                                    @error('performed_by')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mt-3">
                                    <label for="tests" class="form-label">Select Test </label>
                                    <select id="select2Multiple" class="select2 form-select" multiple name="tests[]">
                                        @foreach ($tests as $test)
                                        <option value="{{$test->name}}">{{$test->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('tests')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1 mt-3">
                                Submit
                            </button>
                            <button type="button" class="btn btn-label-secondary btn-reset mt-3" data-bs-dismiss="modal"
                                aria-label="Close">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Add Card Modal -->

    <!-- Edit Card Modal -->
    <div class="modal fade modal-80-scrollable-center" id="editItemModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h3>Edit Item</h3>
                        <form id="addForm" action="{{route('qc.update')}}" method="POST">
                            @csrf
                            <input type="text" name="id" id="edit_id" hidden>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="edit_instrument" class="form-label">Instrument </label>
                                        <input type="text" class="form-control" id="edit_instrument"
                                            name="edit_instrument" aria-describedby="defaultFormControlHelp"
                                            value="{{ old('instrument') }}" required />
                                        @error('instrument')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="edit_run_no" class="form-label">Run no </label>
                                        <input type="text" class="form-control" id="edit_run_no" name="run_no"
                                            aria-describedby="defaultFormControlHelp" value="{{ old('run_no') }}"
                                            required />
                                        @error('run_no')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="edit_run_date_time" class="form-label">Run Date/Rime </label>
                                        <input type="datetime-local" class="form-control" id="edit_run_date_time"
                                            name="run_date_time" aria-describedby="defaultFormControlHelp"
                                            value="{{ old('run_date_time') }}" />
                                        @error('run_date_time')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="edit_performed_by" class="form-label">Performed by </label>
                                        <input type="text" class="form-control" id="edit_performed_by"
                                            name="performed_by" aria-describedby="defaultFormControlHelp"
                                            value="{{ old('performed_by') }}" />
                                        @error('performed_by')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mt-3">
                                        <label for="edit_select2Multiple" class="form-label">Select Test </label>
                                        <select id="select2EditMultiple" class="select2 form-select" multiple
                                            name="tests[]">
                                            @foreach ($tests as $test)
                                            <option value="{{$test->name}}">{{$test->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('tests')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1 mt-3">
                                    Submit
                                </button>
                                <button type="button" class="btn btn-label-secondary btn-reset mt-3"
                                    data-bs-dismiss="modal" aria-label="Close">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Edit Card Modal -->

    <!-- Delete Card Modal -->
    <div class="modal fade" id="deleteItemModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
            <div class="modal-content p-3 p-md-5">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center mb-4">
                        <h3>Delete item</h3>
                        <p>Do you want to delete this item?</p>
                    </div>
                    <form id="deleteForm" action="{{ route('qc.delete', ['id' => 0]) }}" method="POST">
                        @csrf
                        <input type="hidden" name="ItemID" id="ItemID">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-danger me-sm-3 me-1 mt-3">
                                Delete
                            </button>
                            <button type="button" class="btn btn-label-secondary btn-reset mt-3" data-bs-dismiss="modal"
                                aria-label="Close">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Delete Card Modal -->
</div>
@endsection

@section('style')
<link rel="stylesheet"
    href="{{ asset('dashboard/global/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
<link rel="stylesheet"
    href="{{ asset('dashboard/global/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
<link rel="stylesheet"
    href="{{ asset('dashboard/global/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />
<link rel="stylesheet"
    href="{{ asset('dashboard/global/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
<link rel="stylesheet" href="{{ asset('dashboard/global/assets/vendor/libs/flatpickr/flatpickr.css') }}" />
<!-- Row Group CSS -->
<link rel="stylesheet"
    href="{{ asset('dashboard/global/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css') }}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
@endsection

@section('scripts')
<script src="{{ asset('dashboard/global/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/js/forms-selects.js')}}"></script>

<script>
    $(document).ready(function() {
    // Initialize Select2 in the add modal
    $('#addItemModal').on('shown.bs.modal', function() {
        $('#select2AddMultiple').select2({
            dropdownParent: $('#addItemModal')
        });
    });

    // Initialize Select2 in the edit modal
    $('#editItemModal').on('shown.bs.modal', function() {
        $('#select2EditMultiple').select2({
            dropdownParent: $('#editItemModal')
        });
    });
});

    document.addEventListener('DOMContentLoaded', function() {
            const deleteLinks = document.querySelectorAll('.delete-item');

            deleteLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const itemId = this.dataset.itemId;
                    const form = document.querySelector('#deleteForm');
                    form.action = '{{ route('qc.delete', ['id' => '']) }}/' + itemId;
                });
            });
        });

        $(document).ready(function() {
            // Attach click event to all edit icons (assuming class 'edit-icon')
            $('.edit-icon').click(function(event) {
                event.preventDefault(); // Prevent default link behavior

                // Get the item ID from the data-item-id attribute
                var itemId = $(this).data('item-id');
                // alert(itemId)

                // Use AJAX to fetch item data based on ID
                $.ajax({
                url: '/laboratory/qc/edit/' + itemId, 
                method: 'GET',
                success: function(data) {
                    console.log(data);  
                    $('#edit_instrument').val(data.instrument); 
                    $('#edit_run_no').val(data.run_no); 
                    $('#edit_run_date_time').val(data.run_date_time); 
                    $('#edit_performed_by').val(data.performed_by); 
                    $('#edit_id').val(data.id); 
                    $('#select2EditMultiple').val(data.tests); 
                
                    // Open the edit modal
                    $('#editItemModal').modal('show');
                },
                error: function(error) {
                    console.log("Error fetching item data:", error);
                    // Handle any errors gracefully (e.g., display an error message)
                }
                });
            });
        });
</script>
@endsection