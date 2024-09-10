
<?php $__env->startSection('title'); ?>
<?php echo e('Physician Lists'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="d-flex justify-content-between">
            <h5 class="card-header">Physician Lists</h5>
            <a href="#"
                style="background: #787bff; width: fit-content; height: fit-content; padding: 6px 20px; border-radius: 5px; color: #fff; margin-top: 1.5rem; margin-right: 1.5rem;"
                data-bs-toggle="modal" data-bs-target="#addItemModal">Add new</a>
        </div>
        <div class="card-datatable text-nowrap">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end ">
                        <form action="<?php echo e(route('physician.search')); ?>" class="d-flex mb-5 me-2">
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
                                <th>Action</th>
                                <th>SL</th>
                                <th>ACCOUNT NO.</th>
                                <th>FACILITY NAME</th>
                                <th>FIRST NAME</th>
                                <th>LAST NAME</th>
                                <th>PCP NO.</th>
                                <th>NPI NO.</th>
                                <th>STREET ADDRESS</th>
                                <th>CITY</th>
                                <th>STATE</th>
                                <th>ZIP CODE</th>
                                <th>CLINIC NAME</th>
                                <th>OFFICE NO.</th>
                                <th>FAX NO.</th>
                                <th>MOBILE NO.</th>
                                <th>NOTIFY NO. 1</th>
                                <th>NOTIFY NO. 2</th>
                                <th>ACCOUNT REPRESENTATIVE</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($items->isNotEmpty()): ?>
                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
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
                                <td class="dt-center sorting_1"><?php echo e($item->id); ?></td>
                                <td class="dt-center sorting_1"><?php echo e($item->account_no); ?></td>
                                <td><?php echo e($item->facility_name); ?></td>
                                <td><?php echo e($item->first_name); ?></td>
                                <td><?php echo e($item->last_name); ?></td>
                                <td class="dt-center"><?php echo e($item->pcp_no); ?></td>
                                <td class="dt-center"><?php echo e($item->npi_no); ?></td>
                                <td><?php echo e($item->street_address); ?></td>
                                <td><?php echo e($item->city); ?></td>
                                <td class="dt-center"><?php echo e($item->state); ?></td>
                                <td class="dt-center"><?php echo e($item->zip_code); ?></td>
                                <td><?php echo e($item->clinic_name); ?></td>
                                <td class="dt-center"><?php echo e($item->office_name); ?></td>
                                <td class="dt-center"><?php echo e($item->fax_no); ?></td>
                                <td class="dt-center"><?php echo e($item->phone_no); ?></td>
                                <td><?php echo e($item->notify_1); ?></td>
                                <td><?php echo e($item->notify_2); ?></td>
                                <td class="dt-center"><?php echo e($item->account_representative); ?></td>
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
                    <form id="addForm" action="<?php echo e(route('physician.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mt-3">
                                    <label for="account_no" class="form-label">Account No. <span
                                            class="required">*</span></label>
                                    <input type="text" class="form-control" id="account_no" name="account_no"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('account_no')); ?>"
                                        required />
                                    <?php $__errorArgs = ['account_no'];
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="facility_name" class="form-label">Facility Name </label>
                                    <input type="text" class="form-control" id="facility_name" name="facility_name"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('facility_name')); ?>" />
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
                                    <label for="account_representative" class="form-label">Account
                                        Representative</label>
                                    <select class="form-select" id="account_representative"
                                        aria-label="Default select example" name="account_representative">
                                        <option value="" disabled <?php echo e(old('account_representative') ? '' : 'selected'); ?>>
                                            select
                                        </option>
                                        <option value="ALLEN MCCAY">ALLEN MCCAY</option>
                                        <option value="APOLLO STAFF">APOLLO STAFF</option>
                                        <option value="ARRIEANNA SAPP VEGAS TECH">ARRIEANNA SAPP VEGAS TECH</option>
                                        <option value="ARRIELLE WRIGHT VEGAS TECH">ARRIELLE WRIGHT VEGAS TECH</option>
                                        <option value="Arsenio Bernabe">Arsenio Bernabe</option>
                                        <option value="Berenice Ontiveros VEGAS TECH">Berenice Ontiveros VEGAS TECH
                                        </option>
                                        <option value="Bill Bhogal">Bill Bhogal</option>
                                        <option value="DEBORAH EDWARDS">DEBORAH EDWARDS</option>
                                        <option value="DEJANAE WILSON VEGAS TECH">DEJANAE WILSON VEGAS TECH</option>
                                        <option value="DINA RAFAEL">DINA RAFAEL</option>
                                        <option value="ELAN ESCARTIN">ELAN ESCARTIN</option>
                                        <option value="ELLIE PABRIAGA">ELLIE PABRIAGA</option>
                                        <option value="GINA SUMBANG">GINA SUMBANG</option>
                                        <option value="HRX BILLING CO.">HRX BILLING CO.</option>
                                        <option value="JAME CLEMONS VEGAS TECH">JAME CLEMONS VEGAS TECH</option>
                                        <option value="Jasmine De Leon VEGAS TECH">Jasmine De Leon VEGAS TECH</option>
                                        <option value="JEAN BUTLER">JEAN BUTLER</option>
                                        <option value="JENIFER DOMINGUEZ">JENIFER DOMINGUEZ</option>
                                        <option value="JILLIAN HARRINGTON Phd">JILLIAN HARRINGTON Phd</option>
                                        <option value="JOSH MONJE VEGAS TECH">JOSH MONJE VEGAS TECH</option>
                                        <option value="JR BONILLA">JR BONILLA</option>
                                        <option value="JULIET RAMOS">JULIET RAMOS</option>
                                        <option value="Kristin Tolbert Vegas Tech">Kristin Tolbert Vegas Tech</option>
                                        <option value="KRIZIEL LEINS">KRIZIEL LEINS</option>
                                        <option value="Leonidas Flangas">Leonidas Flangas</option>
                                        <option value="Leontieva Yulia">Leontieva Yulia</option>
                                        <option value="LESLIE REVELES DEL RIO VEGAS TECH">LESLIE REVELES DEL RIO VEGAS
                                            TECH</option>
                                        <option value="Lolita Joyce">Lolita Joyce</option>
                                        <option value="MAGDALENA BANUELOS Vegas Tech">MAGDALENA BANUELOS Vegas Tech
                                        </option>
                                        <option value="MARK PABRIAGA">MARK PABRIAGA</option>
                                        <option value="Marvin Villanueva">Marvin Villanueva</option>
                                        <option value="Mayra Meza VEGAS TECH">Mayra Meza VEGAS TECH</option>
                                        <option value="Melissa Quintana Vegas Tech">Melissa Quintana Vegas Tech</option>
                                        <option value="Michael Custodio VEGAS TECH">Michael Custodio VEGAS TECH</option>
                                        <option value="Mike Kawata">Mike Kawata</option>
                                        <option value="Nancy Hernandez VEGAS TECH">Nancy Hernandez VEGAS TECH</option>
                                        <option value="NATASHA BACKO">NATASHA BACKO</option>
                                        <option value="Pagaduan Jhomar">Pagaduan Jhomar</option>
                                        <option value="Phlebotomist IN HOUSE">Phlebotomist IN HOUSE</option>
                                        <option value="Phlebotomist NE">Phlebotomist NE</option>
                                        <option value="Phlebotomist NW">Phlebotomist NW</option>
                                        <option value="Phlebotomist SE">Phlebotomist SE</option>
                                        <option value="Phlebotomist SW">Phlebotomist SW</option>
                                        <option value="REBECCA GARCIA">REBECCA GARCIA</option>
                                        <option value="REYMAR GEROLEO">REYMAR GEROLEO</option>
                                        <option value="ROMMEL ABAD">ROMMEL ABAD</option>
                                        <option value="TANA STUBBS VEGAS TECH">TANA STUBBS VEGAS TECH</option>
                                        <option value="THEA ABAD">THEA ABAD</option>
                                        <option value="TYLER MORRIS">TYLER MORRIS</option>
                                        <option value="Tylona Whitfield Vegas Tech">Tylona Whitfield Vegas Tech</option>
                                        <option value="VARGAS BENJAMIN">VARGAS BENJAMIN</option>
                                        <option value="VERONICA MORENO">VERONICA MORENO</option>
                                        <option value="WIN NAING">WIN NAING</option>
                                        <option value="Yasue Campos VEGAS TECH">Yasue Campos VEGAS TECH</option>
                                        <option value="Zee Medical Billing">Zee Medical Billing</option>

                                    </select>
                                    <?php $__errorArgs = ['account_representative'];
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
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('first_name')); ?>" />
                                    <?php $__errorArgs = ['first_name'];
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
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('last_name')); ?>" />
                                    <?php $__errorArgs = ['last_name'];
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
                                    <label for="pcp_no" class="form-label">PCP No. (IF ANY)</label>
                                    <input type="text" class="form-control" id="pcp_no" name="pcp_no"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('pcp_no')); ?>" />
                                    <?php $__errorArgs = ['pcp_no'];
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
                                    <label for="npi_no" class="form-label">NPI No.</label>
                                    <input type="text" class="form-control" id="npi_no" name="npi_no"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('npi_no')); ?>" />
                                    <?php $__errorArgs = ['npi_no'];
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
                                    <label for="street_address" class="form-label">Street Address</label>
                                    <input type="text" class="form-control" id="street_address" name="street_address"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('street_address')); ?>" />
                                    <?php $__errorArgs = ['street_address'];
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
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city" name="city"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('city')); ?>" />
                                    <?php $__errorArgs = ['city'];
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
                                    <label for="state" class="form-label">State</label>
                                    <input type="text" class="form-control" id="state" name="state"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('state')); ?>" />
                                    <?php $__errorArgs = ['state'];
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
                                    <label for="zip_code" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" id="zip_code" name="zip_code"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('zip_code')); ?>" />
                                    <?php $__errorArgs = ['zip_code'];
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
                                    <label for="clinic_name" class="form-label">Clinic Name</label>
                                    <input type="text" class="form-control" id="clinic_name" name="clinic_name"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('clinic_name')); ?>" />
                                    <?php $__errorArgs = ['clinic_name'];
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
                                    <label for="office_name" class="form-label">Office Name</label>
                                    <input type="text" class="form-control" id="office_name" name="office_name"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('office_name')); ?>" />
                                    <?php $__errorArgs = ['office_name'];
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
                                    <label for="fax_no" class="form-label">Fax No</label>
                                    <input type="text" class="form-control" id="fax_no" name="fax_no"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('fax_no')); ?>" />
                                    <?php $__errorArgs = ['fax_no'];
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
                                    <label for="phone_no" class="form-label">Mobile No</label>
                                    <input type="text" class="form-control" id="phone_no" name="phone_no"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('phone_no')); ?>" />
                                    <?php $__errorArgs = ['phone_no'];
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
                            <div class="col-md-12 note note-info mt-5">
                                <h4 class="block">Info!</h4>
                                <p>
                                    Our system is designed to send Alert Notification via Text Message to the referring
                                    item such as PANIC VALUES. Please enter up to 2 Mobile Numbers where you want
                                    to Send
                                    your Alert Notifications.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="notify_1" class="form-label">
                                        Alert Notification No. 1
                                    </label>
                                    <input type="text" class="form-control" id="notify_1" name="notify_1"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('notify_1')); ?>" />
                                    <?php $__errorArgs = ['notify_1'];
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
                                    <label for="notify_2" class="form-label">
                                        Alert Notification No. 1
                                    </label>
                                    <input type="text" class="form-control" id="notify_2" name="notify_2"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('notify_2')); ?>" />
                                    <?php $__errorArgs = ['notify_2'];
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
                    </div>
                    <form id="addForm" action="<?php echo e(route('physician.update')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="text" name="id" id="edit_id" hidden>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mt-3">
                                    <label for="edit_account_no" class="form-label">Account No. <span
                                            class="required">*</span></label>
                                    <input type="text" class="form-control" id="edit_account_no" name="account_no"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('account_no')); ?>"
                                        required />
                                    <?php $__errorArgs = ['account_no'];
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="edit_facility_name" class="form-label">Facility Name </label>
                                    <input type="text" class="form-control" id="edit_facility_name" name="facility_name"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('facility_name')); ?>" />
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
                                    <label for="edit_account_representative" class="form-label">Account
                                        Representative</label>
                                    <select class="form-select" id="edit_account_representative"
                                        aria-label="Default select example" name="account_representative">
                                        <option value="" disabled <?php echo e(old('account_representative') ? '' : 'selected'); ?>>
                                            select
                                        </option>
                                        <option value="ALLEN MCCAY">ALLEN MCCAY</option>
                                        <option value="APOLLO STAFF">APOLLO STAFF</option>
                                        <option value="ARRIEANNA SAPP VEGAS TECH">ARRIEANNA SAPP VEGAS TECH</option>
                                        <option value="ARRIELLE WRIGHT VEGAS TECH">ARRIELLE WRIGHT VEGAS TECH</option>
                                        <option value="Arsenio Bernabe">Arsenio Bernabe</option>
                                        <option value="Berenice Ontiveros VEGAS TECH">Berenice Ontiveros VEGAS TECH
                                        </option>
                                        <option value="Bill Bhogal">Bill Bhogal</option>
                                        <option value="DEBORAH EDWARDS">DEBORAH EDWARDS</option>
                                        <option value="DEJANAE WILSON VEGAS TECH">DEJANAE WILSON VEGAS TECH</option>
                                        <option value="DINA RAFAEL">DINA RAFAEL</option>
                                        <option value="ELAN ESCARTIN">ELAN ESCARTIN</option>
                                        <option value="ELLIE PABRIAGA">ELLIE PABRIAGA</option>
                                        <option value="GINA SUMBANG">GINA SUMBANG</option>
                                        <option value="HRX BILLING CO.">HRX BILLING CO.</option>
                                        <option value="JAME CLEMONS VEGAS TECH">JAME CLEMONS VEGAS TECH</option>
                                        <option value="Jasmine De Leon VEGAS TECH">Jasmine De Leon VEGAS TECH</option>
                                        <option value="JEAN BUTLER">JEAN BUTLER</option>
                                        <option value="JENIFER DOMINGUEZ">JENIFER DOMINGUEZ</option>
                                        <option value="JILLIAN HARRINGTON Phd">JILLIAN HARRINGTON Phd</option>
                                        <option value="JOSH MONJE VEGAS TECH">JOSH MONJE VEGAS TECH</option>
                                        <option value="JR BONILLA">JR BONILLA</option>
                                        <option value="JULIET RAMOS">JULIET RAMOS</option>
                                        <option value="Kristin Tolbert Vegas Tech">Kristin Tolbert Vegas Tech</option>
                                        <option value="KRIZIEL LEINS">KRIZIEL LEINS</option>
                                        <option value="Leonidas Flangas">Leonidas Flangas</option>
                                        <option value="Leontieva Yulia">Leontieva Yulia</option>
                                        <option value="LESLIE REVELES DEL RIO VEGAS TECH">LESLIE REVELES DEL RIO VEGAS
                                            TECH</option>
                                        <option value="Lolita Joyce">Lolita Joyce</option>
                                        <option value="MAGDALENA BANUELOS Vegas Tech">MAGDALENA BANUELOS Vegas Tech
                                        </option>
                                        <option value="MARK PABRIAGA">MARK PABRIAGA</option>
                                        <option value="Marvin Villanueva">Marvin Villanueva</option>
                                        <option value="Mayra Meza VEGAS TECH">Mayra Meza VEGAS TECH</option>
                                        <option value="Melissa Quintana Vegas Tech">Melissa Quintana Vegas Tech</option>
                                        <option value="Michael Custodio VEGAS TECH">Michael Custodio VEGAS TECH</option>
                                        <option value="Mike Kawata">Mike Kawata</option>
                                        <option value="Nancy Hernandez VEGAS TECH">Nancy Hernandez VEGAS TECH</option>
                                        <option value="NATASHA BACKO">NATASHA BACKO</option>
                                        <option value="Pagaduan Jhomar">Pagaduan Jhomar</option>
                                        <option value="Phlebotomist IN HOUSE">Phlebotomist IN HOUSE</option>
                                        <option value="Phlebotomist NE">Phlebotomist NE</option>
                                        <option value="Phlebotomist NW">Phlebotomist NW</option>
                                        <option value="Phlebotomist SE">Phlebotomist SE</option>
                                        <option value="Phlebotomist SW">Phlebotomist SW</option>
                                        <option value="REBECCA GARCIA">REBECCA GARCIA</option>
                                        <option value="REYMAR GEROLEO">REYMAR GEROLEO</option>
                                        <option value="ROMMEL ABAD">ROMMEL ABAD</option>
                                        <option value="TANA STUBBS VEGAS TECH">TANA STUBBS VEGAS TECH</option>
                                        <option value="THEA ABAD">THEA ABAD</option>
                                        <option value="TYLER MORRIS">TYLER MORRIS</option>
                                        <option value="Tylona Whitfield Vegas Tech">Tylona Whitfield Vegas Tech</option>
                                        <option value="VARGAS BENJAMIN">VARGAS BENJAMIN</option>
                                        <option value="VERONICA MORENO">VERONICA MORENO</option>
                                        <option value="WIN NAING">WIN NAING</option>
                                        <option value="Yasue Campos VEGAS TECH">Yasue Campos VEGAS TECH</option>
                                        <option value="Zee Medical Billing">Zee Medical Billing</option>

                                    </select>
                                    <?php $__errorArgs = ['account_representative'];
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
                                    <label for="edit_first_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="edit_first_name" name="first_name"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('first_name')); ?>" />
                                    <?php $__errorArgs = ['first_name'];
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
                                    <label for="edit_last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="edit_last_name" name="last_name"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('last_name')); ?>" />
                                    <?php $__errorArgs = ['last_name'];
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
                                    <label for="edit_pcp_no" class="form-label">PCP No. (IF ANY)</label>
                                    <input type="text" class="form-control" id="edit_pcp_no" name="pcp_no"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('pcp_no')); ?>" />
                                    <?php $__errorArgs = ['pcp_no'];
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
                                    <label for="edit_npi_no" class="form-label">NPI No.</label>
                                    <input type="text" class="form-control" id="edit_npi_no" name="npi_no"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('npi_no')); ?>" />
                                    <?php $__errorArgs = ['npi_no'];
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
                                    <label for="edit_street_address" class="form-label">Street Address</label>
                                    <input type="text" class="form-control" id="edit_street_address"
                                        name="street_address" aria-describedby="defaultFormControlHelp"
                                        value="<?php echo e(old('street_address')); ?>" />
                                    <?php $__errorArgs = ['street_address'];
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
                                    <label for="edit_city" class="form-label">City</label>
                                    <input type="text" class="form-control" id="edit_city" name="city"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('city')); ?>" />
                                    <?php $__errorArgs = ['city'];
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
                                    <label for="edit_state" class="form-label">State</label>
                                    <input type="text" class="form-control" id="edit_state" name="state"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('state')); ?>" />
                                    <?php $__errorArgs = ['state'];
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
                                    <label for="edit_zip_code" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" id="edit_zip_code" name="zip_code"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('zip_code')); ?>" />
                                    <?php $__errorArgs = ['zip_code'];
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
                                    <label for="edit_clinic_name" class="form-label">Clinic Name</label>
                                    <input type="text" class="form-control" id="edit_clinic_name" name="clinic_name"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('clinic_name')); ?>" />
                                    <?php $__errorArgs = ['clinic_name'];
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
                                    <label for="edit_office_name" class="form-label">Office Name</label>
                                    <input type="text" class="form-control" id="edit_office_name" name="office_name"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('office_name')); ?>" />
                                    <?php $__errorArgs = ['office_name'];
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
                                    <label for="edit_fax_no" class="form-label">Fax No</label>
                                    <input type="text" class="form-control" id="edit_fax_no" name="fax_no"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('fax_no')); ?>" />
                                    <?php $__errorArgs = ['fax_no'];
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
                                    <label for="edit_phone_no" class="form-label">Mobile No</label>
                                    <input type="text" class="form-control" id="edit_phone_no" name="phone_no"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('phone_no')); ?>" />
                                    <?php $__errorArgs = ['phone_no'];
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
                            <div class="col-md-12 note note-info mt-5">
                                <h4 class="block">Info!</h4>
                                <p>
                                    Our system is designed to send Alert Notification via Text Message to the referring
                                    item such as PANIC VALUES. Please enter up to 2 Mobile Numbers where you want
                                    to Send
                                    your Alert Notifications.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <label for="edit_notify_1" class="form-label">
                                        Alert Notification No. 1
                                    </label>
                                    <input type="text" class="form-control" id="edit_notify_1" name="notify_1"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('notify_1')); ?>" />
                                    <?php $__errorArgs = ['notify_1'];
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
                                    <label for="edit_notify_2" class="form-label">
                                        Alert Notification No. 1
                                    </label>
                                    <input type="text" class="form-control" id="edit_notify_2" name="notify_2"
                                        aria-describedby="defaultFormControlHelp" value="<?php echo e(old('notify_2')); ?>" />
                                    <?php $__errorArgs = ['notify_2'];
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
    <!--/ Edit Card Modal -->

    <!-- Delete Modal -->
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

        $(document).ready(function() {
            // Attach click event to all edit icons (assuming class 'edit-icon')
            $('.edit-icon').click(function(event) {
                event.preventDefault(); // Prevent default link behavior

                // Get the item ID from the data-item-id attribute
                var itemId = $(this).data('item-id');
                alert(itemId)

                // Use AJAX to fetch item data based on ID
                $.ajax({
                url: '/administration/physician/edit/' + itemId, 
                method: 'GET',
                success: function(data) {
                    console.log(data);
                    // Populate modal input fields with data
                    $('#edit_account_no').val(data.account_no); 
                    var selectedValue = data.account_representative;
                    $('#edit_account_representative option').each(function() {
                        if ($(this).val() === selectedValue) {
                            $(this).prop('selected', true);
                        } else {
                            $(this).prop('selected', false);
                        }
                    });
                    $('#edit_city').val(data.city); 
                    $('#edit_clinic_name').val(data.clinic_name); 
                    $('#edit_facility_name').val(data.facility_name); 
                    $('#edit_fax_no').val(data.fax_no); 
                    $('#edit_first_name').val(data.first_name); 
                    $('#edit_last_name').val(data.last_name); 
                    $('#edit_notify_1').val(data.notify_1); 
                    $('#edit_notify_2').val(data.notify_2); 
                    $('#edit_npi_no').val(data.npi_no); 
                    $('#edit_office_name').val(data.office_name); 
                    $('#edit_pcp_no').val(data.pcp_no); 
                    $('#edit_phone_no').val(data.phone_no); 
                    $('#edit_street_address').val(data.street_address); 
                    $('#edit_zip_code').val(data.zip_code); 
                    $('#edit_state').val(data.state); 
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Laravel\Sakil Ahmed\working\resources\views/pages/physician/list.blade.php ENDPATH**/ ?>