@extends('layouts.masterlogreg')

@section('title', 'Ez Travel - Login')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">

                    <div class="panel-heading"><strong>Login</strong></div>
                    <div class="panel-body">
                        @if($token && $recaptcha)
                            <div class="alert alert-success">
                                <strong>Confirmed!</strong> Anda 100% manusia yang hidup dan bukanlah sebuah robot.
                                Silahkan login dengan akun anda.
                            </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" required autofocus>
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <span class="help-block">
                                        <a href="{{ route('password.request') }}">
                                            Lupa kata sandi Anda?
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"
                                                   name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        Belum punya akun? Daftar Sekarang!
                                    </a>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-auto">
                                    <div style="height: 25px; border-bottom: 1px solid rgba(0,0,0,0.1); text-align: center">
                                        <span style="font-size: 28px; background-color: #FFFFFF; padding: 0 10px;">or</span>
                                    </div>
                                    <br>
                                    <div class="col-sm-3">
                                        <a href="{{ url('/auth/facebook') }}"
                                           class="btn btn-block btn-social btn-facebook">
                                            <span class="fa fa-facebook"></span> Facebook
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="{{ url('/auth/twitter') }}"
                                           class="btn btn-block btn-social btn-twitter">
                                            <span class="fa fa-twitter"></span> Twitter
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="{{ url('/auth/google') }}"
                                           class="btn btn-block btn-social btn-google">
                                            <span class="fa fa-google-plus"></span> Google+
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="{{ url('/auth/github') }}"
                                           class="btn btn-block btn-social btn-github">
                                            <span class="fa fa-github"></span> Github
                                        </a>
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
