
  
<?php $__env->startSection('title', 'Show Voter'); ?>
  
<?php $__env->startSection('contents'); ?>
    <h1 class="mb-0">Detail Voter</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">candidate</label>
            <input type="text" name="candidate" class="form-control" placeholder="candidate" value="<?php echo e($Voter->candidate); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">BSN</label>
            <input type="text" name="BSN" class="form-control" placeholder="BSN" value="<?php echo e($Voter->BSN); ?>" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Voter_code</label>
            <input type="text" name="Voter_code" class="form-control" placeholder="Voter Code" value="<?php echo e($Voter->Voter_code); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly><?php echo e($Voter->description); ?></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="<?php echo e($Voter->created_at); ?>" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="<?php echo e($Voter->updated_at); ?>" readonly>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bergs\Ivote\resources\views/Voter/show.blade.php ENDPATH**/ ?>