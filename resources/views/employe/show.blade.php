@extends('layouts.app')


@section('content')
<title>QBM: Gestion Des Employes</title>
<div class="container" id="app">
	<div class="row">
		<div class="col-md-12">
        <div class="panel panel-primary">
				<div class="panel-heading">
                
					<div class="row">
						<div class="col-md-10"><h3 class="panel-title">Informations Personnelles D'Employe</h3></div>
						
					</div>
					
				</div>
                
				<div class="panel-body">
                @foreach($employes as $employe)	
					<ul class="list-group">
                    
						<li class="list-group-item">
						<center>
                        <img src="{{ URL::asset("img/em.png") }}" height="245px" weidth="245px">
                        <h1>INFO EMP</h1></center>
						 <table >
						 <tr>
                             <th><h3>*Matricule&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></th>
                             <td><h4><br>&nbsp;&nbsp;&nbsp;&nbsp;{{$employe->matricule}}</h4></td>
                            </tr>
					     	<tr>
                             <th><h3>*Nom Complet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></th>
                             <td><h4><br>&nbsp;&nbsp;&nbsp;&nbsp;{{$employe->nomc}}</h4></td>
                            </tr>
                            <tr>
                             <th><h3>*Fonction&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></th>
                             <td><h4><br>&nbsp;&nbsp;&nbsp;&nbsp;{{$employe->fonction}}</h4></td>
                            </tr>
                            <tr>
                             <th><h3>*Departement&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></th>
                            <td><h4><br>&nbsp;&nbsp;&nbsp;&nbsp;{{$employe->departement}}</h4></td>
                            </tr>
							<tr>
                             <th><h3>*Etat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></th>
                             <td><h4><br>&nbsp;&nbsp;&nbsp;&nbsp;{{$employe->etat}}</h4></td>
                            </tr>
                            <tr>
                            
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

