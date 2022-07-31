<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="{{ __('voyager::generic.is_rtl') == 'true' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="none" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="admin login">
    <title>Admin - {{ Voyager::setting("admin.title") }}</title>
   
	
	        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('/assets/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <!-- Icons Css -->
        <!-- App Css-->	
		 <link href="{{ URL('/assets/css/bootstrap.min.css')}}" id="bootstrap-dark" rel="stylesheet" type="text/css" />
		 <link href="{{ URL('/assets/css/icons.min.css')}}" id="bootstrap-dark" rel="stylesheet" type="text/css" />
		 <link href="{{ URL('/assets/css/app.min.css')}}" id="bootstrap-dark" rel="stylesheet" type="text/css" />
		 
    @if (__('voyager::generic.is_rtl') == 'true')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
        <link rel="stylesheet" href="{{ voyager_asset('css/rtl.css') }}">
    @endif


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	
	
</head>
<body class="login">
        <div class="home-btn d-none d-sm-block">
            <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">{{ Voyager::setting('admin.description', __('voyager::login.welcome')) }} !</h5>
                                            <p>Sign in to continue to {{ Voyager::setting('admin.title', 'Voyager') }}.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{ URL::asset('assets/images/profile-img.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    <a href="index.html">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
											<?php $admin_logo_img = Voyager::setting('admin.icon_image', ''); ?>
											@if($admin_logo_img == '')
											<img class="rounded-circle" height="34" src="{{ voyager_asset('images/logo-icon-light.png') }}" alt="Logo Icon">
											@else
											<img class="rounded-circle" height="34" src="{{ Voyager::image($admin_logo_img) }}" alt="Logo Icon">
											@endif
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                 
									<form action="{{ route('voyager.login') }}" method="POST" class="form-horizontal">
									  {{ csrf_field() }}
        
                                        <div class="form-group" id="emailGroup">
                                            <label for="email">{{ __('voyager::generic.email') }}</label>										
											<input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="{{ __('voyager::generic.email') }}" class="form-control" required>
                                        </div>
                
                                    	
									<div class="form-group" id="passwordGroup">
										<label for="userpassword">{{ __('voyager::generic.password') }}</label>
										<div class="controls">
											<input type="password" name="password" placeholder="{{ __('voyager::generic.password') }}" class="form-control" id="userpassword" required>
										</div>
									</div>
                
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="remember" id="customControlInline" value="1">
                                            <label class="custom-control-label" for="customControlInline">{{ __('voyager::generic.remember_me') }}</label>
						
                                        </div>
                                        
                                        <div class="mt-3">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">
											 <span class="signingin hidden"><span class="voyager-refresh"></span> {{ __('voyager::login.loggingin') }}...</span>
											{{ __('voyager::generic.login') }}
											</button>
                                        </div>
            
			<!--
                                        <div class="mt-4 text-center">
                                            <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                        </div>
										
										-->
                                    </form>
									
									 <div style="clear:both"></div>

              @if(!$errors->isEmpty())
              <div class="alert alert-red">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                    @endforeach
                </ul>
              </div>
              @endif
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
						<!--
                            <p>Don't have an account ? <a href="auth-register.html" class="font-weight-medium text-primary"> Signup now </a> </p> -->
                            <p>© 2020 Developed <i class="mdi mdi-heart text-danger"></i> by FirstClass</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{url('/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{url('/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{url('/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{url('/assets/libs/node-waves/waves.min.js')}}"></script>
        
        <!-- App js -->
        <script src="{{url('/assets/js/app.js')}}"></script>
		
<script>
    var btn = document.querySelector('button[type="submit"]');
    var form = document.forms[0];
    var email = document.querySelector('[name="email"]');
    var password = document.querySelector('[name="password"]');
    btn.addEventListener('click', function(ev){
        if (form.checkValidity()) {
            btn.querySelector('.signingin').className = 'signingin';
            btn.querySelector('.signin').className = 'signin hidden';
        } else {
            ev.preventDefault();
        }
    });
    email.focus();
    document.getElementById('emailGroup').classList.add("focused");

    // Focus events for email and password fields
    email.addEventListener('focusin', function(e){
        document.getElementById('emailGroup').classList.add("focused");
    });
    email.addEventListener('focusout', function(e){
       document.getElementById('emailGroup').classList.remove("focused");
    });

    password.addEventListener('focusin', function(e){
        document.getElementById('passwordGroup').classList.add("focused");
    });
    password.addEventListener('focusout', function(e){
       document.getElementById('passwordGroup').classList.remove("focused");
    });

</script>
    </body>
</html>
