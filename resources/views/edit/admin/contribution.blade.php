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
  <link href="{{URL::asset('css/jquery.fancybox.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('css/simple-sidebar.css')}}" rel="stylesheet">
  <link href="{{URL::asset('css/styles.css')}}" rel="stylesheet">
  <link href="{{URL::asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
  <link href="{{URL::asset('css/creative.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('css/layout.css')}}" rel="stylesheet">
  <link href="{{URL::asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" media="screen">
  <style>
  #footer {
   position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
   
}</style>
<style>
		.panel-heading{
			font-size:20px;
			font-weight:bold;
		}
		.profile-picture{
			width:200px;
			height:200px;
		}
		#profile-picture {
			width: 100%;
			height: 100%;
			background-size: 100% 100%;
			border: 1px solid #6396bc;
		}
		.account-item{
			padding-top:10px;
		}
		.education-item{
			padding:10px 0 2px 0;
		}
		.political-item{
			padding:10px 0 5px 0;
		}
		.work-item{
			padding:10px 0 5px 0;
		}
		.item-label{
			font-weight:bold;
			color:#6396bc;
		}
	</style>
 
<script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
	<script src="{{URL::asset('plugins/jquery/jquery-1.11.1.min.js')}}"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script> 
</head>


<body class="body-wrapper">

  <div class="main_wrapper">

    <header class="header-wrapper">
      <div class="topbar clearfix">
        <div class="container">
          <ul class="topbar-left">
            <li class="phoneNo"><i class="fa fa-phone"></i>0717114697</li>
            <li class="email-id hidden-xs hidden-sm"><i class="fa fa-envelope"></i>
              <a href="mailto:info@yourdomain.com">info@afraken.com</a>
            </li>
          </ul>
          <ul class="topbar-right">
            <li class="hidden-xs"><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="hidden-xs"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li class="hidden-xs"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
            <li class="hidden-xs"><a href="#"><i class="fa fa-rss"></i></a></li>
            <li class="top-search list-inline">
              <a href="#"><i class="fa fa-search"></i></a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li>
                  <span class="input-group">
                    <input type="text" class="form-control">
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
                                  <div class="navbar-header fixed-brand">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
                      <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                    </button>
                    <a class="navbar-brand logo clearfix" href="{{ url('/') }}"><img src="{{URL::asset('img/logo.jpg')}}" alt="" class="img-responsive" /></a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
				                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button></li>
                            </ul>
                  			<ul class="nav navbar-nav navbar-right">
				  
				  
                 
                      
                      
                         
                         
                         
                          
                       
                     
                     
                      
					  <li>
                        <a class="page-scroll" href="{{ url('/') }}">Home </a>
                    </li>
					<li class=" dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
                        <ul class="dropdown-menu">
                          <li><a href="{{ url('/about') }}">Who We Are</a></li>
                          <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                          
                        </ul>
                      </li>
					 
					  <li>
                        <a class="page-scroll" href="{{ url('/events') }}">Events </a>
                    </li>
					<li>
                        <a class="page-scroll" href="{{ url('/gallery') }}">Gallery </a>
                    </li>
					@if (Auth::guest())
					 <li>
                        <a class="page-scroll" href="{{ url('/login') }}">Sign In </a>
                    </li>
					 <li>
                        <a class="page-scroll" href="{{ url('/register') }}">Sign Up </a>
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
<div id="wrapper">
 @include('menu.admin-menu')
 
            <div class="container">
			
                <div class="row">
	                     
               <div style="padding-top: 50px;padding-bottom: 50px"  class="col-md-12">
				<div class="panel panel-success">
					<div class="panel-heading">Edit Contribution</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								@if(Session::has('success_notification'))
									<div class="alert alert-success">
										<a href="#" class="close" data-dismiss="alert">&times;</a>
										<strong></strong>{{Session::get('success_notification')}}
									</div>	
								@elseif(Session::has('warning_notification'))
									<div class="alert alert-warning">
										<a href="#" class="close" data-dismiss="alert">&times;</a>
										<strong></strong>{{Session::get('warning_notification')}}
									</div>
								@elseif(Session::has('info_notification'))
									<div class="alert alert-info">
										<a href="#" class="close" data-dismiss="alert">&times;</a>
										<strong></strong>{{Session::get('info_notification')}}
									</div>
								@endif
							</div>
						</div>
						<div class="panel panel-default">
							<div class="row">
								<div class="panel-body">
					<div class="row">
						<form class="form-horizontal" role="form" method="POST" action="{{ url('/administrator/update-contribution/'.$contribution->id) }}" autocomplete="off">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						
						<div class="form-group">
							<div class="col-md-12">
								@if(Session::has('success_notification'))
									<div class="alert alert-success">
										<a href="#" class="close" data-dismiss="alert">&times;</a>
										<strong></strong>{{Session::get('success_notification')}}
									</div>
								@endif	
								@if(Session::has('warning_notification'))
									<div class="alert alert-warning">
										<a href="#" class="close" data-dismiss="alert">&times;</a>
										<strong></strong>{{Session::get('warning_notification')}}
									</div>
								@endif	
							</div>
						</div>
						<?php 
								
										$date=date_create_from_format('Y-m-d',$contribution->date);
										$date = date_format($date, 'd-m-Y');
									?>
							
									<div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                    <label for="date" class="col-md-2 control-label">
                                        Date </label>
                                <div class="input-group date form_date col-md-6"  data-date-format="dd-mm-yyyy" data-link-field="dtp_input1">
                          <input class="form-control"  id="date" type="text" name="date" placeholder="Payment Date" value="{{ old('date') == null ? $date : old('date') }}"readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
					 @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                         </div>
				
                                </div>
									<div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                                    <label for="amount" class="col-md-2 control-label">
                                        Amount </label>
                                    <div class="col-md-6">

										<input id="amount" type="number" step="0.01" min="1" class="form-control" placeholder="Amount Paid" name="amount" value="{{ old('amount') == null ? $contribution->amount : old('amount') }}">

                                @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
								
								<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label  for="description" class="col-md-2 control-label">
                                        Description</label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="description">
													<option value="">--Select Description--</option>
													<option value="Annual Contribution" 
													<?php 
															if(old('description') != null){ if(old('description') == 'Annual Contribution')echo 'selected="selected"';}
															else  if($contribution->description == 'Annual Contribution')echo 'selected="selected"';
														?>
													>Annual Contribution</option>
													<option value="Registration Fee" 
													<?php 
															if(old('description') != null){ if(old('description') == 'Registration Fee')echo 'selected="selected"';}
															else  if($contribution->description == 'Registration Fee')echo 'selected="selected"';
														?>
													>Registration Fee</option>
													
												</select>
												@if ($errors->has('description'))
													<span class="help-block">
														<idong>{{ $errors->first('description') }}</idong>
													</span>
												@endif
                                    </div>
                                </div>

						
			              
								
				
							
						
						<div class="form-group">
							<div class="col-md-7 col-md-push-2">
								<button type="submit" class="btn btn-sm btn-success">Update</button>
								
							</div>	
						</div>
					</form>
					</div>
								</div>
							</div>
						</div>
						
						
						
					</div>
				</div>
			</div>
		</div>  
   

  </div>
   </div>
  

   
<footer id="footer" class="footer-v1">
  

  <div  class="footer clearfix">
    <div class="container">
      <div class="row clearfix">
        <div class="col-sm-12 col-xs-12 copyRight align-center">
          <p align="center">© 2018 Copyright Afraken |<a href="#">Designed by Amasoft Solutions</a></p>
        </div><!-- col-sm-6 col-xs-12 -->
      </div><!-- row clearfix -->
    </div><!-- container -->
  </div><!-- footer -->
</footer>

</div>


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
<script src="{{URL::asset('js/jquery.fancybox.min.js')}}"></script>
<script src="{{URL::asset('js/sidebar_menu.js')}}"></script>
<script src="{{URL::asset('js/waiting.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="{{URL::asset('vendor/scrollreveal/scrollreveal.min.js')}}"></script>
<script src="{{URL::asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{URL::asset('js/creative.min.js')}}"></script>
<script src="{{URL::asset('js/layout.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/bootstrap-datetimepicker.js')}}" charset="UTF-8"></script>
<script type="text/javascript"src="{{URL::asset('js/locales/bootstrap-datetimepicker.fr.js')}}" charset="UTF-8"></script>

<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>


	

</body>
</html>


