<?php $__env->startSection('content'); ?>
    <h1>Winkelkar overzicht</h1>
    <a href="shoppingcart/edit">pas aan</a>
    <a href="shoppingcart/remove">verwijder</a>
    <a href="buy">koop</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guest', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>