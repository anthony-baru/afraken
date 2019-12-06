@extends('layouts.main')

@section('title')
	<title>Images</title>
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

            <div class="container">
			
                <div class="row">
	                     
             <div style="padding-top: 10px" class="col-md-10 col-md-offset-1">
				<div class="panel panel-success">
					<div class="panel-heading">Upload Images</div>
					<div class="panel-body">
						<form  enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ url('/administrator/upload-image') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<div class="col-md-10">
								@if(Session::has('success_notification'))
									<div class="alert alert-success">
										<a href="#" class="close" data-dismiss="alert">&times;</a>
										<strong></strong>{{Session::get('success_notification')}}
									</div>
								@endif	
								@if(Session::has('warning_notification'))
									<div class="alert alert-warning">
										<a href="#" class="close" data-dismiss="alert">&times;</a>
										<strong></strong>{{Session::get('warning_notification')}}
									</div>
								@endif	
							</div>
						</div>
						
						
						
						<div class="form-group {{$errors->has('files[]') ? 'has-error' : ''}}">
								<label class="col-md-3 control-label" for="files[]">Images</label>
								<div class="col-md-7">
									<input type="file" class="form-control" id="files[]"  name="files[]" multiple="">
									@if ($errors->has('files[]'))
										<span class="help-block">
											<strong>{{ $errors->first('files[]') }}</strong>
										</span>
									@else
										<span class="help-block" id = "photo_help"></span>
									@endif
								</div>
							</div>
			
						
							
						
						
							
						
						<div class="form-group">
							<div class="col-md-7 col-md-push-4">
								<button type="submit" class="btn btn-sm btn-success"onclick="waitingDialog.show('Please Wait', {dialogSize: 'sm', progressType: 'primary'})"><span class="glyphicon glyphicon-cloud-upload"></span>  Upload</button>
								
							</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>  
   

  </div>


   
@endsection

@section('scripts')


@endsection
