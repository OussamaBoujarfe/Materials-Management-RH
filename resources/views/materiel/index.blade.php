@extends('layouts.app')
@section('content')
<title>QBM: Gestion D'attribution</title>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        
     <center>   <img src="{{ URL::asset("img/de1.png") }}" height="300px" weidth="150px">
        <h1>Listes Des Materiels Attribuée</h1><br>
        <a href="{{url('materiels/create')}}" class="btn btn-success">Nouveau Attribution</a>
        <br><br></center><div class="pull-right">
        <a href="{{url('materiels/all')}}" class="btn btn-danger">Afficher Tout</a>

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
        @foreach($materiels as $materiel)
            <tr>
                <td>{{$materiel->id}}</td>
                <td>{{$materiel->nomc}}</td>
                <td>{{$materiel->matricule}}</td>
                
                <td>{{$materiel->created_at}}</td>

                   <td>
               
                <form action="{{url('materiels/'.$materiel->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <a  href="{{url('materiels/'.$materiel->id.'/show')}}" class="btn btn-primary">Details</a>
                <a  href="{{url('materiels/'.$materiel->id.'/edit')}}" class="btn btn-default">Editer</a>               
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