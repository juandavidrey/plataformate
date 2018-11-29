<!---->

<?php $__env->startSection('content'); ?>
<!--Contenido-->

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pdj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if($loop->first): ?>
  <!--Documentos-->
  <div class="row" >
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
      <?php if( !empty( $pdj->municipio->acta ) ): ?>
        <center>
          <button type="button" style="border-radius:20px" class="btn btn-default" onclick="window.open('<?php echo e(Storage::url( $pdj->municipio->acta )); ?>')">Acta</button>
        </center>
      <?php endif; ?>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
      <?php if( !empty( $pdj->municipio->resolucion ) ): ?>
        <center>
          <button type="button" style="border-radius:20px" class="btn btn-default" onclick="window.open('<?php echo e(Storage::url( $pdj->municipio->resolucion )); ?>')">Resoluci&oacuten</button>
        </center>
      <?php endif; ?>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
      <?php if( !empty( $pdj->municipio->decreto ) ): ?>
        <center>
          <button type="button" style="border-radius:20px" class="btn btn-default" onclick="window.open('<?php echo e(Storage::url( $pdj->municipio->decreto )); ?>')">Decreto</button>
        </center>
      <?php endif; ?>
    </div>
  </div>
  <!--Fin documentos-->

  <div class="row">
    <div class=" col-sm-8 col-md-11 col-lg-12">
      <h4 align="center"><?php echo e($pdj->municipio->nombre); ?></h4>
      <h4 align="center">Representantes ante la PDJ</h4>
    </div>
  </div>
  <!--información de los representantes de la PDJ-->
  <div class="row">
    <div class=" col-sm-2 col-md-2 col-lg-2">
    </div>
    <div class="col-xs-8 col-sm-4 col-md-4 col-lg-4" >
      <ul>
        
        <figure >
          <img src="<?php echo e(Storage::url( $pdj->municipio->fotorep1 )); ?>" class="img-responsive" id="ImgOrganizaciones" alt="" >
        </figure>
        
        <h5><?php echo e($pdj->municipio->representante1); ?></h5>
        <li><?php echo e($pdj->municipio->rol_rep_1); ?></li>
        <li><?php echo e($pdj->municipio->telefono_rep_1); ?></li>
        <li><?php echo e($pdj->municipio->correo_rep_1); ?></li>
      </ul>
    </div>
    <div class="col-xs-8 col-sm-4 col-md-4 col-lg-4">
      <ul>
        
        <figure >

          <img src="<?php echo e(Storage::url( $pdj->municipio->fotorep2 )); ?>" class="img-responsive" id="ImgOrganizaciones" alt="" >
        </figure>

        
        <h5><?php echo e($pdj->municipio->representante2); ?></h5>
        <li><?php echo e($pdj->municipio->rol_rep_2); ?></li>
        <li><?php echo e($pdj->municipio->telefono_rep_2); ?></li>
        <li><?php echo e($pdj->municipio->correo_rep_2); ?></li>
      </ul>
    </div>
    <div class=" col-sm-2 col-md-2 col-lg-2">
    </div>
  </div>
<?php endif; ?>
    <!--fin de la información PDJ-->
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <hr class="separador">
    <div class="row">
      <!--Datos organizacion-->
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" id="imagegroup">
          <?php if($post->photos->count() > 0 ): ?>
          <figure>
            <img src="storage/<?php echo e($post->photos->first()->url); ?>" class="img-responsive" id="ImgOrganizaciones" alt="">
          </figure>
          <?php endif; ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-7" id="asoc">
          <h4 class="asotitle"><?php echo e($post->ngrupo); ?></h4>
          <p class="text-justify" id="asotext"><?php echo e($post->resumen); ?></p>
          <!--link destalles-->
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <ul>
            <h5 align="center">Contacto</h5>
            <li align="center"><?php echo e($post->nombre_contacto); ?></li>
            <li align="center"><?php echo e($post->telefono_contacto); ?></li>
            <li align="center"><?php echo e($post->correo_contacto); ?></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <ul>
            <h5 align="center">Objetivos</h5>
            <li align="justify"><?php echo e($post->objetivos); ?></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <ul>
            <h5 align="center">Rol</h5>
            <li align="center"><?php echo e($post->rol); ?></li>
          </ul>
        </div>
      </div>
    </div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>

 <!-- Estilos CSS -->
<link rel="stylesheet" href="assets/css/map.css">

<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>