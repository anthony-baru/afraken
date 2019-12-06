<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CBIR">
	<meta name="keywords" content="CBIR">
    <meta name="author" content="Joseph Chemutt">
	<link rel="shortcut icon" type="image/ico" href="{{URL::asset('image/favicon.ico')}}"/>
    @yield('title')
	<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{URL::asset('css/jquery.fancybox.min.css')}}" rel="stylesheet">
	<link href="{{URL::asset('css/simple-sidebar.css')}}" rel="stylesheet">
	<link href="{{URL::asset('css/styles.css')}}" rel="stylesheet">
	<link href="{{URL::asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	@yield('css')
	<script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <nav class="navbar navbar-default no-margin">
    <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header fixed-brand">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
                      <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                    </button>
					<a class="navbar-brand" href="#">Ecommerce</a>
                    
                </div><!-- navbar-header-->
 
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

									
									 <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-btn fa-sign-out"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
								</ul>
							</li>
						@endif
                    
                </ul>
                </div><!-- bs-example-navbar-collapse-1 -->
    </nav>
	@yield('contents')
	
 
    @yield('scripts')
    <!-- /#wrapper -->
    <!-- jQuery -->
	
	<script src="{{URL::asset('js/js/jquery.js')}}"></script>
	<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('js/jquery.fancybox.min.js')}}"></script>
	<script src="{{URL::asset('js/sidebar_menu.js')}}"></script>
	<script src="{{URL::asset('js/waiting.js')}}"></script>
	

    
</body>
</html>