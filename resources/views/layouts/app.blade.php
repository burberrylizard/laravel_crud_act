<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
    <style>
        .navbar {
            background-color: #C599B6;
            padding: 1px;
        }
        .navbar-brand {
            font-size: 1rem;
            font-weight: bold;
            color: #FFF7F3 !important; 
        }
        .nav-link {
            color: white !important;
            font-size: 1rem;
            margin-right: 1px;
            transition: color 0.3s ease-in-out;
        }
        .nav-link:hover {
            color: #FAD0C4 !important; 
        }
        .btn-logout {
            color: black;
            border: none;
            background: none;
            font-size: 1rem;
            cursor: pointer;
            transition: color 0.3s ease-in-out;
        }
        .btn-logout:hover {
            color: #FAD0C4;
        }

        .container {
            margin-top: 1px;
        }


        .footer {
            background-color: #41644A;
            color: white;
            text-align: center;
            padding: 15px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Contact</a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
