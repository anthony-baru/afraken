@extends('layouts.template1')

@section('title')
	<title>Downloads</title>
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

				<div id="delete-download" class="modal fade">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<form class="form-horizontal" role="form" method="POST" action="{{ url('/administrator/destroy-download') }}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" id="download_id" name="download_id" value="">
									<div class="modal-header alert alert-danger">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<span style="font-size:16px; color:#000000;">Do you want to delete this download from the list?.</span>
									</div>
									<div class="modal-body" id="get-delete-download"> </div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-md btn-primary">OK</button>
										<button type="submit" class="btn btn-md btn-default" data-dismiss="modal">Cancel</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				<div class="panel panel-success">
					<div class="panel-heading">Downloads</div>
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
									
									<th colspan="5"><a type="button" align="right" href="{{url('/administrator/create-download')}}" class="btn btn-xs btn-success" data-toggle="tooltip" title="Add Download"><span class="glyphicon glyphicon-plus"></span> Add Download</a></th>
									
					
								</tr>
								
									@if(count($downloads)>0)						
									<tr>
									
									<th style="width:3%;"></th>
									<th style="width:20%;">Description</th>			
									
									<th style="width:5%;"></th>
									<th style="width:5%;"></th>
									<th style="width:5%;"></th>
									
									
					
								</tr>
								@endif
								

								</thead>
								
								<tbody>
								@if(isset($downloads))
									<?php 
                                     $rowNum = 1; ?>
									@foreach($downloads as $download)
									<tr>
									<td><?php echo $rowNum; $rowNum++ ?></td>
									<td>{{ $download->description}}</td>
										
										
				
					                
			
				                      
										
										<td><a type="button" target="_blank" href="{{asset('uploads/files/downloads/'.$download->url)}}"  class="btn btn-sm btn-warning" data-toggle="tooltip" title="View">View  <span class="glyphicon glyphicon-eye-open"></span></a></td>
										<td><a type="button" href="{{url('/administrator/edit-download/'.encrypt($download->id))}}"  class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit">Edit  <span class="glyphicon glyphicon-edit"></span></a></td>
										<td><button type="button" class="btn btn-sm btn-warning" onClick="getId({{$download->id}})" data-toggle="tooltip" title="Delete the Download"><span class="glyphicon glyphicon-trash"></span></button></td>
											
										
										
									
										
	
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

<script>
	function getId(id){
		$(document).ready(function(){
			var url = '{{url("/administrator/delete-download/")}}'+'/'+id;
			document.getElementById("download_id").value = id;
			if($("#get-delete-download").load(url)){
				$("#delete-download").modal('show');
			}
			
		});
	}
</script>


@endsection
