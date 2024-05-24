

<?php $__env->startSection('content'); ?>
<style>
.flex-container {
  display: flex;
  flex-wrap: wrap;

}

.flex-container > div {
    background-color: rgb(255, 30, 49);
  margin: 20px;
  padding: 20px;
  font-size: 16px;
  text-align: center;
 
  box-sizing: border-box;
}

.flex-container > div h4 {
  margin-bottom: 15px;
  color:white;
}

.flex-container .btn {
  display: inline-block;
  margin: 10px 10px;
}
</style>

<div class="container mt-4">
    <p class="text-center" style="margin-top:70px; margin-bottom:40px;">Organization With Their Software</p>
    <div class="flex-container">
        <?php $__currentLoopData = $organizations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $organization): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <h4><?php echo e($organization->name); ?></h4>
                <?php $__currentLoopData = $organization->software; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $software): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button type="button" class="btn btn-outline-info mb-2">
                        <a href="<?php echo e($software->url); ?>" target="_blank" style="text-decoration: none; border: 2px solid white; background-color: white; padding: 10px; color: red;">
                            <?php echo e($software->name); ?>

                        </a>
                    </button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.publicguest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\UronTask\resources\views/public/organizations.blade.php ENDPATH**/ ?>