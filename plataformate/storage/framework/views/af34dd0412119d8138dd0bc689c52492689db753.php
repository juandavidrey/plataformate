<?php $__env->startSection('header'); ?>
<h1>Editar municipio <?php echo e($municipio->name); ?></h1>
<small>Información del municipio</small>
<ol class="breadcrumb">
  <li><a href=" <?php echo e(route('dashboard')); ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
  <li><a href=" <?php echo e(route('admin.muninfo.index')); ?>"><i class="fa fa-list"></i>Información del municipio</a></li>
  <li class="active">crear</li>
</ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<!-- Uso de laravel collective -->
	<?php echo e(Form::model($municipio, array('route' => array('admin.muninfo.update', $municipio->id), 'method' => 'PUT', 'files' => true))); ?>

	<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-6">
		<div class="box box-primary">
			<div class="box-body">
					
						<div class="form-group <?php echo e($errors->has('representante1') ? 'has-error': ''); ?>">
								<?php echo e(Form::label('representante1', 'Nombre del representante 1')); ?>

								<?php echo e(Form::text('representante1', null, array('class' => 'form-control', 'placeholder'=>'Digita el nombre del representante'))); ?>

                <?php echo $errors->first('representante1', '<span class="help-block">:message</span>'); ?>

						</div>
            
						<div class="form-group <?php echo e($errors->has('rol_rep_1') ? 'has-error': ''); ?>">
							<?php echo e(Form::label('rol_rep_1', 'Rol del representante 1')); ?>

							<?php echo e(Form::text('rol_rep_1', null, array('class' => 'form-control', 'placeholder'=>'Digita el rol del representante'))); ?>

              <?php echo $errors->first('rol_rep_1', '<span class="help-block">:message</span>'); ?>

						</div>
						
						 <div class="form-group <?php echo e($errors->has('correo_rep_1') ? 'has-error': ''); ?>">
					<?php echo e(Form::label('correo_rep_1', 'Correo del representante 1')); ?>

					<?php echo e(Form::text('correo_rep_1', null, array('class' => 'form-control', 'placeholder'=>'Digita el correo electrónico'))); ?>

          <?php echo $errors->first('correo_rep_1', '<span class="help-block">:message</span>'); ?>

				</div>
						<div class="form-group <?php echo e($errors->has('telefono_rep_1') ? 'has-error': ''); ?>">
					<?php echo e(Form::label('telefono_rep_1', 'Teléfono del representante 1')); ?>

					<?php echo e(Form::text('telefono_rep_1', null, array('class' => 'form-control', 'placeholder'=>'Digita el teléfono'))); ?>

          <?php echo $errors->first('telefono_rep_1', '<span class="help-block">:message</span>'); ?>

				</div>
           
						<div class="form-group ">
								<?php echo e(Form::label('fotorep1', 'Foto del Representante 1')); ?>

								<span class="help-block">Carga la foto del Representante 1</span>
								<input type="file" name="fotorep1" accept="image/png,image/gif,image/jpeg" class="BotonesUpload">
							</div>
				
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6">
		<div class="box box-primary">
			<div class="box-body">
       <div class="form-group <?php echo e($errors->has('representante2') ? 'has-error': ''); ?>">
							<?php echo e(Form::label('representante2', 'Nombre del representante 2')); ?>

              <?php echo e(Form::text('representante2', null, array('class' => 'form-control', 'placeholder'=>'Digita el nombre del representante'))); ?>

              <?php echo $errors->first('representante2', '<span class="help-block">:message</span>'); ?>

						</div>
						 <div class="form-group <?php echo e($errors->has('rol_rep_2') ? 'has-error': ''); ?>">
							<?php echo e(Form::label('rol_rep_2', 'Rol del representante 2')); ?>

							<?php echo e(Form::text('rol_rep_2', null, array('class' => 'form-control', 'placeholder'=>'Digita el rol del representante'))); ?>

              <?php echo $errors->first('rol_rep_2', '<span class="help-block">:message</span>'); ?>

						</div>
        <div class="form-group <?php echo e($errors->has('correo_rep_2') ? 'has-error': ''); ?>">
					<?php echo e(Form::label('correo_rep_2', 'Correo del representante 2')); ?>

					<?php echo e(Form::text('correo_rep_2', null, array('class' => 'form-control', 'placeholder'=>'Digita el correo electrónico'))); ?>

          <?php echo $errors->first('correo_rep_2', '<span class="help-block">:message</span>'); ?>

				</div>
        
        <div class="form-group <?php echo e($errors->has('telefono_rep_2') ? 'has-error': ''); ?>">
					<?php echo e(Form::label('telefono_rep_2', 'Teléfono del representante 2')); ?>

					<?php echo e(Form::text('telefono_rep_2', null, array('class' => 'form-control', 'placeholder'=>'Digita el teléfono'))); ?>

          <?php echo $errors->first('telefono_rep_2', '<span class="help-block">:message</span>'); ?>

				</div>
				<div class="form-group ">
								<?php echo e(Form::label('fotorep2', 'Foto del Representante 2')); ?>

								<span class="help-block">Carga la foto del Representante 2</span>
								<input type="file" name="fotorep2" accept="image/x-png,image/jpeg,image/jpg"/ class="BotonesUpload">
							</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="box box-primary">
				<div class="box box-body">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="box box-primary">
						<div class="box-body">
							<div class="form-group ">
								<?php echo e(Form::label('actapdf', 'Acta')); ?>

								<span class="help-block">Carga el documento en PDF de la plataforma municipal</span>
								<input type="file" name="actapdf" accept="application/pdf"/ class="BotonesUpload">
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="box box-primary">
							<div class="box-body">
								<div class="form-group ">
									<?php echo e(Form::label('resolucionpdf', 'Resolución')); ?>

									<span class="help-block">Carga el documento en PDF de la plataforma municipal</span>
									<input type="file" name="resolucionpdf" accept="application/pdf" class="BotonesUpload">
								</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="box box-primary">
						<div class="box-body">
							<div class="form-group">
								<?php echo e(Form::label('decretopdf', 'Decreto')); ?>

								<span class="help-block">Carga el documento en PDF de la plataforma municipal</span>
								<input type="file" name="decretopdf" accept="application/pdf" class="BotonesUpload">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="col-md-12">
			<?php echo e(Form::label('actualizar', 'Actualizar municipio')); ?>

			<span class="help-block">Dale clic a actualizar para guardar la información del municipio</span>
			<?php echo e(Form::submit('Actualizar', array('class' => 'btn btn-primary btn-block'))); ?>

		</div>
	<!-- </form> -->
	</div>
	<?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
	<link rel="stylesheet" href="/adminlte/plugins/dropzone/css/dropzone.min.css">
	<link rel="stylesheet" href="/adminlte/css/ImputType.css">
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>