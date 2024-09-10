
<?php $__env->startSection('title'); ?>
<?php echo e('Add Patient'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-12 mb-4">
        <h4 class="text-light fw-medium">Add Patient</h4>
        <div class="bs-stepper wizard-numbered mt-2">
            <div class="bs-stepper-header">
                <div class="step" data-target="#account-details">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label mt-1">
                            <span class="bs-stepper-title">Basic</span>
                            
                        </span>
                    </button>
                </div>
                <div class="line">
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="step" data-target="#personal-info">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label mt-1">
                            <span class="bs-stepper-title">Location</span>
                        </span>
                    </button>
                </div>
                <div class="line">
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="step" data-target="#social-links">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label mt-1">
                            <span class="bs-stepper-title">Payor</span>
                        </span>
                    </button>
                </div>
                <div class="step" data-target="#social-links">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label mt-1">
                            <span class="bs-stepper-title">Physician</span>
                        </span>
                    </button>
                </div>
                <div class="step" data-target="#social-links">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label mt-1">
                            <span class="bs-stepper-title">Test Order</span>
                        </span>
                    </button>
                </div>
                <div class="step" data-target="#social-links">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label mt-1">
                            <span class="bs-stepper-title">Scheduling</span>
                        </span>
                    </button>
                </div>
                <div class="step" data-target="#social-links">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label mt-1">
                            <span class="bs-stepper-title"> Choose Phlebotomist </span>
                        </span>
                    </button>
                </div>
                <div class="step" data-target="#social-links">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label mt-1">
                            <span class="bs-stepper-title">Confirm</span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="bs-stepper-content">
                <form class="employee-form" method="POST" action=""
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <!-- Account Details -->
                    <div id="account-details" class="content">
                        <div class="content-header mb-3">
                            <h6 class="mb-0">Account Details</h6>
                            <small>Enter Your Account Details.</small>
                        </div>
                        <div class="row g-3">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="formtabs-first-name">Full Name</label>
                                    <input type="text" id="formtabs-first-name" class="form-control"
                                         name="name" />
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

                            <div class="col-12 d-flex justify-content-between">
                                <button class="btn btn-label-secondary btn-prev" disabled>
                                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next profile-next-btn">
                                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                    <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Personal Info -->
                    <div id="personal-info" class="content">
                        <div class="content-header mb-3">
                            <h6 class="mb-0">Personal Info</h6>
                            <small>Enter short description about yoursef.</small>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="formtabs-username">About (short description
                                    yourself)</label>
                                <textarea type="text" id="formtabs-username" class="form-control"
                                    name="short_desc"></textarea>
                                <?php $__errorArgs = ['short_desc'];
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
                            <div class="col-12 d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev">
                                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next about-next-btn">
                                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                    <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Social Links -->
                    <div id="social-links" class="content">
                        <div class="content-header mb-3">
                            <h6 class="mb-0">Social Links</h6>
                            <small>Enter Your Social Links.</small>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="formtabs-twitter">Twitter (full link with
                                    https://)</label>
                                <input type="text" id="formtabs-twitter" class="form-control"
                                    placeholder="https://twitter.com/abc" name="twitter"
                                     />
                                <?php $__errorArgs = ['twitter'];
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
                            <div class="col-12 d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev">
                                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-success btn-submit profile-submit-btn" type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<link rel="stylesheet"
    href="<?php echo e(asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/typeahead-js/typeahead.css')); ?>" />

<!-- Vendor Styles -->
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/flatpickr/flatpickr.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/select2/select2.css')); ?>" />

<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/bs-stepper/bs-stepper.css')); ?>" />
<link rel="stylesheet"
    href="<?php echo e(asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/select2/select2.css')); ?>" />
<link rel="stylesheet"
    href="<?php echo e(asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css')); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('assets/vendor/libs/jquery/jquery.js')); ?>">
</script>
<script src="<?php echo e(asset('assets/vendor/libs/popper/popper.js')); ?>">
</script>
<script src="<?php echo e(asset('assets/vendor/js/bootstrap.js')); ?>">
</script>
<script src="<?php echo e(asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')); ?>">
</script>
<script src="<?php echo e(asset('assets/vendor/libs/hammer/hammer.js')); ?>">
</script>
<script src="<?php echo e(asset('assets/vendor/libs/typeahead-js/typeahead.js')); ?>">
</script>
<script src="<?php echo e(asset('assets/vendor/js/menu.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/libs/cleavejs/cleave.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/libs/cleavejs/cleave-phone.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/libs/moment/moment.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/libs/flatpickr/flatpickr.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/libs/select2/select2.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/libs/bs-stepper/bs-stepper.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/libs/select2/select2.js')); ?>"></script>
</script>
</script>

<script src="<?php echo e(asset('assets/js/form-wizard-numbered.js')); ?>"></script>

<script>
    $(document).ready(function() {
            var submitForm = false;

            $('.profile-next-btn, .about-next-btn').on('click', function() {
                // Set submitForm to false to prevent form submission
                submitForm = false;
            });

            $('.profile-submit-btn').on('click', function() {
                // Set submitForm to true to allow form submission
                submitForm = true;
            });

            // Intercept form submission
            $('.employee-form').on('submit', function() {
                // Allow or prevent form submission based on the value of submitForm
                return submitForm;
            });
        });
</script>

<script>
    var changePic = function(event) {
            var output = document.getElementById('proPic');
            output.src = URL.createObjectURL(event.target.files[0]);
        }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\Sakil Ahmed\working\resources\views/pages/patient/add.blade.php ENDPATH**/ ?>