@extends('back.auth.layout')
@section('auth')
    <div class="be-wrapper be-login be-signup">
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
                            {{-- <form action="index.html" method="get"><span class="splash-title pb-4">Sign Up</span> --}}
                            <form action="{{ route('auth_register') }}" method="POST">
                                @csrf
                                <div class="login-form">
                                    <div class="form-group">

                                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                                            name="name" required="" placeholder="Nama" autocomplete="off">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">

                                        <input class="form-control @error('whatsapp') is-invalid @enderror" type="text"
                                            name="whatsapp" required="" placeholder="Whatsapp" autocomplete="off">
                                        @if ($errors->has('whatsapp'))
                                            <span class="text-danger">{{ $errors->first('whatsapp') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">

                                        <input class="form-control @error('institution') is-invalid @enderror"
                                            type="text" name="institution" required="" placeholder="Instansi"
                                            autocomplete="off">
                                        @if ($errors->has('institution'))
                                            <span class="text-danger">{{ $errors->first('institution') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">

                                        <input class="form-control @error('position') is-invalid @enderror" type="text"
                                            name="position" required="" placeholder="Jabatan" autocomplete="off">
                                        @if ($errors->has('position'))
                                            <span class="text-danger">{{ $errors->first('position') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">

                                        <input class="form-control @error('email') is-invalid @enderror" type="email"
                                            name="email" required="" placeholder="E-mail" autocomplete="off">
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

                                    <div class="form-group row login-submit">
                                        <div class="col-6"><button class="btn btn-danger btn-xl" data-dismiss="modal"
                                                type="submit">Daftar</button></div>
                                        <div class="col-6"><a href="{{ route('login') }}" class="btn btn-secondary btn-xl"
                                                href="index.html" data-dismiss="modal">Masuk</a></div>
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
