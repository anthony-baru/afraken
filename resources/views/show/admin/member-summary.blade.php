@extends('layouts.template1')

@section('title')
	<title>Members</title>
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
 @include('menu.admin-menu')

           
            <div class="container-fluid xyz">
			
                <div class="row">
	                     
<div style="padding-top: 50px;padding-bottom: 180px"class="col-md-12">
				<div class="panel panel-success">
					<div class="panel-heading">{{$account->first_name}} {{$account->last_name}}</div>
					<div class="panel-body">
						<div class="panel panel-default">
							<div class="row">
								<div class="panel-body">	
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-condensed">
									<thead>
									<tr>
									<th>Details</th>
									</tr>
								</thead>
									<tbody>
										<tr>
											<td><a href="{{url('/administrator/show-member-profile/'.encrypt($account->id))}}">Profile</a></td>	
										</tr>
										<tr>
											<td><a href="{{url('/administrator/show-member-contributions/'.encrypt($account->id))}}">Contributions</a></td>	
										</tr>
										
	
										
										
										
										<tr>
											<td></td>
											
										</tr>
		
									</tbody>
								</table>
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
