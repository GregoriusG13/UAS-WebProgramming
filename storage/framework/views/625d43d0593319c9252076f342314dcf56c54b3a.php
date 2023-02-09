<!DOCTYPE html>
<html>

<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('/app.css')); ?>">


</head>

<body>

    <nav class="navbar">
        <!-- <h1>Amazing E-Grocery</h1> -->
        <a class="header" href="<?php echo e(url('/')); ?>">Amazing E-Grocery</a>

        <?php //show logout button when logged in
        if (Auth::user()) {
        ?>
            <div class="buttons">
                <a href="<?php echo e(url('logout')); ?>">Logout</a>
            </div>
        <?php
        } else {
        ?>

            <div class="buttons">
                <a href="<?php echo e(url('register')); ?>">Register</a>
                <a href="<?php echo e(url('login')); ?>">Login</a>
            </div>

        <?php
        }
        ?>

    </nav>
    <?php if (empty(Auth::user())) {
    } else { ?>
        <div class="section-2">
            <ul class="nav-list">
                <li><a href="<?php echo e(url('home')); ?>">Home</a></li>
                <li><a href="<?php echo e(url('cart')); ?>">Cart</a></li>
                <li><a href="#">Profile</a></li>
                <?php

                if (!empty(Auth::user()) && Auth::user()->role_id == 1) {
                ?>
                    <li><a href="#">Account Maintanence</a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    <?php } ?>

    <!-- bagian konten blog -->
    <?php echo $__env->yieldContent('konten'); ?>

    <div class="footer">
        <p>&copy; Amazing E-Grocery 2023</p>
    </div>

</body>

</html><?php /**PATH C:\Users\gregorius gilang\Desktop\Kampus\.punya gilang\Materi\ngadi ngadi\Uas Training\example-app\resources\views/template.blade.php ENDPATH**/ ?>