@extends('back.auth.layout')
@section('auth')
    <div class="be-wrapper be-login be-signup">
        <div class="be-content">
            <div class="main-content container-fluid">
                <div class="splash-container">
                    <div class="card card-border-color card-border-color-danger">
                        <div class="card-header"><img class="logo-img" src="{{ asset('back/assets/img/meravilogo.svg') }}"
                                alt="logo" width="{conf.logoWidth}" height="27">
                            {{-- <span class="splash-description">Please
                                enter
                                your user information.</span> --}}
                        </div>
                        <div class="card-body">
                            {{-- <form action="index.html" method="get"><span class="splash-title pb-4">Sign Up</span> --}}
                            <form action="">
                                <div class="login-form">
                                    <div class="form-group">
                                        {{-- <label for="">Nama</label> --}}
                                        <input class="form-control" type="text" name="name" required=""
                                            placeholder="Nama" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        {{-- <label for="">Whatsapp</label> --}}
                                        <input class="form-control" type="text" name="wa" required=""
                                            placeholder="Whatsapp" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        {{-- <label for="">Instansi</label> --}}
                                        <input class="form-control" type="text" name="instasi" required=""
                                            placeholder="Instansi" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        {{-- <label for="">Jabatan</label> --}}
                                        <input class="form-control" type="text" name="jabatan" required=""
                                            placeholder="Jabatan" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        {{-- <label for="">E-mail</label> --}}
                                        <input class="form-control" type="email" name="email" required=""
                                            placeholder="E-mail" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        {{-- <label for="">Password</label> --}}
                                        <input class="form-control" id="password" type="password" placeholder="Password">
                                    </div>

                                    <div class="form-group row login-submit">
                                        <div class="col-6"><a class="btn btn-secondary btn-xl" data-dismiss="modal"
                                                type="submit">Daftar</a></div>
                                        <div class="col-6"><a class="btn btn-primary btn-xl" href="index.html"
                                                data-dismiss="modal">Masuk</a></div>
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
