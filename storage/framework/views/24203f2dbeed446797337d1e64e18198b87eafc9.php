<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('konten'); ?>
<div class="card-list">
    <div class="product-detail">

        <div class="product-image">
            <h2><?php echo e($data->item_name); ?></h2>
            <br>
            <img width="50%" src="<?php echo e(URL::asset('/images/item.png')); ?>" alt="Product Image">
        </div>
        <div class="product-info">
            <h3>Price: Rp.<?php echo e($data->price); ?></h3>
            <br>
            <p><?php echo e($data->item_desc); ?></p>
        </div>
    </div>
    <div class="button">
        <form action="<?php echo e(route('buy')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="price" value="<?php echo e($data->price); ?>">
            <input type="hidden" name="item_id" value="<?php echo e($data->item_id); ?>">
            <button type="submit">Buy</button>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/detail.blade.php ENDPATH**/ ?>