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
	<title>Images</title>
	<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{URL::asset('css/jquery.fancybox.min.css')}}" rel="stylesheet">
	<link href="{{URL::asset('css/simple-sidebar.css')}}" rel="stylesheet">
	<link href="{{URL::asset('css/styles.css')}}" rel="stylesheet">
	<link href="{{URL::asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

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
		.img-responsive {
  min-height: 100px;
  max-height: 100px;
  vertical-align: top;
}
	</style>
 
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
                    @if (Auth::guest())
                    <li>
                        <a class="page-scroll" href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Log in</a>
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

             <div id="wrapper">
        <!-- Sidebar -->
     @include('menu.user-menu')
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid xyz">
			
                <div class="row">
	                     
<div class="col-md-12">

<div id="images" class="modal fade">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
									<div class="modal-header alert alert-success" style="color:#fff;background-color:#2A88AD;border-color:#d6e9c6">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<span style="font-size:16px; color:#000000;">Products</span>
									</div>
									<div class="modal-body" id="get-images">
									<div style="padding-top: 10px" class="row">
											<div class='list-group gallery'>
		@if(!empty(Session::get('similars')))
			@foreach(Session::get('similars') as $similar)
		           
            <div class='col-sm-4 col-xs-6 col-md-4 col-lg-4'>
			<div class='text-center'>
                        <small class='text-muted'><b>{{$similar->site->name}}</b></small>
                    </div> 
                <a class="thumbnail fancybox" rel="ligthbox" target="_blank" href="{{$similar->view_item_url}}">
                    <img class="img-responsive" alt="" src="{{$similar->image}}" />
                    <div class='text-right'>
                        <small class='text-muted'>{{$similar->title}}</small>
                    </div>
					<!-- text-right / end -->
					<div class='text-right'>
                        <small class='text-muted'><b>{{$similar->price}}</b></small>
                    </div> 
					<div class='text-right'>
                        <small class='text-muted'><b>Distance:{{$similar->distance}}</b></small>
                    </div> 
					<!-- text-right / end -->
                </a>
            </div> 
			<!-- col-6 / end -->
			@endforeach
								@endif

            
        </div> <!-- list-group / end -->
									
							</div>	

						
									</div>
								
							</div>
						</div>
					</div>
					
					
					<div id="noimages" class="modal fade">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
									<div class="modal-header alert alert-success" style="color:#fff;background-color:#2A88AD;border-color:#d6e9c6">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<span style="font-size:16px; color:#000000;">No Product Found Matching your photo.</span>
									</div>
									<div class="modal-body" id="get-images">

                                       <b>No Product Found Matching your photo.</b>
						
									</div>
								
							</div>
						</div>
					</div>

				<div style="padding-top: 10px" class="panel panel-success">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
					<div style="padding-top: 10px;padding-left: 10px" class="row">
					<div class="col-sm-2"></div>
					
					<div class="col-sm-10"><form  enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ url('/search-image') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						
												<div class="form-group {{$errors->has('image') ? 'has-error' : ''}}">
								
								<div class="col-md-5">
									<input type="file" class="form-control" id="image" name="image">
									@if ($errors->has('image'))
										<span class="help-block">
											<strong>{{ $errors->first('image') }}</strong>
										</span>
									@else
										<span class="help-block" id = "image_help"></span>
									@endif
									 
								</div>
							
							<div class="col-md-5">
								<select id="category_id" name="category_id" class="form-control" value="{{ old('category_id') }}">
									<option value="">--Choose Category To Search--</option>
									@if(isset($categories))
										@foreach($categories as $category)
											<option value="{{$category->id}}" {{(old('category') == $category->id ? 'selected="selected"' : '')}} >{{$category->name}}</option>
										@endforeach
									@endif
								</select>
								@if ($errors->has('category_id'))
									<span class="help-block">
										<strong>{{ $errors->first('category_id') }}</strong>
									</span>
								@else
									<span class="help-block" id = "name-help"></span>
								@endif
							</div>
								<div class="col-md-2">
								<button type="submit" class="btn btn-sm btn-success"onclick="waitingDialog.show('Searching........', {dialogSize: 'sm', progressType: 'primary'})"><span class="glyphicon glyphicon-search"></span>  Search</button>
								</div>
								
							</div>
							</form>
							</div>
					
					</div>
												<div style="padding-top: 10px" class="row">
		<div class='list-group gallery'>
		@if(isset($products))
			@foreach($products as $product)
		            
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
			<div class='text-center'>
                        <small class='text-muted'><b>{{$product->site->name}}</b></small>
                    </div> 
                <a class="thumbnail fancybox" rel="ligthbox"  target="_blank" href="{{$product->view_item_url}}">
                    <img class="img-responsive" alt="" src="{{$product->image}}" />
                    <div class='text-right'>
                        <small class='text-muted'>{{$product->title}}</small>
                    </div>
					<!-- text-right / end -->
					<div class='text-right'>
                        <small class='text-muted'><b>{{$product->price}}</b></small>
                    </div> 
                </a>
            </div> 
			<!-- col-6 / end -->
			@endforeach
								@endif

            
        </div> <!-- list-group / end -->
	</div> <!-- row / end -->
	
	<div class="row">
						<div class="col-lg-6 col-lg-push-2">
						   {!! str_replace('/?', '?', $products->render()) !!}
						</div>
					</div>

						
					</div>
				</div>
			</div>
		</div>  
   

  </div>
  </div>  
   

  </div>
  

   

<script src="{{URL::asset('js/js/jquery.js')}}"></script>
	<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('js/jquery.fancybox.min.js')}}"></script>
	<script src="{{URL::asset('js/sidebar_menu.js')}}"></script>
	<script src="{{URL::asset('js/waiting.js')}}"></script>
<script type="text/javascript">
   @if(!empty(Session::get('error_code')) && Session::get('error_code') == 5)
	   $(document).ready(function(){
        $('#images').modal('show');
		});
		@elseif(!empty(Session::get('error_code')) && Session::get('error_code') == 6)
		$(document).ready(function(){
        $('#noimages').modal('show');
		});
    @endif
</script>

</body>
</html>
