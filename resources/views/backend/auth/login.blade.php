@extends('backend.auth.auth_master')

@section('title')
My Portfolio
@endsection

@section('login-content')

<div class="login-box">
        <div class="login-logo">
            <a href="{{route('login')}}"><b>My</b>PORTFOLIO</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{route('admin.login.submit')}}" method="post">
                    @csrf
                    <!-- @include('backend.layouts.partials.messages') -->
                    <div class="input-group mb-3">
                        <input type="username" name="username" value="{{ old('username') }}" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                      <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                      <div class="social-auth-links text-center mb-3">
                            <button  type="submit" class="btn btn-block btn-primary">
                                <i class="fa fa-sign-in mb-2" aria-hidden="true"></i> Sign in
                            </button>
                      </div>
                  
                </form>

                <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="{{route('login.facebook')}}" class="btn btn-block btn-primary">
                      <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
@endsection