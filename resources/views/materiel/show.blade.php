@extends('layouts.app')


@section('content')
<title>QBM: Gestion D'attribution</title>
<div class="container" id="app">
<input class="btn btn-success" type="button" onclick="window.print()" value="CopyPrint" />
	<div class="row">
		<div class="col-md-12">
        <div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-10"><h3 class="panel-title">INFO ATTR</h3></div>
						<div class="col-md-2 text-right">
                       
						</div>
					</div>
					
				</div>
				<div class="panel-body">
                @foreach($materiels as $materiel)	
					<ul class="list-group">
						<li class="list-group-item">
                        <img src="{{ URL::asset("img/mul.png") }}" height="150px" weidth="150px">
                        <img src="{{ URL::asset("img/dd.png") }}" width="300px" height="195px" align="right">
                        
						<h1>Informations Sur L'attribution</h1>
                        
                        
						 <table >
                         
                         <tr>
                             <th><h3>*Nom Complet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></th>
                             <td><h4><br>&nbsp;&nbsp;&nbsp;&nbsp;{{$materiel->nomc}}</h4></td>
                            </tr>
						 <tr>
                             <th><h3>*Matricule Employé&nbsp;</h3></th>
                             <td><h4><br>&nbsp;&nbsp;&nbsp;&nbsp;{{$materiel->matricule}}</h4></td>
                            </tr>
                           
                            <tr>
                             <th><h3>*Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></th>
                            <td><h4><br>&nbsp;&nbsp;&nbsp;&nbsp;{{$materiel->type}}</h4></td>
                            </tr>
							<tr>
                             <th><h3>*Fabriquant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></th>
                             <td><h4><br>&nbsp;&nbsp;&nbsp;&nbsp;{{$materiel->fabriquant}}</h4></td>
                            </tr>
                             <tr>
                             <th><h3>*Numéro Série&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></th>
                             <td><h4><br>&nbsp;&nbsp;&nbsp;&nbsp;{{$materiel->Nserie}}</h4></td>
                            </tr>
                            <tr>
                             <th><h3>*Modele&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></th>
                             <td><h4><br>&nbsp;&nbsp;&nbsp;&nbsp;{{$materiel->modele}}</h4></td>
                            </tr>
                            
                         </table>
							
						</li>
					</ul>
                    @endforeach
				</div>
			</div>

			
					
				
			

			

		  
		</div>
	</div>
</div>

@endsection

