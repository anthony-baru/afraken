<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Center of Excellence in Phytochemicals, Textile AND Renewable Energy(PTRE)</title>

    <!-- Bootstrap Core CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link href="{{URL::asset('bower_components/flexslider/flexslider.css')}}" rel="stylesheet">
	<link href="{{URL::asset('css/scrolling-nav.css')}}" rel="stylesheet">
	<link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
	<link href="{{URL::asset('css/responsive.css')}}" rel="stylesheet">
	<link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{URL::asset('css/headline.css')}}" rel="stylesheet">
	<link href="{{URL::asset('ionicons/css/ionicons.min.css')}}" rel="stylesheet">
	<link href="{{URL::asset('bower_components/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
	<link href="{{URL::asset('bower_components/owl-carousel/owl.theme.css')}}" rel="stylesheet">
     
  
 
    <!-- Default Theme -->
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div class="se-pre-con"></div>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" >
	<!--top bar start-->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="list-inline">
                            <li><a href="#"><i class="ion-ios-telephone"></i> +01 555-5554</a></li>
                            <li><a href="#"><i class="ion-ios-email"></i> support@ptre.com</a></li>
                        </ul>
                    </div><!--top left col end-->
                    <div class="col-sm-6 text-right hidden-xs">
                        <ul class="list-inline top-socials">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                        </ul>
                    </div><!--top social col end-->
                </div><!--row-->
            </div><!--container-->
        </div>
        <!--top bar end-->
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll logo no-margin" href="#page-top">Center of Excellence in  (PTRE) Moi University</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                     <li>
                        <a class="page-scroll" href="#page-top">HOME </a>
                    </li>
                     <li>
                        <a class="page-scroll" href="#about">ABOUT</a>
                    </li>
                   
                     <li>
                        <a class="page-scroll" href="#services">PROGRAMMES</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">LEAD TEAM</a>
                    </li>
                     
                     <li>
                        <a class="page-scroll" href="#clients">PARTNERS</a>
                    </li>
                   
                     <li>
                        <a class="page-scroll" href="#contact">CONTACT US </a>
                    </li>
					@if (Auth::guest())
                    <li>
                        <a class="page-scroll" href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span>  Log in</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span>  Sign Up</a>
                    </li>
					@else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu">

									<li><a href="{{ url('/home') }}"><i class="fa fa-btn fa-user"></i> Account</a></li>
									  <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
								</ul>				
								
							</li>
							
						@endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--slider start-->
    <section id="home" class="slider-banner">
            <div class="main-slider">
                <ul class="slides">
                    <li>
                        <img src="images/bg-1.jpg" alt="" class="">
                       
                    </li>
                    <li>
                        <img src="images/bg-2.jpg" alt="" class="">
                      
                    </li>
                    <li>
                        <img src="images/bg-3.jpg" alt="" class="">
                        
                    </li>
					<li>
                        <img src="images/bg-4.jpg" alt="" class="">
                        
                    </li>
					<li>
                        <img src="images/bg-5.jpg" alt="" class="">
                        
                    </li>
					<li>
                        <img src="images/bg-6.jpg" alt="" class="">
                        
                    </li>
                </ul><!--slides end-->
                 <div class="slider-overlay">
                            <div class="slider-table">
                                <div class="slider-vm">
                                <!-- cd-intro -->
                                <div class="cd-intro">
                                    <h1 class="cd-headline clip is-full-width">
                                       
                                        <span class="cd-words-wrapper">
                                            <b class="is-visible">Welcome to <span> PRTE </span></b>
                                            <b>Center of Excellence in Phytochemicals  <span> Textile</span></b>
                                            <b>AND <span>  Renewable Energy(PTRE) </span></b>
                                        </span>
                                        
                                    </h1>
                                     <p>Foundation of Knowledge</p>
                                        <a href="#" class="btn btn-lg btn-white-border">Learn more</a>
                                </div> <!-- cd-intro -->
                                    
                                </div>
                            </div>
                        </div><!--slides overlay end-->
            </div>
            <div class="mouse-down "><a href="#about" class="page-scroll"><i class="ion-mouse"></i></a></div>
        </section>
    <!-- content Section -->
    <section  class="content-section">
       <div class="row no-margin">
        <div class="col-sm-3 no-padding">
          <div class="single_process" style="background:#C41735;">
      <h4><span>01</span> Fair</h4>
      <p>We are fair to everyone and we admit in merit basis.</p>
    </div>
        </div>
        <div class="col-sm-3 no-padding">
          <div class="single_process" style="background:#E41B3F;">
      <h4><span>02</span> Transparent
                                 </h4>
      <p>All the applications are conducted in our online platform ensuring transparency.</p>
    </div>
        </div>
        <div class="col-sm-3 no-padding">
          <div class="single_process" style="background:#E62B4C;">
      <h4><span>03</span> Quality</h4>
      <p>We are committed to offer high quality teaching and Research.</p>
    </div>
        </div>
        <div class="col-sm-3 no-padding">
          <div class="single_process" style="background:#E73C5A;">
      <h4><span>04</span> Relevant</h4>
      <p>Our education system coupled with our industrial collobaration ensure we deliver a relevent Education.</p>
    </div>
        </div>
    </div>
    </section>
	<!-- Abotu Section -->
    <section id="about" class="about-section all-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 scrollReveal sr-bottom sr-ease-in-out-quad sr-delay-1">
                    <h1 class="section-heading">About the center </h1>
					<p>. This Center shall provide Doctoral and Masters Degrees training, while conducting research focused on: </p>
                    
                </div>
            </div>
            <div class="height-60"> </div>
			<div class="row">
			  <div class="col-sm-3 col-xs-12 ">
			   <div class="inner text-center scrollReveal sr-bottom sr-delay-1">
							<i class="ion-plane"></i>
							<h2>Textile Engineering</h2>
							<p>The programme provides knowledge on the latest development in textile technology in a wide range of subjects covering high-performance fibres, 3D-textiles and new processes and machines to manufacture textile products.</p>
			  </div>
			  </div>
              <div class="col-sm-3 col-xs-12">
			   <div class="inner text-center scrollReveal sr-bottom sr-delay-2">
							<i class="ion-os-aperture-outline
"></i>
							<h2>Industrial Engineering</h2>
							<p>Industrial engineers use their knowledge and skills to improve systematic processes through the use of statistical analysis, interpersonal communication, design, planning, quality control and problem solving.</p>
			  </div>
			  </div>
              <div class="col-sm-3 col-xs-12">
			   <div class="inner text-center scrollReveal sr-bottom sr-delay-3">
							<i class="ion-ios-lightbulb-outline"></i>
							<h2>Renewable Energy</h2>
							<p>Renewable energy often provides energy in four important areas: electricity generation, air and water heating/cooling, transportation, and rural (off-grid) energy services.It is derived from natural processes replenished constantly</p>
			  </div>
			  </div>
              <div class="col-sm-3 col-xs-12">
			   <div class="inner text-center scrollReveal  sr-bottom sr-delay-4">
							<i class="ion-help-buoy"></i>
							<h2>Analytical Chemistry</h2>
							<p>Emphasis is be placed on creating the new generation of energy educated students and professionals who will be broadly educated on all components of energy through quantitative analytical methods </p>
			  </div>
			  </div>
			</div>
        </div>
    </section>
    <!-- Counter-section  -->
    <section class="counter-section" style="background: url(images/bg-1.jpg) no-repeat center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-3 col-xs-12 col-md-3">
                 <div class="counter  "> 
		        	<i class="ion-ios-people"></i>
					<span class="count">40000</span>
					<label>Visitors This week</label>
					<p class="text-color">They can’t be wrong</p>
				</div>
                    </div>
                <div class="col-lg-3 col-sm-3 col-xs-12 col-md-3 ">
                 <div class="counter ">
		        	<i class="ion-ios-people"></i>
					<span class="count">800</span>
					<label>Participants so far</label>
					<p class="text-color">They can’t be wrong</p>
				</div>
                    </div>
                <div class="col-lg-3 col-sm-3 col-xs-12 col-md-3">
                 <div class="counter ">
		        	<i class="ion-ios-people"></i>
					<span class="count">100</span>
					<label>Our lecturers</label>
					<p class="text-color">They are very dedicated</p>
				</div>
                    </div>
                <div class="col-lg-3 col-sm-3 col-xs-12 col-md-3">
                 <div class="counter ">
		        	<i class="ion-ios-people"></i>
					<span class="count">3000</span>
					<label>Applicants</label>
					<p class="text-color">They can’t be wrong</p>
				</div>
                    </div>
             </div>
            </div>
       
    </section>
    <!--start services-->
    <section id="services" class="all-space">
           
            <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12 scrollReveal sr-bottom sr-ease-in-out-quad sr-delay-1">
                    <h1 class="section-heading">Programmes</h1>
					<p>The following are the programmes we offer </p>
                    
                </div>
            </div>
            <div class="height-60"> </div>
                <div class="row">

                    <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12">
                        <ul class="row list-unstyled services-list">
                            <li class="col-sm-6 col-xs-12 clearfix scrollReveal sr-bottom">
                                <i class="ion-ios-briefcase-outline"></i>
                                <div class="content">
                                    <h4>MSc.in phytochemistry </h4>
                                    <p>
                                        Specifically the programme starts covering herbal medicines in healthcare, their safety and efficacy and how they are registered as well as the analytical techniques applied to the study of natural products
                                    </p>
                                </div>
                            </li><!--service col end with li-->
                            <li class="col-sm-6 col-xs-12 clearfix  scrollReveal sr-bottom sr-delay-1">
                                <i class="ion-images"></i>
                                <div class="content">
                                    <h4>PhD program in Textile engineering</h4>
                                    <p>
                                        The Center shall achieve excellence being the only university in the region offering PhD program in Textile engineering anchored on ground breaking innovative research that has earned patents and awards worldwide
                                </div>
                            </li><!--service col end with li-->
                            <li class="col-sm-6 col-xs-12 clearfix scrollReveal sr-bottom sr-delay-2">
                                <i class="ion-bag"></i>
                                <div class="content">
                                    <h4>Master of Science (MSc)in textile engineering</h4>
                                    <p>
                                        The Center shall achieve excellence being the only university in the region offering PhD program in Textile engineering anchored on ground breaking innovative research that has earned patents and awards worldwide
                                    </p>
                                </div>
                            </li><!--service col end with li-->
                            <li class="col-sm-6 col-xs-12 clearfix scrollReveal sr-bottom sr-delay-3">
                                <i class="ion-hammer"></i>
                                <div class="content">
                                    <h4>Master of Science industrial engineering</h4>
                                    <p>
                                        Advanced qualifications in this field will provide you with a combination of technical depth and business fundamentals that could lead to employment in a wide range of industries such as defence, agriculture, transport, minerals and energy, banking, communications and manufacturing.
                                    </p>
                                </div>
                            </li><!--service col end with li-->
                            
                        </ul><!--service list end-->
                    </div>
                </div><!--row end-->
                <hr>
                <div class="height-40"></div>
                <div class="text-center scrollReveal sr-bottom">
                    <h1 >Openings</h1>
                    <a href="#" class="btn btn-dark-border btn-lg">click here to view all openings</a>
                </div>
            </div>
        </section>
    <!--end services-->
    
    <!-- Team Section -->
    <section id="team" class="team-section all-space">
        <div class="container">
            <div class="row">
                 <div class="col-lg-12 scrollReveal sr-bottom sr-ease-in-out-quad sr-delay-1">
                    <h1 class="section-heading">Our Lead Team</h1>
					<p>These are the leaders that are steering the project.You can find more about them by clicking on the respective images </p>
                    
                </div>
                <div class="height-40"> </div>
                <div class="col-lg-3 col-xs-12 col-sm-3 col-md-3 scrollReveal sr-bottom sr-delay-1">
                   <div class="team">
                      <div class="team-img" style="background-image:url(images/team4.png)">
                      
                       <div class="team-con ">
                       <h3>Prof Laban Ayiro </h3>
                       <p>Vice-Chancellor Moi University</p>
                       <ul class="list-inline team-socials">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                        </ul>
                      </div>
                      </div>
                     
                   </div>
                </div>
                <div class="col-lg-3 col-xs-12 col-sm-3 col-md-3 scrollReveal sr-bottom sr-delay-2">
                   <div class="team">
                      <div class="team-img" style="background-image:url(images/team3.png)">
                      
                       <div class="team-con ">
                       <h3>Prof Ambrose Kiprop </h3>
                       <p>Center Leader</p>
                       <ul class="list-inline team-socials">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                        </ul>
                      </div>
                      </div>
                     
                   </div>
                </div>
                <div class="col-lg-3 col-xs-12 col-sm-3 col-md-3 scrollReveal sr-bottom sr-delay-3">
                   <div class="team">
                      <div class="team-img" style="background-image:url(images/team2.png)">
                      
                       <div class="team-con ">
                       <h3>Dr. Rose C. Ramkat</h3>
                       <p>Deputy Center Leader/Principal investigator</p>
                       <ul class="list-inline team-socials">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                        </ul>
                      </div>
                      </div>
                     
                   </div>
                </div>
                <div class="col-lg-3 col-xs-12 col-sm-3 col-md-3 scrollReveal sr-bottom sr-delay-4">
                   <div class="team">
                      <div class="team-img" style="background-image:url(images/team1.png)">
                        
                       <div class="team-con ">
                       <h3>Gibson Kimutai </h3>
                       <p>System Administrator</p>
                       <ul class="list-inline team-socials">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                        </ul>
                      </div>
                        
                      </div>
                     
                   </div>
                </div>
            </div>
        </div>
    </section>
     <!--end Team Section -->
    <section class="counter-section " style="background: url(images/bg-2.jpg) no-repeat center center;">
        <div class="container">
            <div class="row">
                   <div class="col-lg-12 ">
                   <h2 class="parallax-text">" A Super Simple Minimal One Page for Creative & Small Agencies "</h2>
                 </div>
            </div>
      </div>
        
    </section>
    <!-- work Section -->
    
    
    
      <!-- CLINTS Section -->
    <section id="clients" class="clints-section" >
      <div class="height-60"> </div>
        <div class="container">
            <div class="row no-margin">
               <div class="col-lg-12 col-xs-12 text-center">
                    <h1 class="section-heading">Our Partners</h1>
					<p>The following are the partners who help us with the projects</p>
                    
                </div>
            </div>
            <div class="height-60"> </div>
            <div class="clints-block">
                <div id="owl-clients" class="owl-no-pagination ">
                    <div class="item">
                        <div class="clints-box">
                        <img src="images/clients/c1.png" alt="clints" class="img-responsive" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="clints-box">
                        <img src="images/clients/c2.png" alt="clints" class="img-responsive" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="clints-box">
                        <img src="images/clients/c3.png" alt="clints" class="img-responsive" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="clints-box">
                        <img src="images/clients/c4.png" alt="clints" class="img-responsive" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="clints-box">
                        <img src="images/clients/c5.png" alt="clints" class="img-responsive" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="clints-box">
                        <img src="images/clients/c1.png" alt="clints" class="img-responsive" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="clints-box">
                        <img src="images/clients/c1.png" alt="clints" class="img-responsive" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="clints-box">
                        <img src="images/clients/c2.png" alt="clints" class="img-responsive" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="clints-box">
                        <img src="images/clients/c3.png" alt="clints" class="img-responsive" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="clints-box">
                        <img src="images/clients/c4.png" alt="clints" class="img-responsive" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="clints-box">
                        <img src="images/clients/c5.png" alt="clints" class="img-responsive" >
                        </div>
                    </div>
                    <div class="item">
                        <div class="clints-box">
                        <img src="images/clients/c1.png" alt="clints" class="img-responsive" >
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </section>
         <!-- contact Section -->
    <section id="contact" class="text-center">
    <div class="height-60"> </div>
        <div class="container">
            <div class="row no-margin  ">
               <div class="col-lg-12 col-xs-12 text-center ">
                    <h1 class="section-heading">CONTACT US </h1>
					<p>Kindly feel free to contact us on </p>
                    
                </div>
            </div>
         <div class="height-60"> </div>
         <div class="row "> 
           <div class="col-md-6 col-sm-6 ">
            <div  class="row">
              <div class="col-md-12 contact "> <i class="fa fa-map-marker fa-2x"></i>
                <p class="dark">Moi University, Main Campus, Kesses

P.O Box 3900-30100 Eldoret

Uasin Gishu County, Kenya.</p>
              </div>
              <div class="col-md-12 contact  "> <i class="fa fa-envelope-o fa-2x"></i>
                <p class="dark">info@ptre.com <br>info@mu.ac.ke</p>
              </div>
              <div class="col-md-12 contact   "> <i class="fa fa-phone fa-2x"></i>
                <p class="dark">+254 790940508,  <br> +254 771336911  </p>
              </div>
             </div>
              
              <div class="clearfix"></div>
            </div> 
	       <div class="col-md-6 col-sm-6"> 
	    <div class="scrollReveal sr-right sr-delay-1">  <form name="sentMessage" id="contactForm">
		<div class="row">
		  <div class="col-md-6">
			<div class="form-group">
			  <input type="text" id="name" class="form-control" placeholder="Name" required aria-invalid="false">
			  <p class="help-block text-danger"></p>
			</div>
		  </div>
		  <div class="col-md-6">
			<div class="form-group">
			  <input type="email" id="email" class="form-control" placeholder="Email" required>
			  <p class="help-block text-danger"></p>
			</div>
		  </div>
		</div>
		<div class="form-group">
		  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message here..." required aria-invalid="false"></textarea>
		  <p class="help-block text-danger"></p>
		</div>
		<div id="success"></div>
		<button type="submit" class="btn btn-lg btn-white-border">Send Message</button>
	  </form> </div>
	</div>	
         </div>
         
         
  </div>
</section>
     <div class="height-60"> </div>
     <!-- footer Section -->
    <div class="map">
          <iframe src=""   allowfullscreen></iframe>
         </div>
    <div class="footer-bottom">
  <div class="container">
  <div class="col-lg-6 col-md-6 col-sm-6">
	<div class="f-b">Copyright © 2017Center of Exellence(PTRE) All Rights Reserved.</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
  <div class="footer-widget-social">
    <ul>
      <li><a data-tooltip="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
	  <li><a data-tooltip="Linkedin" href="#"><i class="fa fa-linkedin"></i> </a></li>
      <li><a data-tooltip="twitter" href="#"><i class="fa fa-twitter"></i></a></li>           
      <li><a data-tooltip="Pinterest" href="#"><i class="fa fa-pinterest-p"></i> </a></li>
      <li><a data-tooltip="Google-Plus" href="#"><i class="fa fa-google-plus"></i> </a></li>      
    </ul>
  </div>
</div>
</div>
</div>
<a href="javascript:;" class="scrollTop back-to-top" id="back-to-top">
            <i class="fa fa-arrow-up"></i>
        </a>
    
    <!-- jQuery plugins-->
	<script src="{{URL::asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
	<script src="{{URL::asset('bower_components/flexslider/jquery.flexslider-min.js')}}"></script>
	<script src="{{URL::asset('bower_components/scrollreveal/dist/scrollreveal.min.js')}}"></script>
	
    
	
	
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <!-- jQuery -->
    <script src="{{URL::asset('js/custom.js')}}"></script>	
    

    <!-- Bootstrap Core JavaScript -->
	<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>	
    
   
    <!-- Scrolling Nav JavaScript -->
	<script src="{{URL::asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{URL::asset('js/scrolling-nav.js')}}"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>
    <script src="{{URL::asset('bower_components/owl-carousel/owl.carousel.js')}}"></script>		
    

</body>

</html>
