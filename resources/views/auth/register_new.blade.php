@extends('layouts.app')

@section('content')
	<!-- HK Wrapper -->
	<div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-end align-items-center">
                <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-outline-secondary">Help</a>
                    <a href="#" class="btn btn-outline-secondary">About Us</a>
                </div>
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 pa-0">
                        <div class="auth-form-wrap pt-xl-0 pt-70">
                            <div class="auth-form w-xl-35 w-lg-55 w-sm-75 w-100">
                                <a class="font-24 font-weight-500 auth-brand text-center d-block mb-20" href="#">
									Metime
								</a>
                                <form method="POST" action="{{ route('register') }}" >
                                    @csrf
                                    <h1 class="display-5 mb-10 text-center">Sign up for free</h1>
                                    <p class="mb-30 text-center">Create your account and start your journey</p>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" name="first_name" id="first_name" placeholder="{{ __('First Name') }}" value="" type="text" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" name="last_name" id="last_name" placeholder="{{ __('Last name') }}" value="" type="text" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" value="{{ old('name') }}" type="text" autocomplete="name" autofocus required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" type="email"  value="{{ old('email') }}" required autocomplete="email" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" name="password @error('password') is-invalid @enderror" id="password" placeholder="Password" type="password" autocomplete="new-password" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Confirm Password" type="password" name="password_confirmation" id="password-confirm" autocomplete="new-password" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-danger btn-block" type="submit" >{{ __('Register') }}</button>
                                    <div class="option-sep"></div>
                                        <p class="text-center">Already have an account? <a href="{{ route('login') }}">Login</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>

    <!-- /HK Wrapper -->

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