<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/styles/style.css') }}" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="icon" href="{{asset('assets/images/Asset 3.svg')}}">
    
</head>

<body>
    <div id="wrapper">
        <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#"> <img src="{{ asset('assets/images/logo.svg') }}"
                        alt="logo"style="filter: invert(1);"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">
                    @auth('admin')
                        <ul class="navbar-nav side-nav">
                            <li class="nav-item">
                                <a class="nav-link text-white" style="margin-left: 20px;"
                                    href="{{ route('admins.dashboard') }}">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('view.admins') }}" style="margin-left: 20px;">Admins</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('view.users') }}" style="margin-left: 20px;">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('view.cetegories') }}"
                                    style="margin-left: 20px;">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('view.tasks') }}"
                                    style="margin-left: 20px;">Tasks</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('view.applications')}}"
                                    style="margin-left: 20px;">Applications</a>
                            </li>
                        </ul>
                    @endauth
                    <ul class="navbar-nav ml-md-auto d-md-flex">
                        @auth('admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admins.dashboard') }}">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::guard('admin')->user()->email }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href=""
                                        onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('view.login') }}">login
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <main class="py-4">
                @yield('content')
            </main>

        </div>
    </div>
    </div>
    <script type="text/javascript"></script>
</body>

</html>
