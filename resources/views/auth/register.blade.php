@extends('layouts.app')

@section('content')
<div class="hk-wrapper">
    <div class="hk-pg-wrapper hk-auth-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 pa-0">
                    <div class="auth-form-wrap pt-xl-0 pt-70">
                        <div class="auth-form w-xl-35 w-lg-55 w-sm-75 w-100">
                            <a class="font-24 font-weight-500 auth-brand text-center d-block mb-20" href="#">
								Metime
							</a>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <h1 class="display-5 mb-10 text-center">Sign up for free</h1>
                                <p class="mb-30 text-center">Create your account and start your journey</p>
                                <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" placeholder="First name" value="" name="first_name" type="text">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" placeholder="Last name" value="" name="last_name" type="text">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-danger btn-block">
                                    {{ __('Register') }}
                                </button>
                                <div class="option-sep"></div>
                                    <p class="text-center">Already have an account? <a href="{{ route('login') }}">Login</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- jQuery -->
 <script src="assets/vendors/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Slimscroll JavaScript -->
<script src="assets/scrooge/dist/js/jquery.slimscroll.js"></script>

<!-- Fancy Dropdown JS -->
<script src="assets/scrooge/dist/js/dropdown-bootstrap-extended.js"></script>

<!-- FeatherIcons JavaScript -->
<script src="assets/scrooge/dist/js/feather.min.js"></script>

<!-- Toggles JavaScript -->
<script src="assets/vendors/jquery-toggles/toggles.min.js"></script>
<script src="assets/scrooge/dist/js/toggle-data.js"></script>

<!-- Init JavaScript -->
<script src="assets/scrooge/dist/js/init.js"></script>

@endsection
