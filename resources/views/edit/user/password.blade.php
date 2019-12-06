@extends('layouts.main')

@section('title')
	<title>Password </title>
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
        <!-- Sidebar -->
     @include('menu.user-menu')
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid xyz">
			
                <div class="row">
	                     
<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-success">
					<div class="panel-heading">Change password</div>
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
						</div>
						<div class="panel panel-default">
							<div class="row">
								<div class="panel-body">
									<div class="col-md-12">
									
				<form role="form" class="form-horizontal" role="form" method="POST" action="{{ url('/user/change-password') }}" autocomplete="off">
				       {{ csrf_field() }}
                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label style="color:#000" for="password" class="col-md-4 control-label">Current Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" value="{{ $password or old('password') }}">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }}">
                            <label style="color:#000" for="password" class="col-md-4 control-label">New Password</label>

                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password">

                                @if ($errors->has('new_password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label style="color:#000" for="password-confirm" class="col-md-4 control-label">Confirm New Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-refresh"></i> Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
									

										
										
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
