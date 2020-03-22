

@extends('layouts.app')
@section('content')
<title>QBM: Gestion Des Employes</title>


<div class="container">
    <div class="row">
        <div class="col-md-12">
        

        
        
     <center>   <img src="{{ URL::asset("img/pp.png") }}" height="70px" weidth="60px">
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
        @foreach($employes as $employe)
            <tr>
                <td>{{$employe->id}}</td>
                <td>{{$employe->matricule}}</td>
                <td>{{$employe->nomc}}</td>
                <td>{{$employe->fonction}}</td>
                <td>{{$employe->departement}}</td>
                <td>{{$employe->etat}}</td>
                <td>{{$employe->created_at}}</td>

            </tr>
            @endforeach
            
        </body>   
        </table>
        
        
        
        </script>
        <center>{{$employes->links()}} </center>

        </div>
    </div>
</div>
@endsection
