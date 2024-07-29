@extends('back.auth.layout')
@section('auth')
    <div class="be-wrapper be-login">
        <div class="be-content">
            <div class="main-content container-fluid">
                <div class="splash-container">
                    <div class="card card-border-color card-border-color-danger">
                        <div class="card-header">
                            <a href="{{ url('/') }}"><img class="logo-img"
                                    src="{{ asset('back/assets/img/meravilogo.svg') }}" alt="logo"
                                    width="{conf.logoWidth}" height="27"></a>
                            {{-- <span class="splash-description">Please
                                enter
                                your user information.</span> --}}
                        </div>
                        <div class="card-body">
                            <form action="{{ route('auth') }}" method="POST">
                                @csrf
                                <div class="login-form">
                                    <div class="form-group">

                                        <input class="form-control @error('email') is-invalid @enderror" id="email"
                                            type="email" placeholder="email" name="email" autocomplete="off">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control @error('password') is-invalid @enderror" name="password"
                                            id="password" type="password" placeholder="Password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group row login-tools">
                                        <div class="col-6 login-remember">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="check1">
                                                <label class="custom-control-label" for="check1">Remember Me</label>
                                            </div>
                                        </div>
                                        {{-- <div class="col-6 login-forgot-password"><a href="pages-forgot-password.html">Forgot
                                                Password?</a></div> --}}
                                    </div>
                                    <div class="form-group row login-submit">
                                        <div class="col-6"><button class="btn btn-danger btn-xl" data-dismiss="modal"
                                                type="submit">Masuk</button></div>
                                        <div class="col-6"><a href="{{ route('register') }}"
                                                class="btn btn-secondary btn-xl" href="index.html"
                                                data-dismiss="modal">Daftar</a></div>
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
