
<?php $__env->startSection('title'); ?>
<?php echo e('Profile Setup'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="d-flex justify-content-between">
            <h5 class="card-header">Profile Setup</h5>
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
                                <th class="sorting_asc" tabindex="0" aria-controls="profile-datatable" rowspan="1"
                                    colspan="1" aria-label="PROFILE NAME: activate to sort column ascending"
                                    style="width: 297px;" aria-sort="ascending">PROFILE NAME</th>
                                <th class="dt-center sorting_disabled" rowspan="1" colspan="1"
                                    aria-label="SELECTED TESTS" style="width: 608px;">SELECTED TESTS</th>
                                <th class="dt-center sorting_disabled" rowspan="1" colspan="1" aria-label="&amp;nbsp;"
                                    style="width: 120px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($items->isNotEmpty()): ?>
                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr role="row" class="odd">
                                <td class=" dt-center d-flex">
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
                                <td class="sorting_1"><?php echo e($item->name); ?></td>
                                <td class=" dt-center"><?php echo e(implode(', ', $item->tests)); ?></td>
                                <td class=" dt-center d-flex">
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
                                <td colspan="4" class="text-center">
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
                    <form id="addForm" action="<?php echo e(route('profile-store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mt-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('name')); ?>" required />
                                    <?php $__errorArgs = ['name'];
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
                                    <label for="select2Multiple" class="form-label">Select Tests </label>
                                    <select id="select2Multiple" class="select2 form-select" multiple name="tests[]"
                                        required>
                                        <?php $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($test->name); ?>"><?php echo e($test->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['tests'];
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
                        <form id="addForm" action="<?php echo e(route('profile-update')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="text" id="edit_id" name="id" hidden>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mt-3">
                                        <label for="edit_name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="edit_name" name="name"
                                            aria-describedby="defaultFormControlHelp" value="<?php echo e(old('name')); ?>"
                                            required />
                                        <?php $__errorArgs = ['name'];
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
                                        <label for="select2EditMultiple" class="form-label">Select Tests </label>
                                        <select id="select2EditMultiple" class="select2 form-select" multiple
                                            name="tests[]" required>
                                            <?php $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($test->name); ?>"><?php echo e($test->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['category'];
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
                    <form id="deleteForm" action="<?php echo e(route('profile-delete')); ?>" method="POST">
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
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')); ?>" />
<link rel="stylesheet"
    href="<?php echo e(asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/flatpickr/flatpickr.css')); ?>" />
<!-- Row Group CSS -->
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/select2/select2.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/libs/select2/select2.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/forms-selects.js')); ?>"></script>

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
                    form.action = '<?php echo e(route('profile-delete')); ?>/' + itemId;
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
                url: '/laboratory/profile-edit/' + itemId, 
                method: 'GET',
                success: function(data) {
                    console.log(data);  
                    $('#edit_name').val(data.name); 
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\Sakil Ahmed\working\resources\views/pages/other/profile-setup.blade.php ENDPATH**/ ?>