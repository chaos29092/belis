<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Belis | Admin</title>

    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/plugins/iCheck/custom.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">

    @yield('add_css')

</head>

<body>

<div id="wrapper">
    {{--侧边导航栏--}}
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{asset('backend/img/profile_small.jpg')}}"/>
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="table_basic.html#">
                            <span class="clear"> <span class="block m-t-xs"> <strong
                                            class="font-bold">Chaos</strong>
                             </span> <span class="text-muted text-xs block">Web Admin <b
                                            class="caret"></b></span> </span> </a>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="/admin/products"><i class="fa fa-edit"></i> <span class="nav-label">Products</span></a>
                </li>
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i
                                class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control"
                                   name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Welcome to Belis Admin Theme.</span>
                    </li>
                    <li>
                        <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>

            </nav>
        </div>

        @yield('header')

        @yield('content')

        <div class="footer">
            <div>
                <strong>Copyright</strong> belis &copy; 2014-2018
            </div>
        </div>

    </div>
</div>


<!-- Mainly scripts -->
<script src="{{asset('backend/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('backend/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Peity -->
<script src="{{asset('backend/js/plugins/peity/jquery.peity.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('backend/js/inspinia.js')}}"></script>
<script src="{{asset('backend/js/plugins/pace/pace.min.js')}}"></script>

<!-- iCheck -->
<script src="{{asset('backend/js/plugins/iCheck/icheck.min.js')}}"></script>

<!-- Peity -->
<script src="{{asset('backend/js/demo/peity-demo.js')}}"></script>

<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>

@yield('add_js')

</body>

</html>