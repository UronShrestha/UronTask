


<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-10">
        <?php if(session('status')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('status')); ?>

            </div>

             <?php endif; ?>
       </div>
    <div class="row justify-content-center">
        <div class="col-10">
<a href="<?php echo e(route('organizations.create')); ?>" class="btn btn-success btn-sm mb-3">Add New Organization</a>
      
   

       
<table class="table table-striped table-bordered">
    <thead>
        <?php
        $sn=1
    ?> 
    <th>S.N</th>
        <th>Id</th>
        <th> Organizations Name</th>
        <th>Organization Address</th>
        <th>Organization Description</th>
        
        <th>Delete</th>
        <th>Update</th>

    </thead>
    <?php $__currentLoopData = $organizations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $organization): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($sn++); ?>

            <td><?php echo e($organization->id); ?></td>
            <td><?php echo e($organization->name); ?></td>
            <td><?php echo e($organization->address); ?></td>
            <td><?php echo e($organization->orgdesc); ?></td>
            
            
            <td>
              <form action="<?php echo e(route('organizations.destroy',$organization->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>   
           <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
    </td>
            <td><a href="<?php echo e(route('organizations.edit',$organization->id)); ?>" class="btn btn-warning btn-sm">Update</a></td>
            
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\UronTask\resources\views/organization/HomeOrganization.blade.php ENDPATH**/ ?>