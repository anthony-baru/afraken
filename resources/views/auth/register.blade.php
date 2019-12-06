@extends('layouts.template2')

@section('title')
	<title>
		Register
	</title>
@endsection
@section('css')

<style>
p {
    color: #000;
}
</style>
	
@endsection

@section('contents')

     <div class="container">
        <div class="form-style-12" style="padding-top: 10px">
		<div class="col-lg-12"  style="background:#fff">
		<div class="form-wrap">
                 <div class="panel panel-default">
                   <form role="form" class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" autocomplete="off">
				       {{ csrf_field() }}
                             <input type="hidden" name="role" value="Member">
                        
							<div class="row" style="padding-top: 5px">
								
								<div class="col-md-6">
								    
                                
								<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="first_name" class="col-sm-4 control-label">
                                        First Name</label>
                                    <div class="col-sm-8">
                     
										
										<input id="first_name" type="text" class="form-control" name="first_name"  placeholder="First Name " value="{{ old('first_name') }}">

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
                     
										
										<input id="last_name" type="text" class="form-control" name="last_name"  placeholder="Last Name " value="{{ old('last_name') }}">

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
                           
										
								 <input id="phone_number" type="text" class="form-control"  placeholder="Mobile Number" name="phone_number" value="{{ old('phone_number') }}">

                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
								
								<div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="category_id" class="col-sm-4 control-label">
                                        Category:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="category_id" name="category_id">
									<option value="">--Select your Category--</option>
													@if(isset($categories))
										@foreach($categories as $category)
											<option value="{{$category->id}}" {{old('category_id') == $category->id ? 'selected="selected"' : ''}}>
												{{$category->name}}
											</option>
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
																<div class="form-group{{ $errors->has('university') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="university" class="col-sm-4 control-label">
                                        University in France:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="university" name="university">
									<option value="">--Select your University--</option>
													@if(isset($universities))
										@foreach($universities as $university)
											<option value="{{$university->name}}" {{old('university') == $university->name ? 'selected="selected"' : ''}}>
												{{$university->name}}
											</option>
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
													<option value="Bachelors" {{old('degree') == 'Bachelors' ? 'selected="selected"':''}}>Bachelors</option>
													<option value="Masters" {{old('degree') == 'Masters' ? 'selected="selected"':''}}>Masters</option>
													<option value="Doctoral" {{old('degree') == 'Doctoral' ? 'selected="selected"':''}}>Doctoral</option>
												</select>
												@if ($errors->has('degree'))
													<span class="help-block">
														<idong>{{ $errors->first('degree') }}</idong>
													</span>
												@endif
                                    </div>
                                </div>
																

								
								
								
								

								</div>
								<div class="col-md-6">
								
								<div class="form-group{{ $errors->has('employer') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="employer" class="col-sm-4 control-label">
                                        Employer:</label>
                                    <div class="col-sm-8">
                     
										
										<input id="employer" type="text" class="form-control" name="employer"  placeholder="Employer" value="{{ old('employer') }}">

                                @if ($errors->has('employer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('employer') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
								
								<div class="form-group{{ $errors->has('payment') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="payment" class="col-sm-4 control-label">
                                        Payment (Ksh 2000)</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="payment" onChange="check(this.value)">
													<option value="">--Registration Fee Payment Method--</option>
													<option value="Mpesa" {{old('payment') == 'Mpesa' ? 'selected="selected"':''}}>Mpesa</option>
													<option value="Cash" {{old('payment') == 'Cash' ? 'selected="selected"':''}}>Cash</option>
													<option value="Cheque" {{old('payment') == 'Cheque' ? 'selected="selected"':''}}>Cheque</option>
												</select>
												@if ($errors->has('payment'))
													<span class="help-block">
														<idong>{{ $errors->first('payment') }}</idong>
													</span>
												@endif
                                    </div>
                                </div>
								
								<div id="hidden-div"  style="display:none;"class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="code" class="col-sm-4 control-label">
                                        Mpesa Code:</label>
                                    <div class="col-sm-8">
                           
										
								 <input id="code" type="text" class="form-control"  placeholder="Mpesa Payment Code" name="code" value="{{ old('code') }}">

                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
								
								                               <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="email" class="col-sm-4 control-label">
                                        Email</label>
                                    <div class="col-sm-8">

										<input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
								


                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="password" class="col-sm-4 control-label">
                                        Password</label>
                                    <div class="col-sm-8">
                                        
										<input id="password" type="password" class="form-control" placeholder="Password" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
								 <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label style="color:#000" for="password_confirmation" class="col-sm-4 control-label">
                                        Confirm Password</label>
                                    <div class="col-sm-8">
                                        
										
										<input id="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <label style="color:#000"  class="col-sm-4 control-label">
                                        </label>
                                    <div class="col-sm-8">
                                        
										
										By clicking Register, you agree with our <a target="blank" href="{{URL::asset('uploads/files/static/afraken_privacy_policy.pdf')}}">Terms </a>
                               
                                    </div>
                                </div>
								
								
								
								<div class="form-group">
								 <div class="col-sm-8">
                                       
                                    </div>
                                    
                                    <div class="col-sm-4">
                                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" onclick="waitingDialog.show('Please Wait', {dialogSize: 'sm', progressType: 'warning'})" value="Register">
                                        
                                    </div>
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

<script>
function check(id) {
	x=document.getElementById('hidden-div');
    if(id == 'Mpesa') {
		x.style.display = "block";
        
    }else{
		x.style.display = "none";
	}
}
 
</script>






@endsection