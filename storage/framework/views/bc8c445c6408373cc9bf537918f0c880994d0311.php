<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('konten'); ?>
<div class="card-list">
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card">
        <img src="<?php echo e(URL::asset('/images/item.png')); ?>" alt="Image">
        <h3><?php echo e($item->item_name); ?></h3>
        <a href="<?php echo e(route('item.show',$item->item_id)); ?>">Detail</a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <br>
    <div class="pagination">
        <a href="<?php echo e($items->previousPageUrl()); ?>" class="<?php echo e(($items->currentPage() == 1) ? 'disabled' : ''); ?>">Previous</a>
        <span>Page <?php echo e($items->currentPage()); ?> of <?php echo e($items->lastPage()); ?></span>
        <a href="<?php echo e($items->nextPageUrl()); ?>" class="<?php echo e(($items->currentPage() == $items->lastPage()) ? 'disabled' : ''); ?>">Next</a>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gregorius gilang\Desktop\Kampus\.punya gilang\Materi\ngadi ngadi\Uas Training\example-app\resources\views/home.blade.php ENDPATH**/ ?>