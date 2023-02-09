<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('konten'); ?>
<div class="form-container">
    <h1>cart!</h1>
    <table class="table">
        <tbody>
            <?php $jumlah = 0; ?>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <img width="100px" src="<?php echo e(URL::asset('/images/item.png')); ?>" alt="Product Image">
                </td>
                <td><?php echo e($item->item_name); ?></td>
                <td><?php echo e($item->price); ?></td>
                <td>
                    <form action="post"></form>
                    <a href="<?php echo e(route('delete',$item->order_id)); ?>">delete</a>
                </td>
            </tr>
            <?php $jumlah += $item->price;  ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <br>
    <h3>Total: <?php echo e($jumlah); ?></h3>

    <div class="button">
        <form action="<?php echo e(route('buy')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <button type="submit">Buy</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gregorius gilang\Desktop\Kampus\.punya gilang\Materi\ngadi ngadi\Uas Training\example-app\resources\views/cart.blade.php ENDPATH**/ ?>