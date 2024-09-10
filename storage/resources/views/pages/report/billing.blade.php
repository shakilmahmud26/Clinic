@extends('layouts.app')
@section('title')
{{ 'Billing Report' }}
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="d-flex justify-content-between">
            <h5 class="card-header">Billing Report</h5>
            <a href="#" style="background: #787bff;
                width: fit-content;
                height: fit-content;
                padding: 6px 20px;
                border-radius: 5px;
                color: #fff;
                margin-top: 1.5rem;
                margin-right: 1.5rem;">Download PDF</a>
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
                            <tr>
                                <th>PATIENTS NAME</th>
                                <th class="dt-center">ACCESSIONS NO.</th>
                                <th class="dt-center">BIRTHDAY</th>
                                <th class="dt-center">ADDRESS</th>
                                <th class="dt-center">ZIP+4</th>
                                <th class="dt-center">SS NO.</th>
                                <th class="dt-center">REFERRING PHYSICIANS</th>
                                <th class="dt-center">NPI NO.</th>
                                <th class="dt-center">PAYOR</th>
                                <th class="dt-center">ID NO.</th>
                                <th class="dt-center">TESTS</th>
                                <th class="dt-center">DATE SERVICED</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>KONALYAN, TIGRAN</td>
                                <td class="dt-center">137772</td>
                                <td class="dt-center">03/17/1943</td>
                                <td>5045 HARRISON DR APT 154, LAS VEGAS, NV 89120</td>
                                <td class="dt-center">1064</td>
                                <td class="dt-center"></td>
                                <td>PONCIA REED</td>
                                <td class="dt-center">1821498213</td>
                                <td class="dt-center">Medicare</td>
                                <td class="dt-center">5A85CK2WT91</td>
                                <td>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="20%" class="dt-center">CPT Code</th>
                                                <th width="40%">Test Name</th>
                                                <th width="20%" class="dt-center">ICD 10 Code</th>
                                                <th width="20%" class="dt-right">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="dt-center">36415</td>
                                                <td>DRAW FEE</td>
                                                <td class="dt-right"></td>
                                                <td class="dt-right">$3.00</td>
                                            </tr>
                                            <tr>
                                                <td class="dt-center">P9604</td>
                                                <td>Travel Fee</td>
                                                <td class="dt-right"></td>
                                                <td class="dt-right">$20.60</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Total</th>
                                                <th></th>
                                                <th></th>
                                                <th class="dt-right">$23.60</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </td>
                                <td class="dt-center">03/30/2024</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- @if ($blogs->lastPage() > 1)
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                            <ul class="pagination">
                                @if ($blogs->onFirstPage())
                                <li class="paginate_button page-item previous disabled"
                                    id="DataTables_Table_0_previous">
                                    <span aria-controls="DataTables_Table_0" aria-disabled="true" role="link"
                                        data-dt-idx="previous" tabindex="-1" class="page-link">
                                        Previous
                                    </span>
                                </li>
                                @else
                                <li class="paginate_button page-item previous" id="DataTables_Table_0_previous">
                                    <a href="{{ $blogs->previousPageUrl() }}" aria-controls="DataTables_Table_0"
                                        aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1"
                                        class="page-link">
                                        Previous
                                    </a>
                                </li>
                                @endif
                                @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                <li
                                    class="paginate_button page-item {{ $blogs->currentPage() === $page ? 'active' : '' }}">
                                    <a href="{{ $url }}" aria-controls="DataTables_Table_0" role="link"
                                        aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">
                                        {{ $page }}
                                    </a>
                                </li>
                                @endforeach
                                @if ($blogs->hasMorePages())
                                <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                                    <a href="{{ $blogs->nextPageUrl() }}" aria-controls="DataTables_Table_0" role="link"
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
                @endif --}}
            </div>
        </div>
    </div>

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
                    <form id="deleteForm" action="{{ route('physician.delete', ['id' => 0]) }}" method="POST">
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
@endsection

@section('scripts')
<script src="{{ asset('dashboard/global/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
            const deleteLinks = document.querySelectorAll('.delete-item');

            deleteLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const itemId = this.dataset.itemId;
                    const form = document.querySelector('#deleteForm');
                    form.action = '{{ route('physician.delete', ['id' => '']) }}/' + itemId;
                });
            });
        });
</script>
@endsection