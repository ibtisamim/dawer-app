<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="{{ __('voyager::generic.is_rtl') == 'true' ? 'rtl' : 'ltr' }}">
<head>
    <title>@yield('page_title', setting('admin.title') . " - " . setting('admin.description'))</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="assets-path" content="{{ route('voyager.voyager_assets') }}"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <!-- Favicon -->
    <?php $admin_favicon = Voyager::setting('admin.icon_image', ''); ?>
    @if($admin_favicon == '')
        <link rel="shortcut icon" href="{{ voyager_asset('images/logo-icon.png') }}" type="image/png">
    @else
        <link rel="shortcut icon" href="{{ Voyager::image($admin_favicon) }}" type="image/png">
    @endif

    <!-- App CSS -->
	<!--
    <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}"> -->
	<link href="{{url('/voyager/assets/css/app.css')}}"  rel="stylesheet" type="text/css" />
	
	<!-- Bootstrap Css -->
    <link href="{{url('/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{ URL('/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        
    @yield('css')
    @if(__('voyager::generic.is_rtl') == 'true')
		<!--
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css"> -->
        <link rel="stylesheet" href="{{ voyager_asset('css/rtl.css') }}">
		
    @endif
	<!--
	       <link href="{{ URL('/assets/css/app-dark.min.css')}}" id="app-dark" rel="stylesheet" type="text/css" />-->
		   
        <link href="{{ URL('/assets/css/app.min.css')}}" id="app-style"  rel="stylesheet" type="text/css" />


    @yield('head')
</head>

<!--
<body >
-->
   <body data-sidebar="dark" >
    <div id="preloader">
        <div id="status">
            <div class="spinner-chase">
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
            </div>
        </div>
    </div>
        <!-- Begin page -->
        <div id="layout-wrapper">



<?php
if (\Illuminate\Support\Str::startsWith(Auth::user()->avatar, 'http://') || \Illuminate\Support\Str::startsWith(Auth::user()->avatar, 'https://')) {
    $user_avatar = Auth::user()->avatar;
} else {
    $user_avatar = Voyager::image(Auth::user()->avatar);
}
?>

        @include('voyager::dashboard.navbar')
        @include('voyager::dashboard.sidebar')
       
        <!-- Main Content -->
		
		<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">@yield('page_header')</h4>

                                    <div class="page-title-right">
									 @section('breadcrumbs')
                                        <ol class="breadcrumb m-0">
									        @php
											$segments = array_filter(explode('/', str_replace(route('voyager.dashboard'), '', Request::url())));
											$url = route('voyager.dashboard');
											@endphp
											@if(count($segments) == 0)
												<li class="breadcrumb-item active"> {{ __('voyager::generic.dashboard') }}</li>
											@else
												<li class="breadcrumb-item active">
													<a href="{{ route('voyager.dashboard')}}"> {{ __('voyager::generic.dashboard') }}</a>
												</li>
												@foreach ($segments as $segment)
													@php
													$url .= '/'.$segment;
													@endphp
													@if ($loop->last)
														<li>{{ ucfirst(urldecode($segment)) }}</li>
													@else
														<li>
															<a href="{{ $url }}">{{ ucfirst(urldecode($segment)) }}</a>
														</li>
													@endif
												@endforeach
											@endif
										</ol>
			
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
						
					
						@yield('content')
						
                    </div>
				</div>
			

@include('vendor.voyager.partials.app-footer')

            </div>
            <!-- end main content-->

        </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('vendor.voyager.layouts.right-sidebar')
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

<!-- Javascript Libs -->


        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="{{url('/assets/css/bootstrap-dark.min.css')}}" data-appStyle="{{url('/assets/css/app-dark.min.css')}}" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="{{url('/assets/css/app-rtl.min.css')}}" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->


        <!-- JAVASCRIPT -->
        <script src="{{url('/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{url('/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{url('/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{url('/assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- apexcharts -->
		<!--
        <script src="{{url('/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
        -->
        <!-- Saas dashboard init -->
		
        <script src="{{url('/assets/js/pages/saas-dashboard.init.js')}}"></script>


        <script src="{{url('/assets/js/app.js')}}"></script>



<script type="text/javascript" src="{{ voyager_asset('js/app.js') }}"></script>

<script>
    @if(Session::has('alerts'))
        let alerts = {!! json_encode(Session::get('alerts')) !!};
        helpers.displayAlerts(alerts, toastr);
    @endif

    @if(Session::has('message'))

    // TODO: change Controllers to use AlertsMessages trait... then remove this
    var alertType = {!! json_encode(Session::get('alert-type', 'info')) !!};
    var alertMessage = {!! json_encode(Session::get('message')) !!};
    var alerter = toastr[alertType];

    if (alerter) {
        alerter(alertMessage);
    } else {
        toastr.error("toastr alert-type " + alertType + " is unknown");
    }
    @endif
</script>
@include('voyager::media.manager')


</body>
</html>
