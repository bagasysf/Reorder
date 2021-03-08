<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Custom CSS   -->
    <link href="{{ asset('styles/css/reorder-xm.css') }}" rel="stylesheet">
    <link href="{{ asset('styles/css/reorder-sm.css') }}" rel="stylesheet">
    <link href="{{ asset('styles/css/reorder-md.css') }}" rel="stylesheet">
    <link href="{{ asset('styles/css/reorder-lg.css') }}" rel="stylesheet">


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>@yield('title', 'Reorder')</title>
</head>

<body>
    <div class="navbar">
        <div class="navbar-brand col-2 col-s-2">
            <img src="{{ asset('styles/img/ReOrder.png') }}" alt="">
        </div>
        <div class="navbar-header col-9 col-s-8"></div>
        <div class="navbar-icon col-2 col-s-2">
            <div class="notif-icon">
                <a href="">
                    <img src="{{ asset('styles/img/icon/48px/bell.svg') }}" alt="">
                </a>
            </div>
            <div class="user-icon">
                <a href="">
                    <img src="{{ asset('styles/img/icon/48px/user.svg') }}" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="sidebar col-2 col-s-2">
            <ul>
                <li class="sidebar-link">
                    <a href="">
                        <img src="{{ asset('styles/img/icon/48px/home.svg') }}" alt=""><span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-link">
                    <a href="/category">
                        <img src="{{ asset('styles/img/icon/48px/folder.svg') }}" alt=""><span>Category</span>
                    </a>
                </li>
                <li class="sidebar-link">
                    <a href="">
                        <img src="{{ asset('styles/img/icon/48px/file.svg') }}" alt=""><span>Product</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main-content col-11 col-s-10">
            @yield('content')
        </div>
    </div>
</body>

</html>