<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('konten'); ?>
<div class="form-container">
    <h1>Register</h1>
    <br>
    <form action="/register" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-row">
            <div class="form-col">
                <label for="fname">Full Name : </label>
                <input name="fname" type="text" placeholder="First Name">
            </div>
            <div class="form-col">
                <label for="lname">Last Name : </label>
                <input name="lname" type="text" placeholder="Last Name">
            </div>
        </div>
        <div class="form-row">
            <div class="form-col">
                <label for="email">Email : </label>
                <input name="email" type="email" placeholder="Email">
            </div>
            <div class="form-col">
                <label for="role">Role : </label>
                <select name="role" id="role">
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-col">
                <label for="lname">Gender : </label>
                <input type="radio" id="male" name="gender" value="1">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="2">
                <label for="female">Female</label>
            </div>
            <!-- <div class="form-col">
                <label for="lname">Display Picture : </label>
                <input type="file" name="image" placeholder="Upload Picture">
            </div> -->
        </div>
        <div class="form-row">
            <div class="form-col">
                <label for="password">Password : </label>
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="form-col">
                <label for="cpassword">Confirm Password : </label>
                <input type="password" name="cpassword" placeholder="Confirm Password">
            </div>
        </div>
        <input type="submit" value="Submit">
        <a href="<?php echo e(url('login')); ?>">Already have an account? Login</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gregorius gilang\Desktop\Kampus\.punya gilang\Materi\ngadi ngadi\Uas Training\example-app\resources\views/register.blade.php ENDPATH**/ ?>