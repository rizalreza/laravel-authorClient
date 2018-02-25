<?php $__env->startSection('content'); ?>
	<div class="container">
		<div class="row center">
			<div class="col-sm-6 col-sm-offset-3">
			<form class="" action="<?php echo e(route('book.store')); ?>" method="post">
				<?php echo e(csrf_field()); ?>

				<div class="form-group">
					<label for="">Book Title</label>
					<input type="text" class="form-control" name="title">
				</div>

				<div class="form-group">
					<label for="">Author ID</label>
					<input type="text" class="form-control" name="author_id">
				</div>

				<div class="form-group">
					<label for="">Genres</label>
					<input type="text" class="form-control" name="genres">
				</div>

				<div class="form-group">
					<label for="">Synopsis</label>
					<textarea type="text" class="form-control" name="synopsis" style=" height: 150px"></textarea> 
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Save" name="">
				</div>
				
			</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>