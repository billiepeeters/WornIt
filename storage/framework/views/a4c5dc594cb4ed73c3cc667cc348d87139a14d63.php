<?php $__env->startSection('content'); ?>

<h1>registreer</h1>

    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
    
    <?php echo e(csrf_field()); ?>


    <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
        <div class="formTotal">
           <label for="name">
                Naam:
            </label>
            <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
               
            <?php if($errors->has('name')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('name')); ?></strong>
                </span>
            <?php endif; ?> 
        </div>                        
     </div>

    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
        <div class="formTotal">
           <label for="email">
                E-mailadres:
            </label>
            <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

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
                Wachtwoord:
            </label>
            <input id="password" type="password" class="form-control" name="password" required>
               
            <?php if($errors->has('password')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
            <?php endif; ?>
        </div>                       
    </div>

    <div class="form-group">
        <div class="formTotal">
            <label for="password-confirm">
                Bevesitg wachtwoord:
            </label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
    </div>

    <div class="form-group">
        <div class="formTotal">
            <button type="submit" class="btn btn-primary">
                Registreer
            </button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>