<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <center><h2> Index</h2></center>
                </div>

                <div class="panel-body">
                     <table class="table" >
                          <thead>
                            <tr>
                              <th><center>Author</center></th>
                              <th><center>Title</center></th>
                              <th><center>Genres</center></th>
                    
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                 <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <td style="width:20%"><?php echo e($book->author_id); ?></td> 
                                  <td style="width:20%"><?php echo e($book->title); ?></td>
                                  <td style="width:15%"><?php echo e($book->genres); ?></td>
                                 
                            </tr>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                    
                     </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>