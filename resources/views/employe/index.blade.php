@extends('layouts.app')
@section('content')
<title>QBM: Gestion Des Employes</title>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        
        <center><img src="{{ URL::asset("img/rh1.png") }}" height="190px" weidth="190px">  
        <h1>Liste Des Employees</h1>
        <div class="pull-right">
         <a href="{{url('employes/create')}}" class="btn btn-success">Nouveau Employé?</a>
         </div><div class="pull-left">
        <a href="{{url('employes/all')}}" class="btn btn-danger">Afficher Tout</a>

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
        @foreach($employes as $employe)
            <tr>
                <td>{{$employe->id}}</td>
                <td>{{$employe->matricule}}</td>
                <td>{{$employe->nomc}}</td>
                
                <td>{{$employe->created_at}}</td>
                <td>
                <form action="{{url('employes/'.$employe->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <a  href="{{url('employes/'.$employe->id.'/show')}}" class="btn btn-primary">Details</a>
                <a  href="{{url('employes/'.$employe->id.'/edit')}}" class="btn btn-default">Editer</a>
                
                <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                </td>
               
               


            </tr>
            @endforeach
            
        </body>    
        </table>
        
        </div>
    </div>
</div>

@endsection