@extends('back.auth.layout')
@section('auth')
    <div class="be-wrapper be-login">
        <div class="be-content">
            <div class="main-content container-fluid">
                <div class="splash-container">
                    <div class="card card-border-color card-border-color-primary">
                        <div class="card-header"><img class="logo-img" src="{{ asset('back/assets/img/meravilogo.svg') }}"
                                alt="logo" width="{conf.logoWidth}" height="27"><span class="splash-description">Please
                                enter
                                your user information.</span></div>
                        <div class="card-body">
                            <form>
                                <div class="login-form">
                                    <div class="form-group">
                                        {{-- <label for="">Email</label> --}}
                                        <input class="form-control" id="email" type="email" placeholder="email"
                                            name="email" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        {{-- <label for="password">Password</label> --}}
                                        <input class="form-control" id="password" type="password" placeholder="Password">
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
                                        <div class="col-6"><a class="btn btn-secondary btn-xl" data-dismiss="modal"
                                                type="submit">Masuk</a></div>
                                        <div class="col-6"><a class="btn btn-primary btn-xl" href="index.html"
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
