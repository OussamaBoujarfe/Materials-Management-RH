<?php $__env->startSection('content'); ?>
<style>
.d{margin-left:527px;
   
   
}
</style>
 <?php if(count($errors)): ?>
<div class="alert alert-danger" role="alert">
<ul>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><?php echo e($message); ?>  </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</div>
  <?php endif; ?>

 <div class="container">
    <div class="row">
        <div class="col-md-12">

           <form action="<?php echo e(url('employes/'.$employe->id)); ?>" method="post"> 
           <input type="hidden" name="_method" value="PUT">
                <?php echo e(csrf_field()); ?>


             <div class="form-group">
             <center><img src="<?php echo e(URL::asset("img/rh.png")); ?>" height="190px" weidth="190px">  
             <h1>Informations D'employé Damandant Matériels</h1></center>
             <br><br>

               <label for="">Matricule :</label>
               <input  type="text" name="matricule" class="form-control" value="<?php echo e($employe ->matricule); ?>" >
             </div>

             <div class="form-group">
               <label for="">Nom Complet :</label>
               <input type="text" name="nomc" class="form-control" value="<?php echo e($employe ->nomc); ?>">
             </div>

            
            <div class="form-group">
               <label for="">Fonctionnement :</label>
               <input type="text" name="fonction" class="form-control" value="<?php echo e($employe ->fonction); ?>">
             </div>
             
             <div class="form-group col-md-4">
                <label for="inputState">Departement :</label>
               <select id="inputState" class="form-control" name="departement" value="<?php echo e($employe ->departement); ?>">

                  <option selected>FS-Approvisionement et Achats</option>
                  <option>FS-Audit interne</option>
                  <option>FS-Control de Gestion</option>
                  <option>FS-Finance et Administration</option>
                  <option>FS-Logistique et Export</option>
                  <option>FS-Maintenance Fermes</option>
                  <option>FS-Maintenance Station</option>
                  <option>FS-Management</option>
                  <option>FS-Protection phyto developement</option>
                  <option>FS-Qualité</option>
                  <option>FS-RH FERMES</option>
                  <option>FS-RH STATION</option>
                  <option>FS-Système d'information</option>
                  <option>OP-Plein champ producteurs</option>
                  <option>OP-Plein champs Sud</option>
                  <option>OP-Serre Producteur</option>
                  <option>OP-Serre QBM</option>
                  <option>OP-Station Sud</option>
                  <option>Service général</option>

               
               </select>
             </div>


             <div class="form-group col-md-4">
                <label for="inputState">Etat :</label>
               <select id="inputState" class="form-control" name="etat" value="<?php echo e($employe ->etat); ?>">
                <option selected>active</option>
                <option>inactive</option>
                
               </select>
             </div>
             <br><br><br><br><br><br><br><br><br>
             <div class="form-group">
             
           <!--   <a href="<?php echo e(url('materiels')); ?>" type="submit"  class="btn btn-success d">suivant</a>--> 
               <input type="submit"   class="form-control btn btn-primary" value="Modifier"> 
             </div

           </form>
              
        </div>
    </div>
 </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>