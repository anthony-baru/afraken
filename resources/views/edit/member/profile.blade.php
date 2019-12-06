@extends('layouts.template1')

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
 @include('menu.member-menu')
 
            <div class="container">
			
                <div class="row">
	                     
               <div style="padding-top: 20px;padding-bottom: 20px"  class="col-md-10 col-md-offset-1">
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
								<form role="form" class="form-horizontal" role="form" method="POST" action="{{ url('/member/update-profile') }}" autocomplete="off">
									<div class="col-md-6">
									
				
				       {{ csrf_field() }}
                                
								
								
								<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="first_name" class="col-sm-4 control-label">
                                        First Name</label>
                                    <div class="col-sm-8">
                     
										
										<input id="first_name" type="text" class="form-control" name="first_name"  placeholder="First Name " value="{{ old('first_name') == null ? $account->first_name : old('first_name') }}">

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
								
								<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="first_name" class="col-sm-4 control-label">
                                        Last Name</label>
                                    <div class="col-sm-8">
                     
										
										<input id="last_name" type="text" class="form-control" name="last_name"  placeholder="Last Name " value="{{ old('last_name') == null ? $account->last_name : old('last_name') }}">

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
								

								
								
							<div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="phone_number" class="col-sm-4 control-label">
                                        Phone Number</label>
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

							
								
															

                               
								
									

										
										
									</div>
									
									<div class="col-md-6">
									
									<div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="category_id" class="col-sm-4 control-label">
                                        Category:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="category_id" name="category_id">
									<option value="">--Select your Category--</option>
													@if(isset($categories))
										@foreach($categories as $category)
											
											<option value="{{$category->id}}" <?php if(old('category') != null){if(old('category') == $category->id){ echo 'selected="selected"';}}else if($account->category_id== $category->id){ echo 'selected="selected"';} ?>>
											{{$category->name}}</option>
										@endforeach
									@endif
									</select>
												@if ($errors->has('category_id'))
													<span class="help-block">
														<strong>{{ $errors->first('category_id') }}<strong>
													</span>
												@endif
                                    </div>
                                </div>
								
								<div class="form-group{{ $errors->has('university') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="university" class="col-sm-4 control-label">
                                        University in France:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="university" name="university">
									<option value="">--Select your University--</option>
													@if(isset($universities))
										@foreach($universities as $university)
											<option value="{{$university->name}}" <?php if(old('university') != null){if(old('university') == $university->name){ echo 'selected="selected"';}}else if($account->university== $university->name){ echo 'selected="selected"';} ?>>
											{{$university->name}}</option>
										@endforeach
									@endif
									</select>
												@if ($errors->has('university'))
													<span class="help-block">
														<strong>{{ $errors->first('university') }}<strong>
													</span>
												@endif
                                    </div>
                                </div>
								
																								<div class="form-group{{ $errors->has('degree') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="degree" class="col-sm-4 control-label">
                                        Degree</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="degree">
													<option value="">--Select Degree--</option>
													<option value="Bachelors" 
													<?php 
															if(old('degree') != null){ if(old('degree') == 'Bachelors')echo 'selected="selected"';}
															else  if($account->degree == 'Bachelors')echo 'selected="selected"';
														?>
													>Bachelors</option>
													<option value="Masters" 
													<?php 
															if(old('degree') != null){ if(old('degree') == 'Masters')echo 'selected="selected"';}
															else  if($account->degree == 'Masters')echo 'selected="selected"';
														?>
													>Masters</option>
													<option value="Doctoral" 
													<?php 
															if(old('degree') != null){ if(old('degree') == 'Doctoral')echo 'selected="selected"';}
															else  if($account->degree == 'Doctoral')echo 'selected="selected"';
														?>
													>Doctoral</option>
													
												</select>
												@if ($errors->has('degree'))
													<span class="help-block">
														<idong>{{ $errors->first('degree') }}</idong>
													</span>
												@endif
                                    </div>
                                </div>
								
								<div class="form-group{{ $errors->has('employer') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="employer" class="col-sm-4 control-label">
                                        Employer:</label>
                                    <div class="col-sm-8">
                     
										
										<input id="employer" type="text" class="form-control" name="employer"  placeholder="Employer" value="{{ old('employer') == null ? $account->employer : old('employer') }}">

                                @if ($errors->has('employer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('employer') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
								
								<div class="form-group">
								 <div class="col-sm-8">
                                       
                                    </div>
                                    
                                    <div class="col-sm-4">
                                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" onclick="waitingDialog.show('Please Wait', {dialogSize: 'sm', progressType: 'warning'})" value="Update">
                                        
                                    </div>
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
  

   
@endsection

@section('scripts')


@endsection
