<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Afraken</title>

  <!-- PLUGINS CSS STYLE -->
  <link rel="icon" type="image/png" href="{{URL::asset('img/favicon.png')}}">
  <link href="{{URL::asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{URL::asset('plugins/selectbox/select_option1.css')}}">
  <link rel="stylesheet" href="{{URL::asset('plugins/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('plugins/flexslider/flexslider.css')}}"type="text/css" media="screen" />
  <link rel="stylesheet" href="{{URL::asset('plugins/calender/fullcalendar.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('plugins/animate.css')}}">
  <link rel="stylesheet" href="{{URL::asset('plugins/pop-up/magnific-popup.css')}}">
  <link rel="stylesheet" type="{{URL::asset('text/css" href="plugins/rs-plugin/css/settings.css')}}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('plugins/owl-carousel/owl.carousel.css')}}" media="screen">

  <!-- GOOGLE FONT -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,400italic,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="{{URL::asset('css/style_2.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/default.css')}}" id="option_color">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="body-wrapper">

  <div class="main_wrapper">

    <header class="header-wrapper">
      <div class="topbar clearfix">
        <div class="container">
         <ul class="topbar-left">
           <li class="phoneNo"><i class="fa fa-phone"></i>Mpesa Line:0720613691</li>
            <li class="email-id hidden-xs hidden-sm"><i class="fa fa-envelope"></i>
              <a href="mailto:ruthoriam@gmail.com">info@afraken.org</a>
            </li>
          </ul>
          <ul class="topbar-right">
            <li class="hidden-xs"><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="hidden-xs"><a href="https://web.facebook.com/afraken"><i class="fa fa-facebook"></i></a></li>
            <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li class="hidden-xs"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
            <li class="hidden-xs"><a href="#"><i class="fa fa-rss"></i></a></li>
            <li class="top-search list-inline">
              <a href="#"><i class="fa fa-search"></i></a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li>
                  <span class="input-group">
                    <input type="text" class="form-control" >
                    <button type="submit" class="btn btn-default commonBtn">Search</button>
                  </span>
                </li>
              </ul>
            </li>
            
          </ul>
        </div>
      </div>

      <div class="header clearfix">
        <nav class="navbar navbar-main navbar-default">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="header_inner">

                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                   <a class="navbar-brand logo clearfix" href="{{ url('/') }}"><img src="{{URL::asset('img/logo.jpg')}}" alt="" class="img-responsive" /></a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="main-nav">
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
									{{ Auth::user()->name }} 
								</a>
								<ul class="dropdown-menu" role="menu">
								
										<li><a href="{{ url('/home') }}"><i class="fa fa-btn fa-user"></i> Account</a></li>
										
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
							@if( Auth::user()->hasRole('Chairman'))
							<li class="apply_now"><a href="{{ url('/chairman/create-event') }}">Add Event</a></li>
						@endif
						
						@endif
						
						 
                     
                    </ul>
                  </div><!-- navbar-collapse -->

                </div>
              </div>
            </div>
          </div><!-- /.container -->
        </nav><!-- navbar -->
      </div>
    </header>


  
    <div class="mainContent clearfix">
      <div class="container">
      
		 
        <div class="upcoming_events event-col">
		
		
          <div class="row clearfix">
		  @if(isset($events))
				@foreach($events as $event)
			
			<?php $year= date('Y', strtotime($event->date)); $month= date('M', strtotime($event->date));$day= date('d', strtotime($event->date));$hour= date('g', strtotime($event->date)) ;$min= date('i', strtotime($event->date));$p= date('a', strtotime($event->date))  ?>

            <div class="col-xs-6 col-sm-4">
              <div class="related_post_sec single_post">
                <span class="date-wrapper">
                  <span class="date"><span>{{$day}}</span>{{$month}} <br>{{$year}}</span>
                </span>
                <div class="rel_right">
                  <h4><a href="{{ url('/single-event/'.$event->id) }}">{{$event->title}}</a></h4>
				  <p>{{$event->sub_committee->name}}</p>
                  <div class="meta">
                    <span class="place"><i class="fa fa-map-marker"></i>{{$event->venue}}</span>
                    <span class="event-time"><i class="fa fa-clock-o"></i>{{$hour}}:{{$min}} {{$p}}</span>
                  </div>
                  <p>
				  <?php echo mb_strimwidth($event->description, 0, 30, "...");?>
				  </p>
                  <a href="{{ url('/single-event/'.$event->id) }}" class="btn btn-default commonBtn">More Details</a>
                </div>
              </div>
            </div>

            


            



            
			
			@endforeach
								@endif

          </div><!-- row clearfix -->
		  						<div class="row">
						<div class="col-lg-6 col-lg-push-2">
						   {!! str_replace('/?', '?', $events->render()) !!}
						</div>
					</div>
        </div>
		

      </div><!-- container -->
    </div><!-- mainContent -->


<footer class="footer-v1">
  <div class="menuFooter clearfix">
    <div class="container">
      <div class="row clearfix">

        <div class="col-sm-4 col-xs-6">
          <ul class="menuLink">
             <li><a href="{{ url('/about') }}">About Afraken</a></li>
            <li><a href="{{ url('/events') }}">Programs and Events</a></li>
            <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
			<li><a href="{{ url('/gallery')}}">Gallery</a></li>
          </ul>
        </div><!-- col-sm-4 col-xs-6 -->

        <div class="col-sm-4 col-xs-6 borderLeft">
          <div class="footer-address">
            <h5>Location:</h5>
           <address>
              Peponi Gardens, Off Peponi Road<br>
              Nairobi, Kenya<br>
              
            </address>
            <a href="{{ url('/contact-us') }}"><span class="place"><i class="fa fa-map-marker"></i>Afraken</span></a>
          </div>
        </div><!-- col-sm-3 col-xs-6 -->

        <div class="col-sm-4 col-xs-6 borderLeft">
          <div class="socialArea">
            <h5>Find us on:</h5>
            <ul class="list-inline ">
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://web.facebook.com/afraken"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
          </div><!-- social -->
        
        </div><!-- col-sm-3 col-xs-6 -->

      </div><!-- row -->
    </div><!-- container -->
  </div><!-- menuFooter -->

  <div class="footer clearfix">
    <div class="container">
      <div class="row clearfix">
        <div class="col-sm-12 col-xs-12 copyRight align-center">
          <p align="center">© 2019 Copyright Afraken |<a href="#">Designed by Amasoft Solutions</a></p>
        </div><!-- col-sm-6 col-xs-12 -->
      </div><!-- row clearfix -->
    </div><!-- container -->
  </div><!-- footer -->
</footer>

</div>

<!-- JQUERY SCRIPTS -->
<script src="{{URL::asset('plugins/jquery/jquery-1.11.1.min.js')}}"></script>
<script src="{{URL::asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('plugins/flexslider/jquery.flexslider.js')}}"</script>
<script src="{{URL::asset('plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{URL::asset('plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{URL::asset('plugins/selectbox/jquery.selectbox-0.1.3.min.js')}}"></script>
<script src="{{URL::asset('plugins/pop-up/jquery.magnific-popup.js')}}"></script>
<script src="{{URL::asset('plugins/animation/waypoints.min.js')}}"></script>
<script src="{{URL::asset('plugins/count-up/jquery.counterup.js')}}"></script>
<script src="{{URL::asset('plugins/animation/wow.min.js')}}"></script>
<script src="{{URL::asset('plugins/animation/moment.min.js')}}"></script>
<script src="{{URL::asset('plugins/calender/fullcalendar.min.js')}}"></script>
<script src="{{URL::asset('plugins/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{URL::asset('plugins/timer/jquery.syotimer.js')}}"></script>
<script src="{{URL::asset('plugins/smoothscroll/SmoothScroll.js')}}"></script>
<script src="{{URL::asset('js/custom_2.js')}}"></script>

</body>
</html>

