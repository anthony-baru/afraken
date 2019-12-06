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
					<div class="panel-heading">Subscribe to SubCommittee</div>
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
								<form role="form" class="form-horizontal" role="form" method="POST" action="{{ url('/member/store-subscription') }}" >
									 {{ csrf_field() }}

									
									<div class="col-md-6 col-md-offset-2">
									
								<div class="form-group{{ $errors->has('sub_committee_id') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="sub_committee_id" class="col-sm-4 control-label">
                                        Sub-committee:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="sub_committee_id" name="sub_committee_id">
									<option value="">--Select your sub-committee--</option>
													@if(isset($sub_committees))
										@foreach($sub_committees as $sub_committee)
											<option value="{{$sub_committee->id}}" {{old('sub_committee_id') == $sub_committee->id ? 'selected="selected"' : ''}}>
												{{$sub_committee->name}}
											</option>
										@endforeach
									@endif
									</select>
												@if ($errors->has('sub_committee_id'))
													<span class="help-block">
														<strong>{{ $errors->first('sub_committee_id') }}<strong>
													</span>
												@endif
                                    </div>
                                </div>
								
								<div class="form-group">
								 <div class="col-sm-8">
                                       
                                    </div>
                                    
                                    <div class="col-sm-4">
                                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" onclick="waitingDialog.show('Please Wait', {dialogSize: 'sm', progressType: 'warning'})" value="Subscribe">
                                        
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
