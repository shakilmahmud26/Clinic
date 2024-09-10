
<?php $__env->startSection('title'); ?>
<?php echo e('Reagent Log'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="d-flex justify-content-between">
            <h5 class="card-header">Reagent Log</h5>
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
                        
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end ">
                        <form action="<?php echo e(route('patient.search')); ?>" class="d-flex mb-5 me-2">
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
                                <th class="sorting" tabindex="0" aria-controls="reagent-log-datatable" rowspan="1"
                                    colspan="1" aria-label="INSTRUMENT: activate to sort column ascending"
                                    style="width: 90px;">INSTRUMENT</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="reagent-log-datatable" rowspan="1"
                                    colspan="1" aria-label="TEST NAME: activate to sort column ascending"
                                    aria-sort="ascending" style="width: 72px;">TEST NAME</th>
                                <th class="dt-center sorting" tabindex="0" aria-controls="reagent-log-datatable"
                                    rowspan="1" colspan="1" aria-label="LOT NUMBER: activate to sort column ascending"
                                    style="width: 64px;">LOT NUMBER</th>
                                <th class="dt-center sorting" tabindex="0" aria-controls="reagent-log-datatable"
                                    rowspan="1" colspan="1"
                                    aria-label="TESTS PER KIT: activate to sort column ascending" style="width: 46px;">
                                    TESTS PER KIT</th>
                                <th class="dt-center sorting" tabindex="0" aria-controls="reagent-log-datatable"
                                    rowspan="1" colspan="1" aria-label="DATE OPENED: activate to sort column ascending"
                                    style="width: 62px;">DATE OPENED</th>
                                <th class="dt-center sorting" tabindex="0" aria-controls="reagent-log-datatable"
                                    rowspan="1" colspan="1" aria-label="EXPIRATION: activate to sort column ascending"
                                    style="width: 82px;">EXPIRATION</th>
                                <th class="dt-center sorting" tabindex="0" aria-controls="reagent-log-datatable"
                                    rowspan="1" colspan="1" aria-label="UNIT: activate to sort column ascending"
                                    style="width: 34px;">UNIT</th>
                                <th class="dt-right sorting" tabindex="0" aria-controls="reagent-log-datatable"
                                    rowspan="1" colspan="1"
                                    aria-label="REF. RANGE (FROM): activate to sort column ascending"
                                    style="width: 60px;">REF. RANGE (FROM)</th>
                                <th class="dt-right sorting" tabindex="0" aria-controls="reagent-log-datatable"
                                    rowspan="1" colspan="1"
                                    aria-label="REF. RANGE (TO): activate to sort column ascending"
                                    style="width: 55px;">REF. RANGE (TO)</th>
                                <th class="dt-right sorting" tabindex="0" aria-controls="reagent-log-datatable"
                                    rowspan="1" colspan="1"
                                    aria-label="PANIC VALUE (HIGH): activate to sort column ascending"
                                    style="width: 56px;">PANIC VALUE (HIGH)</th>
                                <th class="dt-right sorting" tabindex="0" aria-controls="reagent-log-datatable"
                                    rowspan="1" colspan="1"
                                    aria-label="PANIC VALUE (LOW): activate to sort column ascending"
                                    style="width: 55px;">PANIC VALUE (LOW)</th>
                                <th class="dt-center sorting_disabled" rowspan="1" colspan="1" aria-label="&amp;nbsp;"
                                    style="width: 120px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($items->isNotEmpty()): ?>
                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr role="row" class="odd">
                                <td>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editItemModal" class="edit-icon"
                                        data-item-id="<?php echo e($item->id); ?>" style="margin-right: 15px;">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteItemModal"
                                        data-item-id="<?php echo e($item->id); ?>"
                                        onclick="document.getElementById('ItemID').value = <?php echo e($item->id); ?>">
                                        <i class="bx bx-trash me-1"></i>
                                    </a>
                                </td>
                                <td><?php echo e($item->instrument); ?></td>
                                <td class="sorting_1"><?php echo e($item->test_name); ?></td>
                                <td class=" dt-center"><?php echo e($item->lot_number); ?></td>
                                <td class=" dt-center"><?php echo e($item->test_per_kit); ?></td>
                                <td class=" dt-center"><?php echo e($item->date_opened); ?></td>
                                <td class=" dt-center"><?php echo e($item->expiration); ?></td>
                                <td class=" dt-center"><?php echo e($item->unit); ?></td>
                                <td class=" dt-right"><?php echo e($item->reference_range_from); ?></td>
                                <td class=" dt-right"><?php echo e($item->reference_range_to); ?></td>
                                <td class=" dt-right"><?php echo e($item->panic_value_high); ?></td>
                                <td class=" dt-right"><?php echo e($item->panic_value_low); ?></td>
                                <td class=" dt-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editItemModal" class="edit-icon"
                                        data-item-id="<?php echo e($item->id); ?>" style="margin-right: 15px;">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteItemModal"
                                        data-item-id="<?php echo e($item->id); ?>"
                                        onclick="document.getElementById('ItemID').value = <?php echo e($item->id); ?>">
                                        <i class="bx bx-trash me-1"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <tr>
                                <td colspan="9" class="text-center">
                                    No data found
                                </td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <?php if($items->lastPage() > 1): ?>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                            <ul class="pagination">
                                <?php if($items->onFirstPage()): ?>
                                <li class="paginate_button page-item previous disabled"
                                    id="DataTables_Table_0_previous">
                                    <span aria-controls="DataTables_Table_0" aria-disabled="true" role="link"
                                        data-dt-idx="previous" tabindex="-1" class="page-link">
                                        Previous
                                    </span>
                                </li>
                                <?php else: ?>
                                <li class="paginate_button page-item previous" id="DataTables_Table_0_previous">
                                    <a href="<?php echo e($items->previousPageUrl()); ?>" aria-controls="DataTables_Table_0"
                                        aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1"
                                        class="page-link">
                                        Previous
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php $__currentLoopData = $items->getUrlRange(1, $items->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li
                                    class="paginate_button page-item <?php echo e($items->currentPage() === $page ? 'active' : ''); ?>">
                                    <a href="<?php echo e($url); ?>" aria-controls="DataTables_Table_0" role="link"
                                        aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">
                                        <?php echo e($page); ?>

                                    </a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php if($items->hasMorePages()): ?>
                                <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                                    <a href="<?php echo e($items->nextPageUrl()); ?>" aria-controls="DataTables_Table_0" role="link"
                                        data-dt-idx="next" tabindex="0" class="page-link">
                                        Next
                                    </a>
                                </li>
                                <?php else: ?>
                                <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                                    <span aria-controls="DataTables_Table_0" role="link" data-dt-idx="next" tabindex="0"
                                        class="page-link">
                                        Next
                                    </span>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
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
                    <form id="addForm" action="<?php echo e(route('log.reagent.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mt-3">
                                    <label for="instrument" class="form-label">Instrument </label>
                                    <input type="text" class="form-control" id="instrument" name="instrument"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('instrument')); ?>"
                                        required />
                                    <?php $__errorArgs = ['instrument'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="form-text text-danger">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mt-3">
                                    <label for="test_name" class="form-label">Test Name</label>
                                    <select class="form-select" id="test_name" aria-label="Default select example"
                                        name="test_name" required>
                                        <option value="" disabled <?php echo e(old('test_name') ? '' : 'selected'); ?>>
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
                                    <?php $__errorArgs = ['test_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="form-text text-danger">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mt-3">
                                    <label for="lot_number" class="form-label">Lot Number </label>
                                    <input type="text" class="form-control" id="lot_number" name="lot_number"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('lot_number')); ?>"
                                        required />
                                    <?php $__errorArgs = ['lot_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="form-text text-danger">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mt-3">
                                    <label for="test_per_kit" class="form-label">Test per kit </label>
                                    <input type="text" class="form-control" id="test_per_kit" name="test_per_kit"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('test_per_kit')); ?>" />
                                    <?php $__errorArgs = ['test_per_kit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="form-text text-danger">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mt-3">
                                    <label for="date_opened" class="form-label">Date Opened </label>
                                    <input type="date" class="form-control" id="date_opened" name="date_opened"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('date_opened')); ?>" />
                                    <?php $__errorArgs = ['date_opened'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="form-text text-danger">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mt-3">
                                    <label for="expiration" class="form-label">Expiration </label>
                                    <input type="date" class="form-control" id="expiration" name="expiration"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('expiration')); ?>" />
                                    <?php $__errorArgs = ['expiration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="form-text text-danger">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mt-3">
                                    <label for="unit" class="form-label">Unit </label>
                                    <input type="text" class="form-control" id="unit" name="unit"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('unit')); ?>" />
                                    <?php $__errorArgs = ['unit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="form-text text-danger">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="reference_range_from" class="form-label">Reference Range (From) </label>
                                    <input type="text" class="form-control" id="reference_range_from"
                                        name="reference_range_from" aria-describedby="defaultFormControlHelp"
                                        value="<?php echo e(old('reference_range_from')); ?>" />
                                    <?php $__errorArgs = ['reference_range_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="form-text text-danger">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="reference_range_to" class="form-label">Reference Range (To) </label>
                                    <input type="text" class="form-control" id="reference_range_to"
                                        name="reference_range_to" aria-describedby="defaultFormControlHelp"
                                        value="<?php echo e(old('reference_range_to')); ?>" />
                                    <?php $__errorArgs = ['reference_range_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="form-text text-danger">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="panic_value_high" class="form-label">Panic Value (High) </label>
                                    <input type="text" class="form-control" id="panic_value_high"
                                        name="panic_value_high" aria-describedby="defaultFormControlHelp"
                                        value="<?php echo e(old('panic_value_high')); ?>" />
                                    <?php $__errorArgs = ['panic_value_high'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="form-text text-danger">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="panic_value_low" class="form-label">Panic Value (Low) </label>
                                    <input type="text" class="form-control" id="panic_value_low" name="panic_value_low"
                                        aria-describedby="defaultFormControlHelp"
                                        value="<?php echo e(old('panic_value_low')); ?>" />
                                    <?php $__errorArgs = ['panic_value_low'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="form-text text-danger">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                        <form id="addForm" action="<?php echo e(route('log.reagent.update')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="text" name="id" id="edit_id" hidden>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mt-3">
                                        <label for="edit_instrument" class="form-label">Instrument </label>
                                        <input type="text" class="form-control" id="edit_instrument" name="instrument"
                                            aria-describedby="defaultFormControlHelp" value="<?php echo e(old('instrument')); ?>"
                                            required />
                                        <?php $__errorArgs = ['instrument'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="form-text text-danger">
                                            <?php echo e($message); ?>

                                        </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mt-3">
                                        <label for="edit_test_name" class="form-label">Test Name</label>
                                        <select class="form-select" id="edit_test_name" aria-label="Default select example"
                                            name="test_name" required>
                                            <option value="" disabled <?php echo e(old('test_name') ? '' : 'selected'); ?>>
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
                                        <?php $__errorArgs = ['test_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="form-text text-danger">
                                            <?php echo e($message); ?>

                                        </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mt-3">
                                        <label for="edit_lot_number" class="form-label">Lot Number </label>
                                        <input type="text" class="form-control" id="edit_lot_number" name="lot_number"
                                            aria-describedby="defaultFormControlHelp" value="<?php echo e(old('lot_number')); ?>"
                                            required />
                                        <?php $__errorArgs = ['lot_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="form-text text-danger">
                                            <?php echo e($message); ?>

                                        </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mt-3">
                                        <label for="edit_test_per_kit" class="form-label">Test per kit </label>
                                        <input type="text" class="form-control" id="edit_test_per_kit"
                                            name="test_per_kit" aria-describedby="defaultFormControlHelp"
                                            value="<?php echo e(old('test_per_kit')); ?>" />
                                        <?php $__errorArgs = ['test_per_kit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="form-text text-danger">
                                            <?php echo e($message); ?>

                                        </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mt-3">
                                        <label for="edit_date_opened" class="form-label">Date Opened </label>
                                        <input type="date" class="form-control" id="edit_date_opened" name="date_opened"
                                            aria-describedby="defaultFormControlHelp"
                                            value="<?php echo e(old('date_opened')); ?>" />
                                        <?php $__errorArgs = ['date_opened'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="form-text text-danger">
                                            <?php echo e($message); ?>

                                        </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mt-3">
                                        <label for="edit_expiration" class="form-label">Expiration </label>
                                        <input type="date" class="form-control" id="edit_expiration" name="expiration"
                                            aria-describedby="defaultFormControlHelp" value="<?php echo e(old('expiration')); ?>" />
                                        <?php $__errorArgs = ['expiration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="form-text text-danger">
                                            <?php echo e($message); ?>

                                        </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mt-3">
                                        <label for="edit_unit" class="form-label">Unit </label>
                                        <input type="text" class="form-control" id="edit_unit" name="unit"
                                            aria-describedby="defaultFormControlHelp" value="<?php echo e(old('unit')); ?>" />
                                        <?php $__errorArgs = ['unit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="form-text text-danger">
                                            <?php echo e($message); ?>

                                        </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="edit_reference_range_from" class="form-label">Reference Range (From)
                                        </label>
                                        <input type="text" class="form-control" id="edit_reference_range_from"
                                            name="reference_range_from" aria-describedby="defaultFormControlHelp"
                                            value="<?php echo e(old('reference_range_from')); ?>" />
                                        <?php $__errorArgs = ['reference_range_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="form-text text-danger">
                                            <?php echo e($message); ?>

                                        </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="edit_reference_range_to" class="form-label">Reference Range (To)
                                        </label>
                                        <input type="text" class="form-control" id="edit_reference_range_to"
                                            name="reference_range_to" aria-describedby="defaultFormControlHelp"
                                            value="<?php echo e(old('reference_range_to')); ?>" />
                                        <?php $__errorArgs = ['reference_range_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="form-text text-danger">
                                            <?php echo e($message); ?>

                                        </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="edit_panic_value_high" class="form-label">Panic Value (High)
                                        </label>
                                        <input type="text" class="form-control" id="edit_panic_value_high"
                                            name="panic_value_high" aria-describedby="defaultFormControlHelp"
                                            value="<?php echo e(old('panic_value_high')); ?>" />
                                        <?php $__errorArgs = ['panic_value_high'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="form-text text-danger">
                                            <?php echo e($message); ?>

                                        </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <label for="edit_panic_value_low" class="form-label">Panic Value (Low) </label>
                                        <input type="text" class="form-control" id="edit_panic_value_low"
                                            name="panic_value_low" aria-describedby="defaultFormControlHelp"
                                            value="<?php echo e(old('panic_value_low')); ?>" />
                                        <?php $__errorArgs = ['panic_value_low'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="form-text text-danger">
                                            <?php echo e($message); ?>

                                        </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                    <form id="deleteForm" action="<?php echo e(route('log.reagent.delete', ['id' => 0])); ?>" method="POST">
                        <?php echo csrf_field(); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<link rel="stylesheet"
    href="<?php echo e(asset('dashboard/global/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')); ?>" />
<link rel="stylesheet"
    href="<?php echo e(asset('dashboard/global/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')); ?>" />
<link rel="stylesheet"
    href="<?php echo e(asset('dashboard/global/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')); ?>" />
<link rel="stylesheet"
    href="<?php echo e(asset('dashboard/global/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('dashboard/global/assets/vendor/libs/flatpickr/flatpickr.css')); ?>" />
<!-- Row Group CSS -->
<link rel="stylesheet"
    href="<?php echo e(asset('dashboard/global/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('dashboard/global/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')); ?>"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
            const deleteLinks = document.querySelectorAll('.delete-item');

            deleteLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const itemId = this.dataset.itemId;
                    const form = document.querySelector('#deleteForm');
                    form.action = '<?php echo e(route('log.reagent.delete', ['id' => ''])); ?>/' + itemId;
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
                url: '/laboratory/log/reagent-edit/' + itemId, 
                method: 'GET',
                success: function(data) {
                    console.log(data);  
                    var selectedValue = data.test_name;
                    $('#edit_test_name option').each(function() {
                        if ($(this).val() === selectedValue) {
                            $(this).prop('selected', true);
                        } else {
                            $(this).prop('selected', false);
                        }
                    });
                    $('#edit_date_opened').val(data.date_opened); 
                    $('#edit_expiration').val(data.expiration); 
                    $('#edit_instrument').val(data.instrument); 
                    $('#edit_lot_number').val(data.lot_number); 
                    $('#edit_panic_value_high').val(data.panic_value_high); 
                    $('#edit_panic_value_low').val(data.panic_value_low); 
                    $('#edit_reference_range_from').val(data.reference_range_from); 
                    $('#edit_reference_range_to').val(data.reference_range_to); 
                    $('#edit_unit').val(data.unit);  
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\Sakil Ahmed\working\resources\views/pages/report/reagent-log.blade.php ENDPATH**/ ?>