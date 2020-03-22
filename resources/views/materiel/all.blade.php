

@extends('layouts.app')
@section('content')
<title>QBM: Gestion D'attribution</title>


<div class="container">
    <div class="row">
        <div class="col-md-12">
        

        
        
     <center>   <img src="{{ URL::asset("img/pp.png") }}" height="110px" weidth="100px">
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
        @foreach($materiels as $materiel)
            <tr>
                <td>{{$materiel->id}}</td>
                <td>{{$materiel->nomc}}</td>
                <td>{{$materiel->matricule}}</td>
                <td>{{$materiel->type}}</td>
                <td>{{$materiel->fabriquant}}</td>
                <td>{{$materiel->Nserie}}</td>
                <td>{{$materiel->modele}}</td>
                <td>{{$materiel->created_at}}</td>


            
            </tr>
            @endforeach
            
        </body>   
        </table>
        
        
        
        </script>
        <center>{{$materiels->links()}} </center>

        </div>
    </div>
</div>
@endsection
