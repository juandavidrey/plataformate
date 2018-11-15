<?php $__env->startSection('content'); ?>
<!-- menu-->

<!-- menu-->

<body>
<br>
   <div class="container" style="margin-top: 0.5%;">
    <div class="col-lg-4 col-md-4 col-xs-4">
      <div class="rotacion">
	  <a href="http://enterate.plataformate.com">
        <img class="img-responsive" src=<?php echo e(asset ( 'assets/img/Circulo1.png')); ?>>
		
      </div>
      <a href="http://enterate.plataformate.com">
        <!--<img src=<?php echo e(asset ( 'assets/img/play.png')); ?> hspace="150" vspace="150" class="sobre">-->
      </a>
      <div class="indexText"> Entérate </div>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-4">
      <div class="rotacion">
	   <a href="http://formate.plataformate.com">
          <img class="img-responsive" src=<?php echo e(asset ( 'assets/img/Circulo2.png')); ?>>
		 
      </div>
      <a href="http://formate.plataformate.com">
       <!-- <img src=<?php echo e(asset ( 'assets/img/play.png')); ?> hspace="150" vspace="150" class="sobre">-->
      </a>
      <div class="indexText"> Fórmate </div>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-4">
      <div class="rotacion">
	   <a href="<?php echo e(URL::to('mapa')); ?>">
        <img class="img-responsive" src=<?php echo e(asset ( 'assets/img/Circulo3.png')); ?>>
		 </a>
      </div>
     <a href="<?php echo e(URL::to('mapa')); ?>">
        <!--<img src=<?php echo e(asset ( 'assets/img/play.png')); ?> hspace="150" vspace="150" class="sobre">-->
     </a>
      <div class="indexText"> Caracterízate </div>
    </div>
  </div>

  <!--<div class="row">-->
  </br>
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<!-- Estilos CSS -->
<link rel="stylesheet" href="assets/css/map.css">
<link rel="stylesheet" href="assets/css/style.css">
<?php $__env->stopPush(); ?>

</body>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>