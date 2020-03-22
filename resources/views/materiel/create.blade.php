@extends('layouts.app')
@section('content')

<title>QBM: Gestion D'attribution</title>

 <div class="container">
    <div class="row">
        <div class="col-md-12">
        
           <form action="{{url('materiels')}}" method="post"> 

                {{csrf_field()}}

             <div class="form-group" >
             <center><img src="{{ URL::asset("img/de.png") }}" height="250px" weidth="250px"> 
             <h1>Attribution Du Matériel</h1></center>
             <br><br>
               
             <div class="form-group col-md-4">
               <label for="">Nom Complet D'employé :</label>
               <select name="nomc"  class="form-control">
               @foreach($emp as $em)
                <option value="{{ $em->nomc }}">{{ $em->nomc }}</option>
                @endforeach
                </select>
             </div>
             <div class="form-group col-md-4">
               <label for="">N° Matricule D'employé :</label>
                 <select name="matricule"  class="form-control">
                 @foreach($emp as $em)
                <option value="{{ $em->matricule }}">{{ $em->matricule }}</option>
                @endforeach
               
                </select>
                
             </div>


<br><br><br><br><br>
              
             

              

             <div class="form-group @if($errors->get('Nserie')) has-error @endif">
               <label for="">N° Serie :</label>
               <input type="text" name="Nserie" class="form-control" value="{{old('Nserie')}}">
               @if($errors->get('Nserie'))
                 @foreach($errors->get('Nserie') as $message)
                 <li>{{$message}}</li>
                 @endforeach
               @endif 
             </div>

            
            
             <div class="form-group @if($errors->get('modele')) has-error @endif">
               <label for=""> Modele :</label>
               <input type="text" name="modele" class="form-control"value="{{old('modele')}}">
               @if($errors->get('modele'))
                 @foreach($errors->get('modele') as $message)
                 <li>{{$message}}</li>
                 @endforeach
               @endif 
             </div>

             <div class="form-group col-md-4">
                <label for="inputState">Type De Materiel :</label>
               <select id="inputState" class="form-control" name="type" value="{{old('type')}}">
                <option selected>TELEPHONE</option>
                <option>ORDINATEUR PORTABLE</option>
                <option>TABLETTE</option>
               </select>
             
             </div>

             <div class="form-group col-md-4">
                <label for="inputState">Fabriquant :</label>
               <select id="inputState" class="form-control" name="fabriquant" value="{{old('fabriquant')}}">
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
                <input type="submit" href="{{url('materiels')}}" class="form-control btn btn-primary" value="enregistrer">  
             </div

           </form>
              
        </div>
    </div>
 </div>


@endsection