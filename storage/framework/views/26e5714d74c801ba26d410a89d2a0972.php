<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Organization Used Software</div>
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <table class="table table-striped table-bordered">
                        <thead>
                        
                           <?php
                               $sn=1
                           ?> 
                            <tr>
                                <th>S.N</th>
                                <th>Organization Name</th>
                                <th>Address</th>
                                <th>Software Used</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $organizations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $organization): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($sn++); ?></td>
                                    <td><?php echo e($organization->name); ?></td>
                                    <td><?php echo e($organization->address); ?></td>
                                    <td>
                                        <?php $__currentLoopData = $organization->software; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $software): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($software->name); ?>

                                            <?php if(!$loop->last): ?>, <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\UronTask\resources\views/dashboard.blade.php ENDPATH**/ ?>