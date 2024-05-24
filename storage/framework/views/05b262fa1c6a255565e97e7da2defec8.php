<!-- resources/views/organization/index.blade.php -->


<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Add Organization')); ?></div>

                    <div class="card-body">
                        <form action="<?php echo e(route('organizations.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                            <label for="Organizationname" class="form-label">Organization Name</label>
                            <input type="text" class="form-control" name="name">
                          </div>
                
                          <div class="mb-3">
                            <label for="ogranizationaddress" class="form-label">Organization Address</label>
                            <input type="text" class="form-control" name="address">
                          </div>
                        
                          <div class="mb-3">
                            <label for="ogranizationaddress" class="form-label">Organization Description</label>
                            <input type="text" class="form-control" name="orgdesc">
                          </div>
                          <div class="mb-3">
                            <label for="software" class="form-label">Software Used</label>
                            <select multiple class="form-control" id="software" name="software[]" required>
                                <?php $__currentLoopData = $software; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soft): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($soft->id); ?>"><?php echo e($soft->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                              <div class="mb-3">
                                 <input type="submit" value="Save" class="btn btn-success">
                          </div>
                
                           </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\UronTask\resources\views/Organization/addorganization.blade.php ENDPATH**/ ?>