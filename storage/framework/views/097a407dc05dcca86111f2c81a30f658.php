
<?php $__env->startSection('title'); ?>
<?php echo e('Control Log'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="d-flex justify-content-between">
            <h5 class="card-header">Control Log</h5>
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
                                <th class="sorting_asc" tabindex="0" aria-controls="control-log-datatable" rowspan="1"
                                    colspan="1" aria-label="CONTROL NAME: activate to sort column ascending"
                                    aria-sort="ascending" style="width: 69px;">CONTROL NAME</th>
                                <th class="sorting" tabindex="0" aria-controls="control-log-datatable" rowspan="1"
                                    colspan="1" aria-label="INSTRUMENT: activate to sort column ascending"
                                    style="width: 104px;">INSTRUMENT</th>
                                <th class="dt-center sorting" tabindex="0" aria-controls="control-log-datatable"
                                    rowspan="1" colspan="1" aria-label="DATE OPENED: activate to sort column ascending"
                                    style="width: 60px;">DATE OPENED</th>
                                <th class="dt-center sorting" tabindex="0" aria-controls="control-log-datatable"
                                    rowspan="1" colspan="1" aria-label="EXPIRY DATE: activate to sort column ascending"
                                    style="width: 60px;">EXPIRY DATE</th>
                                <th class="dt-center sorting" tabindex="0" aria-controls="control-log-datatable"
                                    rowspan="1" colspan="1" aria-label="LOT NUMBER: activate to sort column ascending"
                                    style="width: 63px;">LOT NUMBER</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="UNIT"
                                    style="width: 39px;">UNIT</th>
                                <th class="sorting" tabindex="0" aria-controls="control-log-datatable" rowspan="1"
                                    colspan="1" aria-label="LEVEL: activate to sort column ascending"
                                    style="width: 40px;">LEVEL</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="AVERAGE MEAN"
                                    style="width: 62px;">AVERAGE MEAN</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="RANGE FROM"
                                    style="width: 56px;">RANGE FROM</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="RANGE TO"
                                    style="width: 56px;">RANGE TO</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="QC RANGE"
                                    style="width: 48px;">QC RANGE</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="STANDARD DEVIATION"
                                    style="width: 75px;">STANDARD DEVIATION</th>
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
                                <td><?php echo e($item->control_name); ?></td>
                                <td class="sorting_1"><?php echo e($item->instrument); ?></td>
                                <td class=" dt-center"><?php echo e($item->date_opened); ?></td>
                                <td class=" dt-center"><?php echo e($item->expiration); ?></td>
                                <td class=" dt-center"><?php echo e($item->lot_number); ?></td>
                                <td class=" dt-center"><?php echo e($item->unit); ?></td>
                                <td class=" dt-center"><?php echo e($item->level); ?></td>
                                <td class=" dt-right"><?php echo e($item->range_from); ?></td>
                                <td class=" dt-right"><?php echo e($item->range_to); ?></td>
                                <td class=" dt-right"><?php echo e($item->qc_range); ?></td>
                                <td class=" dt-right"><?php echo e($item->standard_deviation); ?></td>
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
                    <form id="addForm" action="<?php echo e(route('log.control.store')); ?>" method="POST">
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
                                    <label for="control_name" class="form-label">Control Name</label>
                                    <input type="text" class="form-control" id="control_name" name="control_name"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('instrument')); ?>"
                                        required />
                                    <?php $__errorArgs = ['control_name'];
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
                                    <label for="lot_number" class="form-label">Lot Number </label>
                                    <input type="text" class="form-control" id="lot_number" name="lot_number"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('lot_number')); ?>" />
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
                            <div class="col-md-12">
                                <div class="mt-3">
                                    <label for="level" class="form-label">Level </label>
                                    <select class="form-select" id="level" aria-label="Default select example"
                                        name="level">
                                        <option value="" disabled <?php echo e(old('level') ? '' : 'selected'); ?>>
                                            select
                                        </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <?php $__errorArgs = ['level'];
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
                                    <label for="average_mean" class="form-label">Average Mean </label>
                                    <input type="text" class="form-control" id="average_mean" name="average_mean"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('average_mean')); ?>" />
                                    <?php $__errorArgs = ['average_mean'];
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
                                    <label for="range_from" class="form-label">Range (From) </label>
                                    <input type="text" class="form-control" id="range_from" name="range_from"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('range_from')); ?>" />
                                    <?php $__errorArgs = ['range_from'];
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
                                    <label for="range_to" class="form-label">Range (To) </label>
                                    <input type="text" class="form-control" id="range_to" name="range_to"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('range_to')); ?>" />
                                    <?php $__errorArgs = ['range_to'];
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
                                    <label for="qc_range" class="form-label">QC Range </label>
                                    <input type="text" class="form-control" id="qc_range" name="qc_range"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('qc_range')); ?>" />
                                    <?php $__errorArgs = ['qc_range'];
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
                                    <label for="standard_deviation" class="form-label">Standard Deviation </label>
                                    <input type="text" class="form-control" id="standard_deviation"
                                        name="standard_deviation" aria-describedby="defaultFormControlHelp"
                                        value="<?php echo e(old('standard_deviation')); ?>" />
                                    <?php $__errorArgs = ['standard_deviation'];
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
                        <form id="addForm" action="<?php echo e(route('log.control.update')); ?>" method="POST">
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
                                        <label for="edit_control_name" class="form-label">Control Name</label>
                                        <input type="text" class="form-control" id="edit_control_name"
                                            name="control_name" aria-describedby="defaultFormControlHelp"
                                            value="<?php echo e(old('instrument')); ?>" required />
                                        <?php $__errorArgs = ['control_name'];
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
                                        <label for="edit_lot_number" class="form-label">Lot Number </label>
                                        <input type="text" class="form-control" id="edit_lot_number" name="lot_number"
                                            aria-describedby="defaultFormControlHelp" value="<?php echo e(old('lot_number')); ?>" />
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
                                <div class="col-md-12">
                                    <div class="mt-3">
                                        <label for="edit_level" class="form-label">Level </label>
                                        <select class="form-select" id="edit_level" aria-label="Default select example"
                                            name="level">
                                            <option value="" disabled <?php echo e(old('level') ? '' : 'selected'); ?>>
                                                select
                                            </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <?php $__errorArgs = ['level'];
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
                                        <label for="edit_average_mean" class="form-label">Average Mean </label>
                                        <input type="text" class="form-control" id="edit_average_mean"
                                            name="edit_average_mean" aria-describedby="defaultFormControlHelp"
                                            value="<?php echo e(old('edit_average_mean')); ?>" />
                                        <?php $__errorArgs = ['edit_average_mean'];
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
                                        <label for="edit_range_from" class="form-label">Range (From) </label>
                                        <input type="text" class="form-control" id="edit_range_from" name="range_from"
                                            aria-describedby="defaultFormControlHelp" value="<?php echo e(old('range_from')); ?>" />
                                        <?php $__errorArgs = ['range_from'];
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
                                        <label for="edit_range_to" class="form-label">Range (To) </label>
                                        <input type="text" class="form-control" id="edit_range_to" name="range_to"
                                            aria-describedby="defaultFormControlHelp" value="<?php echo e(old('range_to')); ?>" />
                                        <?php $__errorArgs = ['range_to'];
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
                                        <label for="edit_qc_range" class="form-label">QC Range </label>
                                        <input type="text" class="form-control" id="edit_qc_range" name="qc_range"
                                            aria-describedby="defaultFormControlHelp" value="<?php echo e(old('qc_range')); ?>" />
                                        <?php $__errorArgs = ['qc_range'];
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
                                        <label for="edit_standard_deviation" class="form-label">Standard Deviation
                                        </label>
                                        <input type="text" class="form-control" id="edit_standard_deviation"
                                            name="standard_deviation" aria-describedby="defaultFormControlHelp"
                                            value="<?php echo e(old('standard_deviation')); ?>" />
                                        <?php $__errorArgs = ['standard_deviation'];
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
                    <form id="deleteForm" action="<?php echo e(route('log.control.delete', ['id' => 0])); ?>" method="POST">
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
                    form.action = '<?php echo e(route('log.control.delete', ['id' => ''])); ?>/' + itemId;
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
                url: '/laboratory/log/control-edit/' + itemId, 
                method: 'GET',
                success: function(data) {
                    console.log(data);  
                    var selectedValue = data.level;
                    $('#edit_level option').each(function() {
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
                    $('#edit_control_name').val(data.control_name); 
                    $('#edit_range_from').val(data.range_from); 
                    $('#edit_range_to').val(data.range_to); 
                    $('#edit_unit').val(data.unit);  
                    $('#edit_level').val(data.level); 
                    $('#edit_average_mean').val(data.average_mean); 
                    $('#edit_qc_range').val(data.qc_range); 
                    $('#edit_standard_deviation').val(data.standard_deviation); 
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\Sakil Ahmed\working\resources\views/pages/report/control-log.blade.php ENDPATH**/ ?>