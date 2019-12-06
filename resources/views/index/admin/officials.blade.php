@extends('layouts.template1')

@section('title')
	<title>Officials</title>
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

				<div id="delete-official" class="modal fade">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<form class="form-horizontal" role="form" method="POST" action="{{ url('/administrator/destroy-official') }}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" id="official_id" name="official_id" value="">
									<div class="modal-header alert alert-danger">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<span style="font-size:16px; color:#000000;">Do you want to delete this official from the list?.</span>
									</div>
									<div class="modal-body" id="get-delete-official"> </div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-md btn-primary">OK</button>
										<button type="submit" class="btn btn-md btn-default" data-dismiss="modal">Cancel</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				<div class="panel panel-success">
					<div class="panel-heading">Officials</div>
					<div class="panel-body">
					<div class="row">
					<div class="col-xs-12">
						<div class="custom_title">
							<a type="button" align="right" href="{{url('/administrator/create-official')}}" class="btn btn-xs btn-success" data-toggle="tooltip" title="Add Official"><span class="glyphicon glyphicon-plus"></span> Add Official</a>
							
						</div><!--end custom_title-->
					</div><!--end col-xs-12-->
				</div><!--end row-->
					<div class="row">
					<div class="col-xs-12">
						<ul class="list">
						@if(isset($officials))
									
									@foreach($officials as $official)
							<li>
								<a href="#">
									<div class="thumb">
										<img src="{{URL::asset('uploads/files/officials/'.$official->url)}}" alt="" width="150" height="150"/>
									</div>
									<h3>{{$official->title}} <?php echo' '; echo ucfirst(strtolower($official->name));?></h3>
									<h5><?php echo ucfirst(strtolower($official->role));?></h5>
									<a type="button" href="{{url('/administrator/edit-official/'.encrypt($official->id))}}"  class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit">Edit  <span class="glyphicon glyphicon-edit"></span></a>
									<button type="button" class="btn btn-sm btn-warning" onClick="getId({{$official->id}})" data-toggle="tooltip" title="Delete Official"><span class="glyphicon glyphicon-trash"></span></button>
								</a>
							</li>
							@endforeach
								@endif
							
						</ul>
					</div><!--end col-xs-12-->
				</div><!--end row-->


						
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
			var url = '{{url("/administrator/delete-official/")}}'+'/'+id;
			document.getElementById("official_id").value = id;
			if($("#get-delete-official").load(url)){
				$("#delete-official").modal('show');
			}
			
		});
	}
</script>


@endsection
