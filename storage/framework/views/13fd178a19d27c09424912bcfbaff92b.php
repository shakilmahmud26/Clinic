<?php $__env->startSection('title'); ?>
<?php echo e('Dashboard'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 col-md-12 order-1">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Laboratory</h3>
                    <hr>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center flex-wrap">
                        <a href="<?php echo e(route('report.accession')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/lab/accessions-report.png')); ?>" alt="">
                        </a>
                        <a href="<?php echo e(route('report.daily-worksheet')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/lab/daily-worksheet.png')); ?>" alt="">
                        </a>
                        <a href="<?php echo e(route('report.result-viewer')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/lab/result-viewer.png')); ?>" alt="">
                        </a>
                        <a href="<?php echo e(route('report.test-list')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/lab/test-list.png')); ?>" alt="">
                        </a>
                        <a href="<?php echo e(route('profile-setup')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/lab/profile-setup.png')); ?>" alt="">
                        </a>
                        <a href="<?php echo e(route('log.reagent')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/lab/reagent-log.png')); ?>" alt="">
                        </a>
                        <a href="<?php echo e(route('log.control')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/lab/control-log.png')); ?>" alt="">
                        </a>
                        <a href="<?php echo e(route('qc.daily')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/lab/dailyqc.png')); ?>" alt="">
                        </a>
                        <a href="<?php echo e(route('qc.auto-analysis')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/lab/qc-analysis.png')); ?>" alt="">
                        </a>
                        <a href="<?php echo e(route('levey-jennings')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/lab/levey-jennings.png')); ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 order-1 mt-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Administration</h3>
                    <hr>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center flex-wrap">
                        <a href="<?php echo e(route('dashboard')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/admin/dashboard.png')); ?>" alt="">
                        </a>
                        <a href="<?php echo e(route('patient.add')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/admin/add-patient.png')); ?>" alt="">
                        </a>
                        <a href="<?php echo e(route('id-scanner')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/admin/id-scanner.png')); ?>" alt="">
                        </a>
                        <a href="<?php echo e(route('patient.list')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/admin/patient-list.png')); ?>" alt="">
                        </a>
                        <a href="<?php echo e(route('draw.master')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/admin/master-drawlist.png')); ?>" alt="">
                        </a>
                        <a href="<?php echo e(route('draw.phlebotomist')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/admin/phleb-drawlist.png')); ?>" alt="">
                        </a>
                        <a href="<?php echo e(route('booking.list')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/admin/booking-schedule.png')); ?>" alt="">
                        </a>
                        <a href="<?php echo e(route('report.production')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/admin/production-report.png')); ?>" alt="">
                        </a>
                        <a href="<?php echo e(route('report.billing')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/admin/billing-report.png')); ?>" alt="">
                        </a>
                        <a href="<?php echo e(route('physician.list')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/admin/physicians-table.png')); ?>" alt="">
                        </a>
                        <a href="<?php echo e(route('covid.test')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/admin/test-count.png')); ?>" alt="">
                        </a>
                        <a href="<?php echo e(route('covid.claim')); ?>" class="mt-3 mx-3">
                            <img src="<?php echo e(asset('assets/img/admin/covid-claims.png')); ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\Sakil Ahmed\working\resources\views/pages/index.blade.php ENDPATH**/ ?>