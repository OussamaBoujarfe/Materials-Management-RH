<?php $__env->startSection('content'); ?>
<title>QBM: Gestion D'attribution</title>
<div class="container" id="app">
<input class="btn btn-success" type="button" onclick="window.print()" value="CopyPrint" />
	<div class="row">
		<div class="col-md-12">
        <div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-10"><h3 class="panel-title">INFO ATTR</h3></div>
						<div class="col-md-2 text-right">
                       
						</div>
					</div>
					
				</div>
				<div class="panel-body">
                <?php $__currentLoopData = $materiels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materiel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
					<ul class="list-group">
						<li class="list-group-item">
                        <img src="<?php echo e(URL::asset("img/mul.png")); ?>" height="150px" weidth="150px">
                        <img src="<?php echo e(URL::asset("img/dd.png")); ?>" width="300px" height="195px" align="right">
                        
						<h1>Informations Sur L'attribution</h1>
                        
                        
						 <table >
                         
                         <tr>
                             <th><h3>*Nom Complet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></th>
                             <td><h4><br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($materiel->nomc); ?></h4></td>
                            </tr>
						 <tr>
                             <th><h3>*Matricule Employé&nbsp;</h3></th>
                             <td><h4><br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($materiel->matricule); ?></h4></td>
                            </tr>
                           
                            <tr>
                             <th><h3>*Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></th>
                            <td><h4><br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($materiel->type); ?></h4></td>
                            </tr>
							<tr>
                             <th><h3>*Fabriquant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></th>
                             <td><h4><br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($materiel->fabriquant); ?></h4></td>
                            </tr>
                             <tr>
                             <th><h3>*Numéro Série&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></th>
                             <td><h4><br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($materiel->Nserie); ?></h4></td>
                            </tr>
                            <tr>
                             <th><h3>*Modele&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></th>
                             <td><h4><br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($materiel->modele); ?></h4></td>
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