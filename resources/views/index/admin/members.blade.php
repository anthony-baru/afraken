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
					<div class="panel-heading">SubCommittee Members</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-condensed">
								<caption>
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
										
									@endif	
								</caption>
								
								<thead>
									<tr>
									
									<th style="width:90%;">Members</th>
									
									
					
								</tr>
								</thead>
								
								<tbody>
								@if(isset($members))
									<?php 
                                     $rowNum = 1; ?>
									@foreach($members as $member)
									<tr>
									    <td><a href="{{url('/administrator/show-committee-members/'.encrypt($member->id))}}"><?php echo $rowNum; $rowNum++ ?> {{$member->name}} - @if($member->total_members==1){{$member->total_members}} Member @else {{$member->total_members}} Members @endif</a></td>
										
										
	
									</tr>
									@endforeach
								@endif
								</tbody>
							</table>
						</div>

						
					</div>
				</div>
			</div>
		</div>  
   

 
 
   
@endsection

@section('scripts')


@endsection
