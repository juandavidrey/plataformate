 <?php $__env->startSection('content'); ?>
<!-- menu-->

<!-- menu-->
<div class="cuerpo">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-4 col-md-12 col-sm-12 col-xl-4">
    
      <div class="rotacion justify-content-center">
        <a href="http://enterate.plataformate.com ">
          <img class="img-responsive " src=<?php echo e(asset ( 'assets/img/Circulo1.png')); ?>> 
        </a>
      </div>
      <div class="indexText "> Entérate </div>
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12 col-xl-4">
    
        <div class="rotacion justify-content-center">
          <a href="http://formate.plataformate.com ">
            <img class="img-responsive " src=<?php echo e(asset ( 'assets/img/Circulo2.png')); ?>> 
          </a>
        </div>
        <div class="indexText "> Fórmate </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 col-xl-4">
      
      <div class="rotacion justify-content-center">
            <a href="<?php echo e(URL::to( 'mapa')); ?> ">
              <img class="img-responsive " src=<?php echo e(asset ( 'assets/img/Circulo3.png')); ?>> 
            </a>
          </div>
      <div class="indexText "> Caracterízate </div>
      </div>
  </div>
  
</div>

</div>

<div>
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
  <link rel="stylesheet " href="assets/css/map.css ">
  <link rel="stylesheet " type="text/css " href="assets/css/headerStyle.css ">
  
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>