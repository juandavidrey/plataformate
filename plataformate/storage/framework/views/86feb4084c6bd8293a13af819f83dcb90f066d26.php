<?php $__env->startSection('header'); ?>
<h1>
	Grupos
	<small>Crear grupo</small>
</h1>
<ol class="breadcrumb">
  <li><a href=" <?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
  <li><a href=" <?php echo e(route('admin.posts.index')); ?>"><i class="fa fa-list"></i> Grupos</a></li>
  <li class="active">crear</li>
</ol>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
  <?php if($post->photos->count() ): ?>
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box box-body">
        <div class="row">
          <?php $__currentLoopData = $post->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <form method="POST" action="<?php echo e(route('admin.photos.destroy', $photo)); ?>">
            <?php echo e(method_field('DELETE')); ?> <?php echo e(csrf_field()); ?>

            <div class="col-xs-4 col-md-3">
              <button class="btn btn-danger btn-xs" style="position:absolute;">
                <i class="fa fa-remove"> </i>
              </button>
              <img class="img-responsive" src="<?php echo e(Storage::url( $photo->url )); ?>">
            </div>
          </form>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <form method="POST" action="<?php echo e(route('admin.posts.update', $post)); ?>" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?> <?php echo e(method_field('put')); ?>

    <div class="col-xs-12 col-sm-8 col-md-8">
      <div class="box box-primary">
        <div class="box-body">
          <div class="box-body">
            <div class="form-group <?php echo e($errors->has('ngrupo') ? 'has-error': ''); ?>">
              <label>Nombre de la organización</label>
              <input name="ngrupo" type="text" class="form-control" value="<?php echo e(old('ngrupo', $post->ngrupo)); ?>" placeholder="Ingresa el nombre del grupo">
							<?php echo $errors->first('ngrupo', '<span class="help-block">:message</span>'); ?>

            </div>
            <div class="form-group">
              <label>Carga las imagenes</label>
              <div class="dropzone"></div>
            </div>
            <div class="form-group <?php echo e($errors->has('resumen') ? 'has-error': ''); ?>">
              <label>Actividades de la organización</label>
              <textarea name="resumen" rows="10" class="form-control" placeholder="Ingresa las Actividades"><?php echo e(old('resumen', $post->resumen)); ?></textarea>
              <?php echo $errors->first('resumen', '<span class="help-block">:message</span>'); ?>

            </div>
            <div class="form-group <?php echo e($errors->has('objetivos') ? 'has-error': ''); ?>">
              <label>Objetivos de la organización</label>
              <textarea name="objetivos" rows="10" class="form-control" placeholder="Ingresa los objetivos de la organización"><?php echo e(old('objetivos', $post->objetivos)); ?></textarea>
              <?php echo $errors->first('rol', '<span class="help-block">:message</span>'); ?>

            </div>
            <div class="form-group <?php echo e($errors->has('body') ? 'has-error': ''); ?>">
              <label>Logros de la organización</label>
              <textarea name="body" rows="10" id="editor" class="form-control" placeholder="Ingresa el contenido completo de la publicación"><?php echo e(old('body', $post->body)); ?></textarea>
              <?php echo $errors->first('body', '<span class="help-block">:message</span>'); ?>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4">
      <div class="box box-primary">
        <div class="box-body">

          <div class="form-group <?php echo e($errors->has('municipio_id') ? 'has-error': ''); ?>">
            <label>Municipio</label>
            <select name="municipio_id" class="form-control">
              <option value="">Seleccione un municipio</option>
              <?php $__currentLoopData = $municipios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $municipio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($municipio->id); ?>" <?php echo e($post->municipio_id == $municipio->id ? 'selected' : ''); ?> ><?php echo e($municipio->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php echo $errors->first('municipio_id', '<span class="help-block">:message</span>'); ?>

          </div>

          <div class="form-group <?php echo e($errors->has('nombre_contacto') ? 'has-error': ''); ?>">
            <label>Nombre de contacto</label>
            <input name="nombre_contacto" type="text" class="form-control" value="<?php echo e(old('nombre_contacto', $post->nombre_contacto)); ?>" placeholder="Ingresa el nombre del representante">
						<?php echo $errors->first('nombre_contacto', '<span class="help-block">:message</span>'); ?>

          </div>
          <div class="form-group <?php echo e($errors->has('correo_contacto') ? 'has-error': ''); ?>">
            <label>Correo de contacto</label>
            <input name="correo_contacto" type="text" class="form-control" value="<?php echo e(old('correo_contacto', $post->correo_contacto)); ?>" placeholder="Ingresa el correo de contacto">
						<?php echo $errors->first('correo_contacto', '<span class="help-block">:message</span>'); ?>

          </div>
          <div class="form-group <?php echo e($errors->has('telefono_contacto') ? 'has-error': ''); ?>">
            <label>Telefono de contacto</label>
            <input name="telefono_contacto" type="text" class="form-control" value="<?php echo e(old('telefono_contacto', $post->telefono_contacto)); ?>" placeholder="Ingresa el telefono de contacto">
						<?php echo $errors->first('telefono_contacto', '<span class="help-block">:message</span>'); ?>

          </div>

          <div class="form-group <?php echo e($errors->has('rol_contacto') ? 'has-error': ''); ?>">
            <label>Rol en la organización</label>
            <textarea name="rol_contacto" class="form-control" placeholder="Rol del contacto en la organización"><?php echo e(old('rol_contacto', $post->rol_contacto)); ?></textarea>
            <?php echo $errors->first('rol_contacto', '<span class="help-block">:message</span>'); ?>

          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Guardar Grupo</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
	<link rel="stylesheet" href="/adminlte/plugins/dropzone/css/dropzone.min.css">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
	<!-- CK Editor -->
	<script src="/adminlte/plugins/ckeditor/ckeditor.js"></script>
	<!--<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>-->
	<!-- Dropzone -->
	<script src="/adminlte/plugins/dropzone/js/dropzone.min.js"></script>
	<script>
		    // Replace the <textarea id="editor"> with a CKEditor
		    // instance, using default configuration.
			CKEDITOR.replace('editor');

			CKEDITOR.config.height = 315;
		    var myDropzone = new Dropzone('.dropzone', {
		    	url:'/admin/posts/<?php echo e($post->url); ?>/photos',
		    	paramName: 'photo',
		    	acceptedFiles: 'image/*',
		    	maxFilesize:2,
		    	headers :{
		    		'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
		    	},
		    	//dictDefaultMessage: 'Arrastra las fotos aquí para subirlas',
		    });

		    myDropzone.on('error', function(file, res){
		    	var msg = res.errors.photo[0];
				//var msg = res.photo[0];
		    	//console.log(res.errors.photo[0]);
		    	$('.dz-error-message:last> span').text(msg);
		    });

		    Dropzone.autoDiscover = false;
	</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>