<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/app.css') }}">


</head>

<body>

    <nav class="navbar">
        <a class="header" href="{{url('/')}}">Amazing E-Grocery</a>
        <?php
        if (Auth::user()) {
        ?>
            <div class="buttons">
                <a href="{{url('logout')}}">Logout</a>
            </div>
        <?php
        } else {
        ?>
            <div class="buttons">
                <a href="{{url('register')}}">Register</a>
                <a href="{{url('login')}}">Login</a>
            </div>

        <?php
        }
        ?>

    </nav>
    <?php if (empty(Auth::user())) {
    } else { ?>
        <div class="section-2">
            <ul class="nav-list">
                <li><a href="{{url('home')}}">Home</a></li>
                <li><a href="{{url('cart')}}">Cart</a></li>
                <li><a href="#">Profile</a></li>
                <?php
                if (!empty(Auth::user()) && Auth::user()->role_id == 1) {
                ?>
                    <li><a href="#">Account Maintanence</a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    <?php } ?>

    @yield('content')

    <div class="footer">
        <p>&copy; Amazing E-Grocery 2023 by : 2440069281</p>
    </div>

</body>

</html>