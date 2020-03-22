<?php $__env->startSection('content'); ?>

<div class="container" id="app">
	<div class="row">
		<div class="col-md-12">
        <div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-10"><h3 class="panel-title">Informations De Matériel</h3></div>
						
					</div>
					
				</div>
				<div class="panel-body">
                <?php $__currentLoopData = $stocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
					<ul class="list-group">
						<li class="list-group-item">
						<center><img src="<?php echo e(URL::asset("img/dez.png")); ?>" height="245px" weidth="245px">
						<h1>INFO MAT</h1></center>
						 <table >
                         
                             <th><h3>*Type &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</h3></th>
                             <td><h4><br>&nbsp;&nbsp;&nbsp; &nbsp;<?php echo e($stock->type); ?></h4></td>
                            </tr>
					     	<tr>
                             <th><h3>*Série &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</h3></th>
                             <td><h4><br>&nbsp;&nbsp;&nbsp; &nbsp;<?php echo e($stock->serie); ?></h4></td>
                            </tr>
                            <tr>
                             <th><h3>*Modele&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</h3></th>
                             <td><h4><br>&nbsp; &nbsp;&nbsp; &nbsp;<?php echo e($stock->modele); ?></h4></td>
                            </tr>
                            <tr>
                             <th><h3>*Fabriquant&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</h3></th>
                            <td><h4><br>&nbsp; &nbsp;&nbsp; &nbsp;<?php echo e($stock->fabriquant); ?></h4></td>
                            </tr>
							<tr>
                             <th><h3>Date D'Entrée&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</h3></th>
                             <td><h4><br>&nbsp;&nbsp;&nbsp; &nbsp;<?php echo e($stock->dateE); ?></h4></td>
                            </tr>
                            <tr>
                             <th><h3>*La Source&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</h3></th>
                             <td><h4><br>&nbsp; &nbsp;&nbsp; &nbsp;<?php echo e($stock->source); ?></h4></td>
                            </tr>
                            
                         </table>
							
						</li>
					</ul>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>

			
					
				
			

			

		  
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>