<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Moi Univesity Information Management System">
	<meta name="keywords" content="Moi University, Student Portal, MUIMS">
    <meta name="author" content="Joseph Chemutt">
	<link rel="shortcut icon" type="image/ico" href="{{URL::asset('image/favicon.ico')}}"/>
	
	@yield('title')

	    <!-- Bootstrap Core CSS -->
   
	
	<link href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
	<link href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    
	
	<link href="{{URL::asset('vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <!-- Theme CSS -->
	<link href="{{URL::asset('css/creative.min.css')}}" rel="stylesheet">

	
	<link href="{{URL::asset('css/layout.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

@yield('css')
<!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body id="page-top">
	
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">MUIMS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <li>
                        <a class="page-scroll" href="{{ url('/') }}">Home </a>
                    </li>
					<li class=" dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
                        <ul class="dropdown-menu">
                          <li><a href="{{ url('/about') }}">Who We Are</a></li>
                          <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
						  <li><a href="{{ url('/officials') }}">Officials</a></li>
                          
                        </ul>
                      </li>
					  
					  <li class=" dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events & Resourses</a>
                        <ul class="dropdown-menu">
                          <li><a href="{{ url('/events') }}">Programmes & Events</a></li>
                          <li><a href="{{ url('/news') }}">News</a></li>
						  <li><a href="{{ url('/gallery') }}">Gallery</a></li>
						  <li><a href="{{ url('/downloads') }}">Downloads</a></li>
                          
                        </ul>
                      </li>
					 
					  
					@if (Auth::guest())
					 <li>
                        <a class="page-scroll" href="{{ url('/login') }}">Login In </a>
                    </li>
					 <li>
                        <a class="page-scroll" href="{{ url('/register') }}">Register </a>
                    </li>
					@else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu">

									<li><a href="{{ url('/home') }}"><i class="fa fa-btn fa-user"></i> Account</a></li>
									<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
								</ul>				
								
							</li>
							
						@endif
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	





	
@yield('contents')

 
@yield('scripts')
	
    
	<script src="{{URL::asset('vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    
	
	<script src="{{URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{URL::asset('vendor/scrollreveal/scrollreveal.min.js')}}"></script>
	<script src="{{URL::asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Theme JavaScript -->
	<script src="{{URL::asset('js/creative.min.js')}}"></script>
	<script src="{{URL::asset('js/layout.js')}}"></script>
	<script src="{{URL::asset('js/waiting.js')}}"></script>
	
</body>
</html>

