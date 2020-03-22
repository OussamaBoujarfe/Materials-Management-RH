<?php $__env->startSection('content'); ?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
        

        
        
     <center>   <img src="<?php echo e(URL::asset("img/pp.png")); ?>" height="110px" weidth="100px">
        <h1>Listes Des Materiels Attribuée</h1><br><input class="btn btn-primary" type="button" onclick="window.print()" value="Imprimer" />
        
        <br><br></center>
        
        <table id="tab"  class="table" >
        <head>
            <tr>
               <th>N°Inventaire</th>  
               <th>NomComplet</th> 
                <th>MA°</th>
                <th>Type</th>  
               <th>Fabriquant</th> 
                <th>Serie</th>
               <th>Modele</th>
                <th>DateD'ajout</th>
                
            </tr>
        </head>
        <body>
        <?php $__currentLoopData = $materiels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materiel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($materiel->id); ?></td>
                <td><?php echo e($materiel->nomc); ?></td>
                <td><?php echo e($materiel->matricule); ?></td>
                <td><?php echo e($materiel->type); ?></td>
                <td><?php echo e($materiel->fabriquant); ?></td>
                <td><?php echo e($materiel->Nserie); ?></td>
                <td><?php echo e($materiel->modele); ?></td>
                <td><?php echo e($materiel->created_at); ?></td>


            
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </body>   
        </table>
        
        
        
        </script>
        <center><?php echo e($materiels->links()); ?> </center>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>