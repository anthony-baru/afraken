@extends('layouts.template1')

@section('title')
	<title>Download</title>
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
	                     
             <div class="col-md-10 col-md-offset-1">
				<div class="panel panel-success">
					<div class="panel-heading">Download</div>
					<div class="panel-body">
						<form  enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ url('/administrator/update-download/'.$download->id) }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<div class="col-md-7 col-md-push-4">
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
						
						
						
						
			
						
							
						
						
							
								<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label for="description" class="col-md-3 control-label">
                                        Description</label>
                                    <div class="col-md-7">

										<input id="description" type="text" class="form-control"  placeholder="Description" name="description" value="{{ old('description') == null ? $download->description : old('description') }}">

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                                    </div>
									
                                </div>
								
								
						
						<div class="form-group">
							<div class="col-md-7 col-md-push-3">
								<button type="submit" class="btn btn-sm btn-success"onclick="waitingDialog.show('Please Wait', {dialogSize: 'sm', progressType: 'warning'})"><span class="glyphicon glyphicon-refresh"></span>  Update</button>
							</div>	
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>  
   

  </div>
  </div>


   
@endsection

@section('scripts')


@endsection
