@extends('layouts.template2')

@section('title')
<title>
    Login
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

    <div class="form-style-10">

        <h1>Log In</h1>

        <form role="form" method="POST" action="{{ url('/login') }}" autocomplete="off">
            {{ csrf_field() }}



            <label>Enter Email<input type="email" name="email" id="email" class="form-control">
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </label>



            <label>Enter Password <input type="password" name="password" id="password" class="form-control">
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </label>


            <div class="button-section row">
                <div class="col-md-4">
                    <input type="submit" name="login_btn"
                        onclick="waitingDialog.show('Please Wait', {dialogSize: 'sm', progressType: 'warning'})"
                        value="Login" />
                </div>
                <div class="col-md-6">
                    <a href="{{ url('/password/reset') }}">Forgot your password?</a>
                </div>
            </div>
        </form><br>

    </div>

</div>






@endsection

@section('scripts')



@endsection