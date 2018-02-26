<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
      <center> <h3>List Book</h3> </center><br>
        <div class="col-md-8 col-md-offset-2">

          <?php if(count($errors) > 0): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="alert alert-danger"><?php echo e($error); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <?php if(session('response')): ?>
                    <div class="alert alert-success"><?php echo e(session('response')); ?></div>
                <?php endif; ?>

            <table class="table" >
           
                  <thead>
                    <tr>
                      
                      <th><center>Title</center></th>
                      <th><center>Author ID</center></th>
                      <th><center>Genres</center></th>
                      <th><center>Synopsis</center></th>
                      <th colspan="2"><center>Action</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                  
                     <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <td style="width:20%"><?php echo e($book->title); ?></td>
                      <td style="width:20%"><?php echo e($book->author_id); ?></td> 
                      <td style="width:15%"><?php echo e($book->genres); ?></td>
                      <td style="width:20%"><?php echo e($book->synopsis); ?></td> 
                      <td style="width:4%">  <a href="<?php echo e(URL('book/' . $book->id . '/edit')); ?>" class="btn btn-xs btn-primary">Update</a>
                      </td> 
                      <td style="width:4%">  <a href="<?php echo e(URL("/book/delete/{$book->id}")); ?>" class="btn btn-xs btn-primary">Delete</a>
                      </td>
    
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
            
             </table>

            
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>