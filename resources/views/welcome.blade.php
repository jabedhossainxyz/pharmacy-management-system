<!DOCTYPE html>
<html lang="en">

<head>
<!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Navbar brand/logo -->
            <a class="navbar-brand" href="#">Pharmacy Management System</a>

            <!-- Navbar toggle button for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link btn btn-primary">Home</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link btn btn-outline-primary">Log in</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link btn btn-outline-success">Register</a>
                    </li>
                    @endif
                    @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-9Lk9XTFz+6FIQaPAf0BcJS0p1Of5n/x7+xyHL3eN3RlPp9A51EjLZMDjU6OPa9+s" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> -->
</body>

</html>