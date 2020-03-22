<?php $__env->startSection('content'); ?>
<title>QBM: Gestion Des Employes</title>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        
        <center><img src="<?php echo e(URL::asset("img/rh1.png")); ?>" height="190px" weidth="190px">  
        <h1>Liste Des Employees</h1>
        <div class="pull-right">
         <a href="<?php echo e(url('employes/create')); ?>" class="btn btn-success">Nouveau Employé?</a>
         </div><div class="pull-left">
        <a href="<?php echo e(url('employes/all')); ?>" class="btn btn-danger">Afficher Tout</a>

         </div>
         
        
        <table class="table">
        <head>
            <tr>
                <th>ID</th>            
                <th>M°Employé</th>
                <th>NomComplet</th>        
                <th>DateD'ajout</th> 
                <th>Actions</th>
            </tr>
        </head>
        <body>
        <?php $__currentLoopData = $employes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($employe->id); ?></td>
                <td><?php echo e($employe->matricule); ?></td>
                <td><?php echo e($employe->nomc); ?></td>
                
                <td><?php echo e($employe->created_at); ?></td>
                <td>
                <form action="<?php echo e(url('employes/'.$employe->id)); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('DELETE')); ?>

                <a  href="<?php echo e(url('employes/'.$employe->id.'/show')); ?>" class="btn btn-primary">Details</a>
                <a  href="<?php echo e(url('employes/'.$employe->id.'/edit')); ?>" class="btn btn-default">Editer</a>
                
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