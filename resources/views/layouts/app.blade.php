
<html>

<head>

<link rel="stylesheet" href="css/bootstrap.css">
<link href="css/jquery.dataTables.min.css" rel="stylesheet">
<link href="css/buttons.dataTables.min.css" rel="stylesheet">
<script type="text/javascript" src="js/buttons.html5.min.js"></script>
<script type="text/javascript" src="js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/jszip.min.js"></script>
<script type="text/javascript" src="js/pdfmake.min.js"></script>
<script type="text/javascript" src="js/vfs_fonts.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>

<script type="text/javascript" src="js/jquery.printPage.js"></script>
<link href={{ URL::asset("img/home.ico") }} rel="icon" height="13" weidth="13">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- Styles -->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">


</head>
<body>
<div id="app" >

 @include('partials.menu')
 @include('partials.flash')

    @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
