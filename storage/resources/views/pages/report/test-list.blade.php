@extends('layouts.app')
@section('title')
{{ 'Test List' }}
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="d-flex justify-content-between">
            <h5 class="card-header">Test List</h5>
            <div class="d-flex">
                <a href="#"
                    style="background: #787bff; width: fit-content; height: fit-content; padding: 6px 20px; border-radius: 5px; color: #fff; margin-top: 1.5rem; margin-right: 1.5rem;"
                    data-bs-toggle="modal" data-bs-target="#addItemModal">Add new</a>
                <a href="#" style="background: #787bff;
                width: fit-content;
                height: fit-content;
                padding: 6px 20px;
                border-radius: 5px;
                color: #fff;
                margin-top: 1.5rem;
                margin-right: 1.5rem;">Download PDF</a>
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
                                    style="width: 129px;">Action</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="test-datatable" rowspan="1"
                                    colspan="1" aria-label="CATEGORY: activate to sort column ascending"
                                    style="width: 72px;" aria-sort="ascending">CATEGORY</th>
                                <th class="dt-center sorting" tabindex="0" aria-controls="test-datatable" rowspan="1"
                                    colspan="1" aria-label="CPT CODE: activate to sort column ascending"
                                    style="width: 38px;">CPT CODE</th>
                                <th class="dt-center sorting" tabindex="0" aria-controls="test-datatable" rowspan="1"
                                    colspan="1" aria-label="LOINC CODE: activate to sort column ascending"
                                    style="width: 43px;">LOINC CODE</th>
                                <th class="dt-center sorting" tabindex="0" aria-controls="test-datatable" rowspan="1"
                                    colspan="1" aria-label="CODE: activate to sort column ascending"
                                    style="width: 38px;">CODE</th>
                                <th class="sorting" tabindex="0" aria-controls="test-datatable" rowspan="1" colspan="1"
                                    aria-label="TEST NAME/DESCRIPTION: activate to sort column ascending"
                                    style="width: 137px;">TEST NAME/DESCRIPTION</th>
                                <th class="sorting" tabindex="0" aria-controls="test-datatable" rowspan="1" colspan="1"
                                    aria-label="TEST GROUP: activate to sort column ascending" style="width: 57px;">TEST
                                    GROUP</th>
                                <th class="dt-center sorting" tabindex="0" aria-controls="test-datatable" rowspan="1"
                                    colspan="1" aria-label="SHORT NAME: activate to sort column ascending"
                                    style="width: 46px;">SHORT NAME</th>
                                <th class="sorting" tabindex="0" aria-controls="test-datatable" rowspan="1" colspan="1"
                                    aria-label="SAMPLE TYPE: activate to sort column ascending" style="width: 54px;">
                                    SAMPLE TYPE</th>
                                <th class="sorting" tabindex="0" aria-controls="test-datatable" rowspan="1" colspan="1"
                                    aria-label="SORT ORDER: activate to sort column ascending" style="width: 47px;">SORT
                                    ORDER</th>
                                <th class="dt-right sorting" tabindex="0" aria-controls="test-datatable" rowspan="1"
                                    colspan="1" aria-label="PRICE A: activate to sort column ascending"
                                    style="width: 39px;">PRICE A</th>
                                <th class="dt-right sorting" tabindex="0" aria-controls="test-datatable" rowspan="1"
                                    colspan="1" aria-label="PRICE B: activate to sort column ascending"
                                    style="width: 39px;">PRICE B</th>
                                <th class="dt-right sorting" tabindex="0" aria-controls="test-datatable" rowspan="1"
                                    colspan="1" aria-label="PRICE C: activate to sort column ascending"
                                    style="width: 39px;">PRICE C</th>
                                <th class="dt-right sorting" tabindex="0" aria-controls="test-datatable" rowspan="1"
                                    colspan="1" aria-label="PRICE D: activate to sort column ascending"
                                    style="width: 39px;">PRICE D</th>
                                <th class="dt-center sorting_disabled" rowspan="1" colspan="1" aria-label="&amp;nbsp;"
                                    style="width: 129px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($items->isNotEmpty())
                            @foreach ($items as $item)
                            <tr role="row" class="odd">
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
                                <td class="sorting_1">{{ $item->category }}</td>
                                <td class=" dt-center">{{ $item->cpt_code }}</td>
                                <td class=" dt-center">{{ $item->lonic_code }}</td>
                                <td class=" dt-center">{{ $item->code }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->test_group }}</td>
                                <td class=" dt-center">{{ $item->short_name }}</td>
                                <td>{{ $item->sample_type }}</td>
                                <td>{{ $item->display_order }}</td>
                                <td class=" dt-right">{{ $item->price_a }}</td>
                                <td class=" dt-right">{{ $item->price_b }}</td>
                                <td class=" dt-right">{{ $item->price_c }}</td>
                                <td class=" dt-right">{{ $item->price_d }}</td>
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
                                @if ($item->onFirstPage())
                                <li class="paginate_button page-item previous disabled"
                                    id="DataTables_Table_0_previous">
                                    <span aria-controls="DataTables_Table_0" aria-disabled="true" role="link"
                                        data-dt-idx="previous" tabindex="-1" class="page-link">
                                        Previous
                                    </span>
                                </li>
                                @else
                                <li class="paginate_button page-item previous" id="DataTables_Table_0_previous">
                                    <a href="{{ $item->previousPageUrl() }}" aria-controls="DataTables_Table_0"
                                        aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1"
                                        class="page-link">
                                        Previous
                                    </a>
                                </li>
                                @endif
                                @foreach ($item->getUrlRange(1, $item->lastPage()) as $page => $url)
                                <li
                                    class="paginate_button page-item {{ $item->currentPage() === $page ? 'active' : '' }}">
                                    <a href="{{ $url }}" aria-controls="DataTables_Table_0" role="link"
                                        aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">
                                        {{ $page }}
                                    </a>
                                </li>
                                @endforeach
                                @if ($item->hasMorePages())
                                <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                                    <a href="{{ $item->nextPageUrl() }}" aria-controls="DataTables_Table_0" role="link"
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
                    <form id="addForm" action="{{route('report.test-store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="category" class="form-label">Category </label>
                                    <select class="form-select" id="category" aria-label="Default select example"
                                        name="category">
                                        <option value="" disabled {{ old('category') ? '' : 'selected' }}>
                                            select
                                        </option>
                                        <option value="CHEMISTRY">CHEMISTRY</option>
                                        <option value="SPECIAL CHEMISTRY">SPECIAL CHEMISTRY</option>
                                        <option value="HEMATOLOGY">HEMATOLOGY</option>
                                        <option value="COAGULATION">COAGULATION</option>
                                        <option value="URINALYSIS">URINALYSIS</option>
                                        <option value="MICROBIOLOGY">MICROBIOLOGY</option>
                                        <option value="VIROLOGY">VIROLOGY</option>
                                        <option value="TOXICOLOGY">TOXICOLOGY</option>
                                        <option value="OTHER TESTS">OTHER TESTS</option>
                                        <option value="MISCELLANEOUS">MISCELLANEOUS</option>
                                    </select>
                                    @error('category')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="cpt_code" class="form-label">CPT Code</label>
                                    <input type="text" class="form-control" id="cpt_code" name="cpt_code"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('cpt_code') }}" />
                                    @error('cpt_code')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="lonic_code" class="form-label">LOINC Code</label>
                                    <input type="text" class="form-control" id="lonic_code" name="lonic_code"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('lonic_code') }}" />
                                    @error('lonic_code')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="code" class="form-label">Code</label>
                                    <input type="text" class="form-control" id="code" name="code"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('code') }}" />
                                    @error('code')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('name') }}" />
                                    @error('name')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="short_name" class="form-label">Short Name</label>
                                    <input type="text" class="form-control" id="short_name" name="short_name"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('short_name') }}" />
                                    @error('short_name')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="test_group" class="form-label">Test Group </label>
                                    <select class="form-select" id="test_group" aria-label="Default select example"
                                        name="test_group">
                                        <option value="" disabled {{ old('test_group') ? '' : 'selected' }}>
                                            select
                                        </option>
                                        <option value="AMA PANEL">AMA PANEL</option>
                                        <option value="CHEMISTRY">CHEMISTRY</option>
                                        <option value="COAGULATION">COAGULATION</option>
                                        <option value="HEMATOLOGY">HEMATOLOGY</option>
                                        <option value="SPECIAL CHEMISTRY">SPECIAL CHEMISTRY</option>
                                        <option value="MICROBIOLOGY">MICROBIOLOGY</option>
                                        <option value="VIROLOGY">VIROLOGY</option>
                                        <option value="TOXICOLOGY">TOXICOLOGY</option>
                                        <option value="">OTHER TESTS</option>
                                    </select>
                                    @error('test_group')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="sample_type" class="form-label">Sample Type </label>
                                    <select class="form-select" id="sample_type" aria-label="Default select example"
                                        name="sample_type">
                                        <option value="" disabled {{ old('sample_type') ? '' : 'selected' }}>
                                            select
                                        </option>
                                        <option value="Amniotic">Amniotic</option>
                                        <option value="Blood">Blood</option>
                                        <option value="Cervical">Cervical</option>
                                        <option value="CSF">CSF</option>
                                        <option value="Plasma">Plasma</option>
                                        <option value="Ratio">Ratio</option>
                                        <option value="Saliva">Saliva</option>
                                        <option value="Serum">Serum</option>
                                        <option value="Synovial">Synovial</option>
                                        <option value="Urethral">Urethral</option>
                                        <option value="Urine">Urine</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    @error('sample_type')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mt-3">
                                    <label for="display_order" class="form-label">Display Order</label>
                                    <input type="text" class="form-control" id="display_order" name="display_order"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('display_order') }}" />
                                    @error('display_order')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="price_a" class="form-label">Price A</label>
                                    <input type="text" class="form-control" id="price_a" name="price_a"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('price_a') }}" />
                                    @error('price_a')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="price_b" class="form-label">Price B</label>
                                    <input type="text" class="form-control" id="price_b" name="price_b"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('price_b') }}" />
                                    @error('price_b')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="price_c" class="form-label">Price C</label>
                                    <input type="text" class="form-control" id="price_c" name="price_c"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('price_c') }}" />
                                    @error('price_c')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="price_d" class="form-label">Price D</label>
                                    <input type="text" class="form-control" id="price_d" name="price_d"
                                        aria-describedby="defaultFormControlHelp" value="{{ old('price_d') }}" />
                                    @error('price_d')
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
                        <form id="addForm" action="{{route('report.test-update')}}" method="POST">
                            @csrf
                            <input type="text" id="edit_id" name="id">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="edit_category" class="form-label">Category </label>
                                        <select class="form-select" id="edit_category"
                                            aria-label="Default select example" name="category">
                                            <option value="" disabled {{ old('category') ? '' : 'selected' }}>
                                                select
                                            </option>
                                            <option value="CHEMISTRY">CHEMISTRY</option>
                                            <option value="SPECIAL CHEMISTRY">SPECIAL CHEMISTRY</option>
                                            <option value="HEMATOLOGY">HEMATOLOGY</option>
                                            <option value="COAGULATION">COAGULATION</option>
                                            <option value="URINALYSIS">URINALYSIS</option>
                                            <option value="MICROBIOLOGY">MICROBIOLOGY</option>
                                            <option value="VIROLOGY">VIROLOGY</option>
                                            <option value="TOXICOLOGY">TOXICOLOGY</option>
                                            <option value="OTHER TESTS">OTHER TESTS</option>
                                            <option value="MISCELLANEOUS">MISCELLANEOUS</option>
                                        </select>
                                        @error('category')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="edit_cpt_code" class="form-label">CPT Code</label>
                                        <input type="text" class="form-control" id="edit_cpt_code" name="cpt_code"
                                            aria-describedby="defaultFormControlHelp" value="{{ old('cpt_code') }}" />
                                        @error('cpt_code')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="edit_lonic_code" class="form-label">LOINC Code</label>
                                        <input type="text" class="form-control" id="edit_lonic_code" name="lonic_code"
                                            aria-describedby="defaultFormControlHelp" value="{{ old('lonic_code') }}" />
                                        @error('lonic_code')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="edit_code" class="form-label">Code</label>
                                        <input type="text" class="form-control" id="edit_code" name="code"
                                            aria-describedby="defaultFormControlHelp" value="{{ old('code') }}" />
                                        @error('code')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="edit_name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="edit_name" name="name"
                                            aria-describedby="defaultFormControlHelp" value="{{ old('name') }}" />
                                        @error('name')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="edit_short_name" class="form-label">Short Name</label>
                                        <input type="text" class="form-control" id="edit_short_name" name="short_name"
                                            aria-describedby="defaultFormControlHelp" value="{{ old('short_name') }}" />
                                        @error('short_name')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="edit_test_group" class="form-label">Test Group </label>
                                        <select class="form-select" id="edit_test_group"
                                            aria-label="Default select example" name="test_group">
                                            <option value="" disabled {{ old('test_group') ? '' : 'selected' }}>
                                                select
                                            </option>
                                            <option value="AMA PANEL">AMA PANEL</option>
                                            <option value="CHEMISTRY">CHEMISTRY</option>
                                            <option value="COAGULATION">COAGULATION</option>
                                            <option value="HEMATOLOGY">HEMATOLOGY</option>
                                            <option value="SPECIAL CHEMISTRY">SPECIAL CHEMISTRY</option>
                                            <option value="MICROBIOLOGY">MICROBIOLOGY</option>
                                            <option value="VIROLOGY">VIROLOGY</option>
                                            <option value="TOXICOLOGY">TOXICOLOGY</option>
                                            <option value="">OTHER TESTS</option>
                                        </select>
                                        @error('test_group')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="edit_sample_type" class="form-label">Sample Type </label>
                                        <select class="form-select" id="edit_sample_type"
                                            aria-label="Default select example" name="sample_type">
                                            <option value="" disabled {{ old('sample_type') ? '' : 'selected' }}>
                                                select
                                            </option>
                                            <option value="Amniotic">Amniotic</option>
                                            <option value="Blood">Blood</option>
                                            <option value="Cervical">Cervical</option>
                                            <option value="CSF">CSF</option>
                                            <option value="Plasma">Plasma</option>
                                            <option value="Ratio">Ratio</option>
                                            <option value="Saliva">Saliva</option>
                                            <option value="Serum">Serum</option>
                                            <option value="Synovial">Synovial</option>
                                            <option value="Urethral">Urethral</option>
                                            <option value="Urine">Urine</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        @error('sample_type')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mt-3">
                                        <label for="edit_display_order" class="form-label">Display Order</label>
                                        <input type="text" class="form-control" id="edit_display_order"
                                            name="display_order" aria-describedby="defaultFormControlHelp"
                                            value="{{ old('display_order') }}" />
                                        @error('display_order')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="edit_price_a" class="form-label">Price A</label>
                                        <input type="text" class="form-control" id="edit_price_a" name="price_a"
                                            aria-describedby="defaultFormControlHelp" value="{{ old('price_a') }}" />
                                        @error('price_a')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="edit_price_b" class="form-label">Price B</label>
                                        <input type="text" class="form-control" id="edit_price_b" name="price_b"
                                            aria-describedby="defaultFormControlHelp" value="{{ old('price_b') }}" />
                                        @error('price_b')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="edit_price_c" class="form-label">Price C</label>
                                        <input type="text" class="form-control" id="edit_price_c" name="price_c"
                                            aria-describedby="defaultFormControlHelp" value="{{ old('price_c') }}" />
                                        @error('price_c')
                                        <div class="form-text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="edit_price_d" class="form-label">Price D</label>
                                        <input type="text" class="form-control" id="edit_price_d" name="price_d"
                                            aria-describedby="defaultFormControlHelp" value="{{ old('price_d') }}" />
                                        @error('price_d')
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
                    <form id="deleteForm" action="{{ route('report.test-delete', ['id' => 0]) }}" method="POST">
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
    href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
<link rel="stylesheet"
    href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
<link rel="stylesheet"
    href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />
<link rel="stylesheet"
    href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
<!-- Row Group CSS -->
<link rel="stylesheet"
    href="{{ asset('assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css') }}" />
<style>
    .modal-80-scrollable-center .modal-dialog {
        max-width: 80%;
        margin: auto;
    }

    .modal-80-scrollable-center .modal-content {
        height: 95vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin: 30px 0;
    }

    .modal-80-scrollable-center .modal-body {
        overflow-y: auto;
        flex-grow: 1;
    }

    .note-info {
        border-color: #57b5e3;
    }

    .note {
        margin: 0 0 20px 0;
        padding: 15px 30px 15px 15px;
        border-left: 5px solid #57b5e3;
        border-radius: 0px 4px 4px 0;
    }

    .required {
        color: #e02222;
        font-size: 12px;
        padding-left: 2px;
    }
</style>

@endsection

@section('scripts')
<script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
            const deleteLinks = document.querySelectorAll('.delete-item');

            deleteLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const itemId = this.dataset.itemId;
                    const form = document.querySelector('#deleteForm');
                    form.action = '{{ route('report.test-delete', ['id' => '']) }}/' + itemId;
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
                url: '/laboratory/report/test-edit/' + itemId, 
                method: 'GET',
                success: function(data) {
                    console.log(data);  
                    var selectedValue1 = data.category;
                    $('#edit_category option').each(function() {
                        if ($(this).val() === selectedValue1) {
                            $(this).prop('selected', true);
                        } else {
                            $(this).prop('selected', false);
                        }
                    });
                    var selectedValue2 = data.sample_type;
                    $('#edit_sample_type option').each(function() {
                        if ($(this).val() === selectedValue2) {
                            $(this).prop('selected', true);
                        } else {
                            $(this).prop('selected', false);
                        }
                    });
                    var selectedValue3 = data.test_group;
                    $('#edit_test_group option').each(function() {
                        if ($(this).val() === selectedValue3) {
                            $(this).prop('selected', true);
                        } else {
                            $(this).prop('selected', false);
                        }
                    });
                    $('#edit_code').val(data.code); 
                    $('#edit_cpt_code').val(data.cpt_code); 
                    $('#edit_display_order').val(data.display_order); 
                    $('#edit_lonic_code').val(data.lonic_code); 
                    $('#edit_name').val(data.name); 
                    $('#edit_price_a').val(data.price_a); 
                    $('#edit_price_b').val(data.price_b); 
                    $('#edit_price_c').val(data.price_c); 
                    $('#edit_price_d').val(data.price_d); 
                    $('#edit_short_name').val(data.short_name); 
                    $('#edit_id').val(data.id); 

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