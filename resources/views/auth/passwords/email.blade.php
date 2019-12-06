@extends('layouts.template2')

@section('title')
	<title>
		Reset Password
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
        <div class="form-style-12">
		<div style="padding-top: 50px;padding-bottom: 180px" class="col-lg-10 col-lg-push-1"  style="background:#fff">
		<div class="form-wrap">
                           <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label style="color:#000"  for="email" class="col-md-4 control-label">Valid E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-envelope"></i> Send Password Reset Link
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
           

        
		
    
	
	
@endsection

@section('scripts')



@endsection
