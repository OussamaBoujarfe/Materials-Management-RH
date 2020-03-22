<?php $__env->startSection('content'); ?>
<title>QBM: Gestion Des Employes</title>


<div class="container">
    <div class="row">
        <div class="col-md-12">
        

        
        
     <center>   <img src="<?php echo e(URL::asset("img/pp.png")); ?>" height="70px" weidth="60px">
        <h3>Listes Des Employes</h3><br><input class="btn btn-primary" type="button" onclick="window.print()" value="Imprimer" />
        
        <br><br></center>
        
        <table id="tab"  class="table" >
        <head>
            <tr>
               <th>ID</th>  
               <th>MA°</th> 
                <th>NomComplet</th>
                <th>Fonction</th>  
               <th>Departement</th> 
                <th>Etat</th>
                <th>DateD'ajout</th>
                
            </tr>
        </head>
        <body>
        <?php $__currentLoopData = $employes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($employe->id); ?></td>
                <td><?php echo e($employe->matricule); ?></td>
                <td><?php echo e($employe->nomc); ?></td>
                <td><?php echo e($employe->fonction); ?></td>
                <td><?php echo e($employe->departement); ?></td>
                <td><?php echo e($employe->etat); ?></td>
                <td><?php echo e($employe->created_at); ?></td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </body>   
        </table>
        
        
        
        </script>
        <center><?php echo e($employes->links()); ?> </center>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>