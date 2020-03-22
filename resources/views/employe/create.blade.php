@extends('layouts.app')
@section('content')
<title>QBM: Gestion Des Employes</title>
<style>
.d{margin-left:527px;
   
   
}
</style>



 <div class="container">
    <div class="row">
        <div class="col-md-12">
        
           <form action="{{url('employes')}}" method="post"> 

                {{csrf_field()}}

             <div class="form-group @if($errors->get('matricule')) has-error @endif">
             <center><img src="{{ URL::asset("img/rh.png") }}" height="190px" weidth="190px">  
             <h1>Informations D'employé Damandant Matériels</h1></center>
             <br><br>

               <label for="">Matricule :</label>
               <input type="text" name="matricule" class="form-control" value="{{old('matricule')}}" >
               @if($errors->get('matricule'))
                 @foreach($errors->get('matricule') as $message)
                 <li>{{$message}}</li>
                 @endforeach
               @endif
             </div>

             <div class="form-group @if($errors->get('nomc')) has-error @endif">
               <label for="">Nom Complet :</label>
               <input type="text" name="nomc" class="form-control" value="{{old('nomc')}}">
               @if($errors->get('nomc'))
                 @foreach($errors->get('nomc') as $message)
                 <li>{{$message}}</li>
                 @endforeach
               @endif
             </div>

             <div class="form-group @if($errors->get('fonction')) has-error @endif">
               <label for="">Fonctionnement :</label>
               <input type="text" name="fonction" class="form-control" value="{{old('fonction')}}">
               @if($errors->get('fonction'))
                 @foreach($errors->get('fonction') as $message)
                 <li>{{$message}}</li>
                 @endforeach
               @endif
             </div>


             <div class="form-group col-md-4">
                <label for="inputState">Departement :</label>
               <select id="inputState" class="form-control" name="departement" value="{{old('departement')}}">

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
               <select id="inputState" class="form-control" name="etat" value="{{old('etat')}}">
                <option selected>active</option>
                <option>inactive</option>
                
               </select>
             </div>
             <br><br><br><br><br><br><br><br><br>
             <div class="form-group">
             
           <!--   <a href="{{url('materiels')}}" type="submit"  class="btn btn-success d">suivant</a>--> 
               <input type="submit" href="{{url('employes')}}"  class="form-control btn btn-primary" value="Enregistrer"> 
             </div

           </form>
              
        </div>
    </div>
 </div>


@endsection