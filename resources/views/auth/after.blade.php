@extends('layouts.app')

@section('title')
<title>Login</title>
@endsection

@section('style')
@include('includes.style')
@endsection



@section('body')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            Your registration is successful and an account verification link send to your registered email . Please click that link to verify the account . Please note that once you verified the account only then you can login and able to use forget password option.
        </div>
    </div>
</div>
@endsection

@section('script')
@include('includes.script')
@endsection
