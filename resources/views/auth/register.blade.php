@extends('Template.auth')


@section('content')
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ route('Home') }}" class="h1"><b>Code</b>Snip</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Register a new membership</p>

                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input name="name" type="text"
                               class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') }}"
                               placeholder="Full name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="email" type="email"
                               class="form-control  {{ $errors->has('email') ? 'is-invalid' : '' }}"
                               value="{{ old('email') }}" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password"
                               class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="password_confirmation" type="password"
                               class="form-control  {{ $errors->has('password') ? 'is-invalid' : '' }}"
                               placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">

                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
@endsection
