


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
<a href="<?php echo e(route('software.create')); ?>" class="btn btn-success btn-sm mb-3">Add New Software</a>
    
   

       
<table class="table table-striped table-bordered">
    <thead>
    
    <th>SN
     
        <th> Software Name</th>
        <th>Software Url</th>
        <th>Software Description</th>
        
        <th>Delete</th>
        <th>Update</th>

    </thead>
    <?php $__currentLoopData = $pagedSoftware; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $software): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        
            <td><?php echo e($software->id); ?></td>
            <td><?php echo e($software->name); ?></td>
            <td><?php echo e($software->url); ?></td>
            <td><?php echo e($software->softwaredesc); ?></td>
            
            
            <td>
              <form action="<?php echo e(route('software.destroy',$software->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>   
           <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
    </td>
            <td><a href="<?php echo e(route('software.edit',$software->id)); ?>" class="btn btn-warning btn-sm">Update</a></td>
            
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<div class="mt-4">
    <?php echo e($pagedSoftware->links()); ?>  
</div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\UronTask\resources\views/software/HomeSoftware.blade.php ENDPATH**/ ?>