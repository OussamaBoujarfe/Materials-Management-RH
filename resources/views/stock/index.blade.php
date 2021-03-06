@extends('layouts.app')
@section('content')
<title>QBM: Gestion De Stock</title>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        
        <center><img src="{{ URL::asset("img/pu2.png") }}" height="245px" weidth="245px">  
        <h1>la liste de stocks</h1>
         <div class="pull-right">
          <a href="{{url('stocks/create')}}" class="btn btn-success">Nouveau Materiels? </a>
         </div>
         <div class="pull-left">
        <a href="{{url('stocks/alld')}}" class="btn btn-danger">Archive Stocks Sorti </a>

         </div>
         
        <table class="table">
        <head>
            <tr>
                <th>ID</th>            
                <th>Genre</th>         
                <th>Date D'entrée</th>
                <th>source</th> 
                <th>Série</th>         
                <th>Modele</th>
                <th>Fabr</th> 
				<th>Actions</th>
            </tr>
        </head>
        <body>
        @foreach($stocks as $stock)
            <tr>
                <td>{{$stock->id}}</td>
                <td>{{$stock->type}}</td>           
                <td>{{$stock->dateE}}</td>
                <td>{{$stock->source}}</td>
                <td>{{$stock->serie}}</td>           
                <td>{{$stock->modele}}</td>
                <td>{{$stock->fabriquant}}</td>
                <td>
                <form action="{{url('stocks/'.$stock->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <a  href="{{url('stocks/'.$stock->id.'/show')}}" class="btn btn-primary">Details</a>
                <a  href="{{url('stocks/'.$stock->id.'/edit')}}" class="btn btn-default">Editer</a>
                
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