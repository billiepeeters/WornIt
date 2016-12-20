<?php $__env->startSection('content'); ?>
<h1>Login</h1>
    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
    
    <?php echo e(csrf_field()); ?>


        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <div class="formTotal">
               <label for="email">
                   E-Mail Address
                </label>
                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                <?php if($errors->has('email')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>   
            </div>
        </div>

        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
            <div class="formTotal">
                <label for="password">
                Password
                </label>
                <input id="password" type="password" class="form-control" name="password" required>

                <?php if($errors->has('password')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
        </div>
 
    <!--   
    <div class="form-group">
        <div class="formTotal">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
            </div>
        </div>
    </div>
    -->

    <div class="form-group">
        <div class="formTotal">
            <button type="submit" class="btn btn-primary">
                Login
            </button>
         </div>
    </div>
     
    <div class="formTotal">
        <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">
            Wachtwoord vergeten?
        </a>
    </div>
         
    <div class="formTotal">
        <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">
            Nog geen account?
        </a>
    </div>

</form>
             
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>