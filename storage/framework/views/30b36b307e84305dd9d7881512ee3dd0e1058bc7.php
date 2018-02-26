<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                  <center><h2> Index</h2></center><br>
                  
                     <table class="table" >
                      <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <th colspan="2"> Author : <?php echo e($author->name); ?></th>  
                            <tr>
                              <th><center>Title</center></th>
                              <th><center>Genres</center></th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($book->author_id == $author->id): ?>
                              <tr>
                                <td><center><?php echo e($book->title); ?></center></td> 
                                <td><center><?php echo e($book->genres); ?></center></td> 
                                 
                              </tr>
                              <?php endif; ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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