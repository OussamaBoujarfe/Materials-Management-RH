<?php $__env->startSection('content'); ?>
<title>QBM: Gestion D'attribution</title>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        
     <center>   <img src="<?php echo e(URL::asset("img/de1.png")); ?>" height="300px" weidth="150px">
        <h1>Listes Des Materiels Attribuée</h1><br>
        <a href="<?php echo e(url('materiels/create')); ?>" class="btn btn-success">Nouveau Attribution</a>
        <br><br></center><div class="pull-right">
        <a href="<?php echo e(url('materiels/all')); ?>" class="btn btn-danger">Afficher Tout</a>

         </div>
        <table class="table">
        <head>
            <tr>
               <th>N°Inventaire</th>  
               <th>NomEmployé</th> 
                <th>M°Employé</th>
                 
               
                <th>DateD'operation</th>
                <th>Actions</th>
            </tr>
        </head>
        <body>
        <?php $__currentLoopData = $materiels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materiel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($materiel->id); ?></td>
                <td><?php echo e($materiel->nomc); ?></td>
                <td><?php echo e($materiel->matricule); ?></td>
                
                <td><?php echo e($materiel->created_at); ?></td>

                   <td>
               
                <form action="<?php echo e(url('materiels/'.$materiel->id)); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('DELETE')); ?>

                <a  href="<?php echo e(url('materiels/'.$materiel->id.'/show')); ?>" class="btn btn-primary">Details</a>
                <a  href="<?php echo e(url('materiels/'.$materiel->id.'/edit')); ?>" class="btn btn-default">Editer</a>               
                <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
               
                            
                    </td>

            
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </body>    
        </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>