@extends('frontend.layouts.app')

@section('content')
    @if (session('status'))

        {{ session('status') }}
    @endif
<!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Authentication</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">Authentication</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="box-authentication">
                        <form method="post" action="{{ url('frontend/user_register') }}">
                        <h3>Create an account</h3>
                        <p>Please enter your information to create an account.</p>

                        @csrf
                        <label for="emmail_register">Username</label>
                        <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror


                        <input type="hidden" value="3" name="role" />

                        <label for="emmail_register">Email address</label>
                        <input id="email" type="text" name="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                        
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror


                        <label for="password_login">Password</label>
                        <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror">

                        <label for="password_login">Phone Number</label>
                        <input id="phone_number" name="phone_number" type="number" class="form-control">
                        @error('phone_number')
                      <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                     </span>
                    @enderror

                        <button type="submit" class="button"><i class="fa fa-user"></i> Create an account</button>
                    </form>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="box-authentication">
                        <h3>Already registered?</h3>
                        <label for="emmail_login">Email address</label>
                        <input id="emmail_login" type="text" class="form-control">
                        <label for="password_login">Password</label>
                        <input id="password_login" type="password" class="form-control">
                        <p class="forgot-pass"><a href="#">Forgot your password?</a></p>
                        <button class="button"><i class="fa fa-lock"></i> Sign in</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./page wapper-->

@endsection