<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    {{--<!-- Bootstrap 3.3.7 -->--}}
    <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/skin-blue.min.css') }}">

    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('dashboard/css/font-awesome-rtl.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard/css/AdminLTE-rtl.min.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap-rtl.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard/css/rtl.css') }}">

        <style>
            body, h1, h2, h3, h4, h5, h6 {
                font-family: 'Cairo', sans-serif !important;
            }
        </style>
    @else
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="stylesheet" href="{{ asset('dashboard/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard/css/AdminLTE.min.css') }}">
    @endif

    <style>
        .mr-2{
            margin-right: 5px;
        }

    </style>
    @stack('styles')
    {{--<!-- jQuery 3 -->--}}
    <script src="{{ asset('dashboard/js/jquery.min.js') }}"></script>

    {{--noty--}}
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/noty/noty.css') }}">
    <script src="{{ asset('dashboard/plugins/noty/noty.min.js') }}"></script>

    {{--<!-- iCheck -->--}}
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/icheck/all.css') }}">

    {{--html in  ie--}}
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

    <header class="main-header">

        {{--<!-- Logo -->--}}
        <a href="{{ route('dashboard.index') }}" class="logo">
            {{--<!-- mini logo for sidebar mini 50x50 pixels -->--}}
            <span class="logo-mini"><b></b>@lang('site.kbsh')</span>
            <span class="logo-lg"><b></b></span>@lang('site.khabsh')
        </a>

        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- Messages: style can be found in dropdown.less-->
                    {{-- <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{{ asset('dashboard/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small>
                                                    <i class="fa fa-clock-o"></i> 5 mins
                                                </small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">See All Messages</a>
                            </li>
                        </ul>
                    </li> --}}

                    {{-- Notifications: style can be found in dropdown.less
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                {{-- inner menu: contains the actual data --}}
                                {{-- <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all</a>
                            </li>
                        </ul>
                    </li> --}}

                    {{--<!-- Tasks: style can be found in dropdown.less -->--}}
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-flag-o"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                {{--<!-- inner menu: contains the actual data -->--}}
                                <ul class="menu">

                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li>
                                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>
                        </ul>
                    </li>

                    {{--<!-- User Account: style can be found in dropdown.less -->--}}
                    <li class="dropdown user user-menu">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ auth()->user()->image_path }}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{ auth()->user()->first_name .' '. auth()->user()->last_name }}</span>
                        </a>
                        <ul class="dropdown-menu">

                            {{--<!-- User image -->--}}
                            <li class="user-header">
                                <img src="{{ auth()->user()->image_path }}" class="img-circle" alt="User Image">

                                <p>
                                    {{ auth()->user()->first_name .' '. auth()->user()->last_name }}
                                    <small>Member since 2 days</small>
                                </p>
                            </li>

                            {{--<!-- Menu Footer-->--}}
                           <li class="user-footer">
                                <a href="{{ route('dashboard.profiles.edit') }}" class="btn btn-default btn-flat" >@lang('site.update_profile')</a>
                            </li>
                            <li class="user-footer">
                                <a href="{{ route('dashboard.profiles.change_password') }}" class="btn btn-default btn-flat" >@lang('site.change_password')</a>
                            </li>
                            <li class="user-footer">


                                <a href="{{ route('dashboard.logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">@lang('site.logout')</a>

                                <form id="logout-form" action="{{ route('dashboard.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

    </header>

    @include('layouts.dashboard._aside')
    
    @yield('content')

    @include('partials._session')

    {{-- <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016
            <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer> --}}

</div><!-- end of wrapper -->

{{--<!-- Bootstrap 3.3.7 -->--}}
<script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>

{{--icheck--}}
<script src="{{ asset('dashboard/plugins/icheck/icheck.min.js') }}"></script>

{{--ckeditor--}}
<script src="{{ asset('dashboard/plugins/ckeditor/ckeditor.js') }}"></script>

<script src="{{ asset('dashboard/plugins/jquery-number/jquery.number.min.js') }}"></script>


<script src="{{ asset('dashboard/js/custom/image_preview.js') }}"></script>
<script src="{{ asset('dashboard/js/custom/order.js') }}"></script>

{{-- <script src="{{ asset('dashboard/js/custom/add_field.js') }}"></script> --}}
{{--<!-- FastClick -->--}}
<script src="{{ asset('dashboard/js/fastclick.js') }}"></script>

{{--<!-- AdminLTE App -->--}}
<script src="{{ asset('dashboard/js/adminlte.min.js') }}"></script>


<script>
    $(document).ready(function () {
        $('.sidebar-menu').tree();

        //icheck
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });

        $('.delete').click(function (e) {

            var that = $(this)

            e.preventDefault();

            var n = new Noty({
                text: "@lang('site.confirm_delete')",
                type: "warning",
                killer: true,
                buttons: [
                    Noty.button("@lang('site.yes')", 'btn btn-success mr-2', function () {
                        that.closest('form').submit();
                    }),

                    Noty.button("@lang('site.no')", 'btn btn-primary mr-2', function () {
                        n.close();
                    })
                ]
            });

            n.show();

        });//end of delete

        //image preview

        $(".image").change(function() {
            if (this.files && this.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.image-preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]); // convert to base64 string
            }
        });
        
        $(".image-ar").change(function () {

            if (this.files && this.files[0]) {
                var reader = new FileReader();
        
                reader.onload = function (e) {
                    $('.image-preview-ar').attr('src', e.target.result);
                }
        
                reader.readAsDataURL(this.files[0]);
            }
        
        });
        
        $(".image-en").change(function () {
        
            if (this.files && this.files[0]) {
                var reader = new FileReader();
        
                reader.onload = function (e) {
                    $('.image-preview-en').attr('src', e.target.result);
                }
        
                reader.readAsDataURL(this.files[0]);
            }
        
        });


    })


</script>
@stack('scripts')

</body>
</html>
