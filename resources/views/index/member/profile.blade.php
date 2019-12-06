@extends('layouts.template1')

@section('title')
	<title>
		Login
	</title>
@endsection
@section('css')
<style>
p {
    color: #000;
}

</style>
	
@endsection

@section('contents')
           <div id="wrapper">
        <!-- Sidebar -->
     @include('menu.member-menu')
        <!-- Page Content -->
       
            <div class="container-fluid xyz">
			
                <div class="row">
	                     
<div style="padding-top: 20px;padding-bottom: 50px" class="col-md-10 col-md-offset-1">
				<div  class="panel panel-success">
					<div class="panel-heading">@if( Auth::user()->hasRole('Chairman')) Chairman {{Auth::user()->account()->first()->chairman->sub_committee->name}} Sub Committee @else Profile @endif</div>
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
								<div class="col-md-12">
									<div class="row account-item">
											<div class="col-md-4 item-label">First Name: </div>
											<div class="col-md-6"style="color: black">{{$account->first_name}} </div>
										</div>
										
										<div class="row account-item">
											<div class="col-md-4 item-label"> Last Name: </div>
											<div class="col-md-6"style="color: black"> {{$account->last_name}} </div>
										</div>
										
										<div class="row account-item">
											<div class="col-md-4 item-label"> Email: </div>
											<div class="col-md-6"style="color: black"> {{Auth::user()->email}} </div>
										</div>
									
									
									<div class="row account-item">
											<div class="col-md-4 item-label "> Phone Number: </div>
											<div class="col-md-6"style="color: black"> {{$account->phone_number}} </div>
										</div>
										<div class="row account-item">
											<div class="col-md-4 item-label"> Category: </div>
											<div class="col-md-6"style="color: black"> {{$account->category->name}} </div>
										</div>
										<div class="row account-item">
											<div class="col-md-4 item-label"> Sub-committee: </div>
											<div class="col-md-6"style="color: black"> {{$account->sub_committee->name}} </div>
										</div>
										<div class="row account-item">
											<div class="col-md-4 item-label"> University: </div>
											<div class="col-md-6"style="color: black"> {{$account->university}} </div>
										</div>
										<div class="row account-item">
											<div class="col-md-4 item-label"> Degree: </div>
											<div class="col-md-6"style="color: black"> {{$account->degree}} </div>
										</div>
										<div class="row account-item">
											<div class="col-md-4 item-label"> Employer: </div>
											<div class="col-md-6"style="color: black"> {{$account->employer}} </div>
										</div>
										<div class="row account-item">
											<div class="col-md-4 item-label"> Status: </div>
											<div class="col-md-6"style="color: black"> {{$account->status}} </div>
										</div>
						
										<div class="row account-item">
											<div class="col-md-4 item-label"></div>
											<div class="col-md-6"> <a href="{{url('/member/edit-profile')}}" class="btn btn-sm btn-primary"> Edit Profile</a> </div>
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