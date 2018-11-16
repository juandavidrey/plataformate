<?php $__env->startSection('title', 'Página no encontrada'); ?>

<?php $__env->startSection('message', 'La página que estaba buscando no ha sido encontrada o no existe'); ?>

<?php echo $__env->make('errors::layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>