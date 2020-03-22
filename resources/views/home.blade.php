<style> .html1{background-image: url("img/her.jpg") ;
background-repeat: no-repeat;
    background-size: 1950px 1200px;}</style>

@extends('layouts.app')
@section('content')

<html  lang="en">
	<head>
	<title>QBM: Acceuil</title>
    <style>

	h3  { color: white;}
	</style>

		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/climacons.css" />
		<link rel="stylesheet" type="text/css" href="css/component1.css" />
		<script src="js/modernizr.custom.js"></script>

        <link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>


	</head>
	<body  class="html1" >




		<div class="container ">


		<ul id="rb-grid" class="rb-grid clearfix">


	<li >
	<a href="{{url('employes')}}" ><img src="img/00.png" hight="150px" width="150px"  ></a>
		</li>
	<li><a href="{{url('materiels')}}" ><img src="img/01.png" hight="150px" width="150px"  ></a>


	</li>
	<li ><a href="{{url('stocks')}}" ><img src="img/02.png" hight="150px" width="150px"  ></a>


	</li>

</ul>
</div>

			 <!-- /container -->
			 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/jquery.fittext.js"></script>
		<script src="js/boxgrid.js"></script>


	</body>
</html>
@endsection
