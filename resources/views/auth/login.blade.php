@extends('layouts.app')

@section('content')

</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center"><h1></h1></div>
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <img alt="logo" src="{{asset('/app-assets/images/logo/sodabaz_website.png')}}" alt="sodabaz logo">
                    
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Login</span>
                  </h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="email" placeholder="Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                             </div>
                            <div class="col-6">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                            </div>

                            </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-12">
                                <button type="submit" class="btn btn-info btn-lg btn-block">
                                    {{ __('Login') }}
                                </button>

                                
                            </div>
                        </div>

                        <div style="margin-top: 12px; margin-right:12px;" class="form-group row mb-0 ">
                            <div class="col-md-12 offset-md-12 ">
                            <p class="float-sm-right text-center m-0">If u dont have account please ? <a href="{{route('register')}}" class="card-link">Sign Up</a></p>
                 
                            </div>
                        </div>
                        


                    

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection



