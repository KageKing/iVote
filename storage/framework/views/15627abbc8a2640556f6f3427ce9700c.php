
  
<?php $__env->startSection('title', 'Create Voter'); ?>
  
<?php $__env->startSection('contents'); ?>
    <h1 class="mb-0">Add Voter</h1>
    <hr />
    <form action="<?php echo e(route('Voters.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="candidate" class="form-control" placeholder="candidate">
            </div>
            <div class="col">
                <input type="text" name="BSN" class="form-control" placeholder="BSN">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Voter_code" class="form-control" placeholder="Voter Code">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bergs\Ivote\resources\views/Voters/create.blade.php ENDPATH**/ ?>