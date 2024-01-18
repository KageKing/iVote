
  
<?php $__env->startSection('title', 'Edit Voter'); ?>
  
<?php $__env->startSection('contents'); ?>
    <h1 class="mb-0">Edit Voter</h1>
    <hr />
    <form action="<?php echo e(route('Voters.update', $Voter->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">candidate</label>
                <input type="text" name="candidate" class="form-control" placeholder="candidate" value="<?php echo e($Voter->candidate); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">BSN</label>
                <input type="text" name="BSN" class="form-control" placeholder="BSN" value="<?php echo e($Voter->BSN); ?>" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Voter Code</label>
                <input type="text" name="Voter_code" class="form-control" placeholder="Voter Code" value="<?php echo e($Voter->Voter_code); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" ><?php echo e($Voter->description); ?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bergs\Ivote\resources\views/Voters/edit.blade.php ENDPATH**/ ?>