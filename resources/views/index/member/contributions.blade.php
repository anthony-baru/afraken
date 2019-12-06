@extends('layouts.template1')

@section('title')
	<title>Contributions</title>
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
					<div class="panel-heading">Contributions</div>
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
									
									<th style="width:3%;"></th>
									<th style="width:20%;">Date</th>
									<th style="width:20%;">Description</th>
									<th style="width:20%;">Amount</th>
									
									
									
					
								</tr>
								

								</thead>
								
								<tbody>
								@if(isset($contributions))
									<?php 
                                     $rowNum = 1; ?>
									@foreach($contributions as $contribution)
									<tr>
									    <td><?php echo $rowNum; $rowNum++ ?></td>
										<td><?php echo date('m/d/Y', strtotime($contribution->date))  ?></td>
										<td> {{$contribution->description}} </td>
										<td><?php echo number_format(round($contribution->amount,2),2);?></td>										
										
										
									
										
	
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
