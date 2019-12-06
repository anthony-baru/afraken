@extends('layouts.template1')

@section('title')
	<title>Subscriptions</title>
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
 @include('menu.member-menu')

           
            <div class="container-fluid xyz">
			
                <div class="row">
	                     
<div style="padding-top: 50px;padding-bottom: 180px"class="col-md-12">
				<div class="panel panel-success">
					<div class="panel-heading">My subscribed Sub Committees</div>
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
									
									<th colspan="3"><a type="button" align="right" href="{{url('/member/create-subscription')}}" class="btn btn-xs btn-success" data-toggle="tooltip" title="Subscrbe Subcommittee"><span class="glyphicon glyphicon-plus"></span> Subscrbe Subcommittee</a></th>
									
					
								</tr>

								</thead>
								
								<tbody>
								@if(isset($subscriptions))
									<?php 
                                     $rowNum = 1; ?>
									@foreach($subscriptions as $subscription)
									<tr>
									    <td><?php echo $rowNum; $rowNum++ ?></td>
										<td> {{$subscription->name}} </td>
										
										@if($subscription->id===$account->sub_committee_id)
										<td></td>
										@else
											<td><a type="button" href="{{url('/member/unsubscribe/'.encrypt($subscription->id))}}" class="btn btn-xs btn-primary" data-toggle="tooltip" title="Unsubscribe">Unsubscribe</a></td>
										@endif
										
									
										
	
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
   

  </div>
  </div>
 
   
@endsection

@section('scripts')


@endsection
