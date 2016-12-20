    <div>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <div>
                <p><?php echo e($product->name); ?></p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </div>
<?php echo $__env->make('layouts/worn', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>