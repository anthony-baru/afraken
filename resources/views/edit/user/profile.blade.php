@extends('layouts.main')

@section('title')
	<title>Profile </title>
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
					<div class="panel-heading">{{Auth::guest() ? 'Profile': Auth::user()->name.'\'s profile'}}</div>
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
									
				<form role="form" class="form-horizontal" role="form" method="POST" action="{{ url('/user/update-profile') }}" autocomplete="off">
				       {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="title" class="col-sm-4 control-label">
                                        Name</label>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-md-3">
											<select class="form-control" name="title">
													<option value="">--Select title--</option>
													<option value="Mr." 
													<?php 
															if(old('title') != null){ if(old('title') == 'Mr.')echo 'selected="selected"';}
															else  if($account->title == 'Mr.')echo 'selected="selected"';
														?>
													>Mr.</option>
													<option value="Mrs."
													<?php 
													if(old('title') != null){ if(old('title') == 'Mrs.')echo 'selected="selected"';}
															else  if($account->title == 'Mrs.')echo 'selected="selected"';
														?>
													>Mrs.</option>
													<option value="Ms." 
													<?php 
													
													if(old('title') != null){ if(old('title') == 'Ms.')echo 'selected="selected"';}
															else  if($account->title == 'Ms.')echo 'selected="selected"';
														?>
													>Ms.</option>
													<option value="Dr." 
													<?php 
													
													if(old('title') != null){ if(old('title') == 'Dr.')echo 'selected="selected"';}
															else  if($account->title == 'Dr.')echo 'selected="selected"';
														?>
													>Dr.</option>
													<option value="Prof."
													<?php 
													
													if(old('title') != null){ if(old('title') == 'Prof.')echo 'selected="selected"';}
															else  if($account->title == 'Prof.')echo 'selected="selected"';
														?>
													>Prof.</option>
												</select>
												@if ($errors->has('title'))
													<span class="help-block">
														<idong>{{ $errors->first('title') }}</idong>
													</span>
												@endif
                                               
                                            </div>
                                            <div class="col-md-9">
											
                                                
												<input id="name" type="text" class="form-control" name="name" value="{{ old('name') == null ? $account->name : old('name') }}" >

                                                 @if ($errors->has('name'))
                                             <span class="help-block">
                                               <strong>{{ $errors->first('name') }}</strong>
                                           </span>
                                                 @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="gender" class="col-sm-4 control-label">
                                        Gender</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="gender">
													<option value="">--Select gender--</option>
													<option value="Male" 
													<?php 
															if(old('gender') != null){ if(old('gender') == 'Male')echo 'selected="selected"';}
															else  if($account->gender == 'Male')echo 'selected="selected"';
														?>
													>Male</option>
													<option value="Female" 
													<?php 
															if(old('gender') != null){ if(old('gender') == 'Female')echo 'selected="selected"';}
															else  if($account->gender == 'Female')echo 'selected="selected"';
														?>
													>Female</option>
												</select>
												@if ($errors->has('gender'))
													<span class="help-block">
														<idong>{{ $errors->first('gender') }}</idong>
													</span>
												@endif
                                    </div>
                                </div>
								
								
								<div class="form-group{{ $errors->has('national_id') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="national_id" class="col-sm-4 control-label">
                                       Id</label>
                                    <div class="col-sm-8">
                     
										
										<input id="national_id" type="text" class="form-control" name="national_id"  value="{{ old('national_id') == null ? $account->national_id : old('national_id') }}">

                                @if ($errors->has('national_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('national_id') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
								
								
							<div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="phone_number" class="col-sm-4 control-label">
                                        Mobile Number</label>
                                    <div class="col-sm-8">
                           
										
								 <input id="phone_number" type="text" class="form-control"  name="phone_number" value="{{ old('phone_number') == null ? $account->phone_number : old('phone_number') }}">

                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
								
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="email" class="col-sm-4 control-label">
                                        Email</label>
                                    <div class="col-sm-8">

										<input id="email" type="email" class="form-control"  name="email" value="{{ old('email') == null ? Auth::user()->email : old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
								
															

                                <div class="row">
                                    <div class="col-sm-4">
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="submit" id="btn-login" class="btn btn-primary btn-lg btn-block" value="Update">
                                        
                                    </div>
                                </div>
								<div class="row">
                                   <div class="col-sm-4">
                                    </div>
                                    <div class="col-sm-8">
                                        
                                        
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
