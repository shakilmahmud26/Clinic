
<?php $__env->startSection('title'); ?>
<?php echo e('Add Physician'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="<?php echo e(route('physician.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="card mb-4">
                    <h5 class="card-header">Add Physician</h5>
                    <div class="card-body">
                        <div class="mt-3">
                            <label for="title" class="form-label">Account No. <span class="required">*</span></label>
                            <input type="text" class="form-control" id="title" name="title"
                                aria-describedby="defaultFormControlHelp" value="<?php echo e(old('title')); ?>" />
                            <?php $__errorArgs = ['title'];
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="title" class="form-label">Facility Name <span
                                            class="required">*</span></label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('title')); ?>" />
                                    <?php $__errorArgs = ['title'];
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
                                    <label for="status" class="form-label">Account Representative</label>
                                    <select class="form-select" id="status" aria-label="Default select example"
                                        name="status">
                                        <option value="" disabled <?php echo e(old('status') ? '' : 'selected'); ?>>select
                                        </option>
                                        <option value="published" <?php echo e(old('status')=='published' ? 'selected' : ''); ?>>
                                            jon
                                        </option>
                                        <option value="draft" <?php echo e(old('status')=='draft' ? 'selected' : ''); ?>>doe
                                        </option>
                                    </select>
                                    <?php $__errorArgs = ['status'];
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
                                    <label for="title" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('title')); ?>" />
                                    <?php $__errorArgs = ['title'];
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
                                    <label for="title" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('title')); ?>" />
                                    <?php $__errorArgs = ['title'];
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
                                    <label for="title" class="form-label">PCP No. (IF ANY)</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('title')); ?>" />
                                    <?php $__errorArgs = ['title'];
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
                                    <label for="title" class="form-label">NPI No.</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('title')); ?>" />
                                    <?php $__errorArgs = ['title'];
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
                                    <label for="title" class="form-label">Street Address</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('title')); ?>" />
                                    <?php $__errorArgs = ['title'];
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
                                    <label for="title" class="form-label">City</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('title')); ?>" />
                                    <?php $__errorArgs = ['title'];
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
                                    <label for="title" class="form-label">State</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('title')); ?>" />
                                    <?php $__errorArgs = ['title'];
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
                                    <label for="title" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('title')); ?>" />
                                    <?php $__errorArgs = ['title'];
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
                                    <label for="title" class="form-label">Clinic Name</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('title')); ?>" />
                                    <?php $__errorArgs = ['title'];
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
                                    <label for="title" class="form-label">Office Name</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('title')); ?>" />
                                    <?php $__errorArgs = ['title'];
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
                                    <label for="title" class="form-label">Fax No</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('title')); ?>" />
                                    <?php $__errorArgs = ['title'];
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
                                    <label for="title" class="form-label">Mobile No</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('title')); ?>" />
                                    <?php $__errorArgs = ['title'];
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
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="col-md-12 note note-info">
                        <h4 class="block">Info!</h4>
                        <p>
                            Our system is designed to send Alert Notification via Text Message to the referring
                            Physician such as PANIC VALUES. Please enter up to 2 Mobile Numbers where you want to Send
                            your Alert Notifications.
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="mt-3">
                            <label for="TagifyBasic" class="form-label">
                                Alert Notification No. 1
                            </label>
                            <input type="text" class="form-control" id="title" name="title"
                                aria-describedby="defaultFormControlHelp" value="<?php echo e(old('title')); ?>" />
                            <?php $__errorArgs = ['keywords'];
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
                        <div class="mt-3">
                            <label for="meta_desc" class="form-label">Alert Notification No. 2</label>
                            <input type="text" class="form-control" id="title" name="title"
                                aria-describedby="defaultFormControlHelp" value="<?php echo e(old('title')); ?>" />
                            <?php $__errorArgs = ['meta_desc'];
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
                        <div class="mb-0 mt-5">
                            <button class="btn btn-primary" type="submit">
                                <span class="align-middle">Submit</span>
                            </button>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('dashboard/global/assets/vendor/libs/tagify/tagify.css')); ?>" />
<link href="<?php echo e(asset('dashboard/global/assets/summernote/summernote-bs4.min.css')); ?>" rel="stylesheet">
<style>
    .panel-heading.note-toolbar {
        background: #232432 !important;
    }

    .ck-content {
        height: 500px;
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('dashboard/global/assets/vendor/libs/tagify/tagify.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/global/assets/js/forms-tagify.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/global/assets/summernote/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/global/assets/summernote/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/global/assets/summernote/summernote-bs4.min.js')); ?>"></script>
<script>
    $(document).ready(function() {
            $('#desc').summernote({
                tabsize: 2,
                height: 500,
            });
        });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\Sakil Ahmed\working\resources\views/pages/patient/edit.blade.php ENDPATH**/ ?>