@extends('layouts.main')

@section('title')
	<title>User </title>
@endsection

@section('css')
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
 
@endsection


@section('contents')
<div id="wrapper">
        <!-- Sidebar -->
     @include('menu.user-menu')
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid xyz">
			
                <div class="row">
	                     
<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-success">
					<div class="panel-heading">{{Auth::guest() ? 'Profile': Auth::user()->name.'\'s profile'}}</div>
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
							
							
							<div class="panel panel-default">
							<div class="row">
								<div class="panel-body">
								<div class="col-md-6">
									<div class="row account-item">
											<div class="col-md-4 item-label">Name: </div>
											<div class="col-md-6"style="color: black">{{$staff->title}}  {{$staff->name}} </div>
										</div>
										
										<div class="row account-item">
											<div class="col-md-4 item-label"> Id no: </div>
											<div class="col-md-6"style="color: black"> {{$staff->national_id}} </div>
										</div>
										
										<div class="row account-item">
											<div class="col-md-4 item-label"> Email: </div>
											<div class="col-md-6"style="color: black"> {{Auth::user()->email}} </div>
										</div>
									</div>
									<div class="col-md-6">
									<div class="row account-item">
											<div class="col-md-4 item-label "> Phone: </div>
											<div class="col-md-6"style="color: black"> {{$staff->phone_number}} </div>
										</div>
										<div class="row account-item">
											<div class="col-md-4 item-label"> Gender: </div>
											<div class="col-md-6"style="color: black"> {{$staff->gender}} </div>
										</div>
						
										<div class="row account-item">
											<div class="col-md-4 item-label"></div>
											<div class="col-md-6"style="color: black"> <a href="{{url('/user/edit-profile')}}" class="btn btn-sm btn-primary"> Edit Profile</a> </div>
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
   

  </div>
  </div>
  </div>

   
@endsection

@section('scripts')


@endsection
