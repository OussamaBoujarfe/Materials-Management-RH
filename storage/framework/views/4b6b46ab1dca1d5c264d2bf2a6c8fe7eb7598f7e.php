<?php $__env->startSection('content'); ?>
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
        
           <form action="<?php echo e(url('materiels/'.$materiel->id)); ?>" method="post"> 
           <input type="hidden" name="_method" value="PUT">

                <?php echo e(csrf_field()); ?>


             <div class="form-group">
             <center><img src="<?php echo e(URL::asset("img/de.png")); ?>" height="250px" weidth="250px">  
             <h1>QBM: Attribution Du Matériel</h1></center>
             <br><br>
              
             <label for="">Nom Complet D'employé :</label>
               <input  type="text" name="nomc" class="form-control" value="<?php echo e($materiel ->nomc); ?>" >
             <label for="">Matricule D'employé :</label>
               <input  type="text" name="matricule" class="form-control" value="<?php echo e($materiel ->matricule); ?>" >


               
             </div>

             <div class="form-group">
               <label for="">N° Serie :</label>
               <input type="text" name="Nserie" class="form-control" value="<?php echo e($materiel ->Nserie); ?>">
             </div>

            
            
             <div class="form-group">
               <label for=""> Modele :</label>
               <input type="text" name="modele" class="form-control" value="<?php echo e($materiel ->modele); ?>">
             </div>

             <div class="form-group col-md-4">
                <label for="inputState">Type Device :</label>
               <select id="inputState" class="form-control" name="type" value="<?php echo e($materiel ->type); ?>">
                <option selected>Telephone</option>
                <option>Pc Portable</option>
                <option>Ordinateur Fix</option>
               </select>
             </div>

             <div class="form-group col-md-4">
                <label for="inputState">Fabriquant :</label>
               <select id="inputState" class="form-control" name="fabriquant" value="<?php echo e($materiel ->fabriquant); ?>">
               <option>ACER</option>
                <option>ALCATEL</option>
                <option>ASUS</option>       
                <option>BLACKBERRY</option>
                <option>DELL</option>                
                <option>HP</option>
                <option>HTC</option>
                <option>HUAWEI</option>
                <option>IBM</option>
                <option>INFINIX</option>
                <option>IPHONE Apple</option>
                <option>LENOVO</option> 
                <option>LG</option>
                <option>MOTOROLA</option>
                <option>NOKIA</option> 
                <option>OPPO</option>  
                <option>PHILIPS</option>
                <option selected>SAMSUNG</option>
                <option>SONY</option>
                <option>TOSHIBA</option>
                <option>WINDOWSPhone</option>                 
                <option>ZTE</option>
               </select>
             </div>

             <div class="form-group">
                <input type="submit"  class="form-control btn btn-danger"   value="modifier">  
             </div

           </form>
              
        </div>
    </div>
 </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>