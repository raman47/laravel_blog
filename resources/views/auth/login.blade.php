@extends('layouts.app')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="/"><b>My</b>BLOG</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">


                        @if ($errors->has('email'))
                            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password">


                        @if ($errors->has('password'))
                            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    @endif
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
@endsection
