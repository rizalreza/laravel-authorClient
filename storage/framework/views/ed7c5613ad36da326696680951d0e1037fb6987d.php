<?php $__env->startSection('content'); ?>
	<div class="container">
		<div class="row center">
			<center> <h3>Edit Book</h3> </center><br>
			<div class="col-sm-6 col-sm-offset-3">
			<form class=""  action="<?php echo e(url('/book/update')); ?>/<?php echo e($books->id); ?>" method="POST">
				<?php echo e(csrf_field()); ?>

				<div class="form-group">
					<label for="">Book Title</label>
					   <input type="hidden" class="form-control" name="_method" value="PUT">
					<input type="text" class="form-control" name="title" value="<?php echo e($books->title); ?>" required autofocus>
				</div>

				<div class="form-group">
					<label for="">Author</label>
					<select type="text" class="form-control" name="author_id" required autofocus>
						<option value="">Select Author</option>
                        <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($author->id); ?>"><?php echo e($author->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>

				</div>
				
				<div class="form-group">
					<label for="">Genres</label>
					<input type="text" class="form-control" name="genres" value="<?php echo e($books->genres); ?>" required autofocus>
				</div>

				<div class="form-group">
					<label for="">Synopsis</label>
					<textarea type="text" class="form-control" name="synopsis" style=" height: 150px" required autofocus><?php echo e($books->synopsis); ?></textarea> 
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