
<?php $__env->startSection('title'); ?>
<?php echo e('Production Report'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="d-flex justify-content-between">
            <h5 class="card-header">Production Report</h5>
            <a href="#" style="background: #787bff;
                width: fit-content;
                height: fit-content;
                padding: 6px 20px;
                border-radius: 5px;
                color: #fff;
                margin-top: 1.5rem;
                margin-right: 1.5rem;">Download PDF</a>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="portlet-title">
                    <div class="caption">
                        AGNES, MORTEL (10114)
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="datatable_report portlet-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet">

                                <div class="portlet-body flip-scroll" style="display: block;">
                                    <table class="table table-striped table-bordered table-advance table-hover">
                                        <thead>
                                            <tr>
                                                <th width="40%" class="dt-center">TEST ORDERED</th>
                                                <th width="20%" class="dt-center">REIMBURSEMENT</th>
                                                <th width="20%" class="dt-center">NO. OF TEST</th>
                                                <th width="20%" class="dt-center">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>DRAW FEE</td>
                                                <td class="dt-right">$3.00</td>
                                                <td class="dt-right">1</td>
                                                <td class="dt-right">$3.00</td>
                                            </tr>
                                            <tr>
                                                <td>Travel Fee</td>
                                                <td class="dt-right">$20.00</td>
                                                <td class="dt-right">1</td>
                                                <td class="dt-right">$20.00</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>TOTAL</th>
                                                <th></th>
                                                <th></th>
                                                <th class="dt-right">$23.00</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <form id="deleteForm" action="<?php echo e(route('physician.delete', ['id' => 0])); ?>" method="POST">
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
                    form.action = '<?php echo e(route('physician.delete', ['id' => ''])); ?>/' + itemId;
                });
            });
        });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\Sakil Ahmed\working\resources\views/pages/report/production.blade.php ENDPATH**/ ?>