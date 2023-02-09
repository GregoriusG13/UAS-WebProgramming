<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('konten'); ?>
<div class="form-container">
    <h1>Login</h1>
    <br>
    <form action="<?php echo e(route('login')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <label for="email">Email : </label>
        <input name="email" type="email" placeholder="Email">
        <label for="password">Password : </label>
        <input name="password" type="password" placeholder="Password">
        <input type="submit" value="Submit">
        <a href="<?php echo e(url('register')); ?>">Don't have an account? Register</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/login.blade.php ENDPATH**/ ?>