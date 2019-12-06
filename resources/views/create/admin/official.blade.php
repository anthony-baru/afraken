@extends('layouts.template1')

@section('title')
	<title>Official</title>
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
					<div class="panel-heading">Official</div>
					<div class="panel-body">
						<form  enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ url('/administrator/store-official') }}">
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
						
						
						
						<div class="form-group {{$errors->has('official') ? 'has-error' : ''}}">
								<label class="col-md-3 control-label" for="official">Photo</label>
								<div class="col-md-7">
									<input type="file" class="form-control" id="official" name="official">
									@if ($errors->has('official'))
										<span class="help-block">
											<strong>{{ $errors->first('official') }}</strong>
										</span>
									@else
										<span class="help-block" id = "official_help"></span>
									@endif
								</div>
							</div>
			
						
							       <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-3 control-label">
                                        Title</label>
                                    <div class="col-md-7">
                                       
											<select class="form-control" name="title">
													<option value="">--Select title--</option>
													<option value="Mr." {{old('title') == 'Mr.' ? 'selected="selected"':''}}>Mr.</option>
													<option value="Mrs." {{old('title') == 'Mrs.' ? 'selected="selected"':''}}>Mrs.</option>
													<option value="Ms." {{old('title') == 'Ms.' ? 'selected="selected"':''}}>Ms.</option>
													<option value="Dr." {{old('title') == 'Dr.' ? 'selected="selected"':''}}>Dr.</option>
													<option value="Prof." {{old('title') == 'Prof.' ? 'selected="selected"':''}}>Prof.</option>
												</select>
												@if ($errors->has('title'))
													<span class="help-block">
														<idong>{{ $errors->first('title') }}</idong>
													</span>
												@endif
                                               
                                           
                                            
                                                
												
                                        </div>
                                   
                                </div>
						
						
							
								<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-3 control-label">
                                        Name</label>
                                    <div class="col-md-7">

										<input id="name" type="text" class="form-control"  placeholder="Name" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                    </div>
									
                                </div>
								
								<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                                    <label for="role" class="col-md-3 control-label">
                                        Role</label>
                                    <div class="col-md-7">

										<input id="role" type="text" class="form-control"  placeholder="Role" name="role" value="{{ old('role') }}">

                                @if ($errors->has('role'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                                    </div>
									
                                </div>
								
								
						
						<div class="form-group">
							<div class="col-md-7 col-md-push-3">
								<button type="submit" class="btn btn-sm btn-success"onclick="waitingDialog.show('Please Wait', {dialogSize: 'sm', progressType: 'warning'})"><span class="glyphicon glyphicon-cloud-upload"></span>  Add</button>
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
