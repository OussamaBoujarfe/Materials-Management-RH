<?php $__env->startSection('content'); ?>



 <div class="container">
    <div class="row">
        <div class="col-md-12">
        
           <form action="<?php echo e(url('materiels')); ?>" method="post"> 

                <?php echo e(csrf_field()); ?>


             <div class="form-group" >
             <center><img src="<?php echo e(URL::asset("img/de.png")); ?>" height="250px" weidth="250px"> 
             <h1>Attribution Du Matériel</h1></center>
             <br><br>
               
             <div class="form-group col-md-4">
               <label for="">Nom Complet D'employé :</label>
               <select name="nomc"  class="form-control">
               <?php $__currentLoopData = $emp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $em): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($em->nomc); ?>"><?php echo e($em->nomc); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
             </div>
             <div class="form-group col-md-4">
               <label for="">N° Matricule D'employé :</label>
                 <select name="matricule"  class="form-control">
                 <?php $__currentLoopData = $emp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $em): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($em->matricule); ?>"><?php echo e($em->matricule); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
                </select>
                
             </div>


<br><br><br><br><br>
              
             

              

             <div class="form-group <?php if($errors->get('Nserie')): ?> has-error <?php endif; ?>">
               <label for="">N° Serie :</label>
               <input type="text" name="Nserie" class="form-control" value="<?php echo e(old('Nserie')); ?>">
               <?php if($errors->get('Nserie')): ?>
                 <?php $__currentLoopData = $errors->get('Nserie'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <li><?php echo e($message); ?></li>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php endif; ?> 
             </div>

            
            
             <div class="form-group <?php if($errors->get('modele')): ?> has-error <?php endif; ?>">
               <label for=""> Modele :</label>
               <input type="text" name="modele" class="form-control"value="<?php echo e(old('modele')); ?>">
               <?php if($errors->get('modele')): ?>
                 <?php $__currentLoopData = $errors->get('modele'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <li><?php echo e($message); ?></li>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php endif; ?> 
             </div>

             <div class="form-group col-md-4">
                <label for="inputState">Type De Materiel :</label>
               <select id="inputState" class="form-control" name="type" value="<?php echo e(old('type')); ?>">
                <option selected>TELEPHONE</option>
                <option>ORDINATEUR PORTABLE</option>
                <option>TABLETTE</option>
               </select>
             
             </div>

             <div class="form-group col-md-4">
                <label for="inputState">Fabriquant :</label>
               <select id="inputState" class="form-control" name="fabriquant" value="<?php echo e(old('fabriquant')); ?>">
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
                <input type="submit" href="<?php echo e(url('materiels')); ?>" class="form-control btn btn-primary" value="enregistrer">  
             </div

           </form>
              
        </div>
    </div>
 </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>