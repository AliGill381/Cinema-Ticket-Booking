<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Welcome')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<style>
    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 900;
    }

    header {
        background: linear-gradient(180deg, #000000 14.19%, rgba(5, 4, 4, 0.815) 115.41%);
        transition: all .3s linear;
        padding: 0.5rem 1rem;
    }

    .navbar-nav .nav-link {
        color: white;
        position: relative;
        padding-bottom: 8px;
        transition: color 0.3s;
    }

    .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background: linear-gradient(to right, rgb(107, 12, 12), black);
        transition: width 0.3s;
    }

    .navbar-nav .nav-link:hover::after,
    .navbar-nav .nav-link.active::after {
        width: 100%;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
        color: black;
    }

    @media (min-width: 992px) {
        .navbar-expand-lg .navbar-collapse {
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
        }

        .navbar-collapse {
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            -ms-flex-positive: 1;
            flex-grow: 1;
            justify-content: flex-end;
            /* Use this to align items to the end */
        }

        .body_style {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            font-size: 14px;
            line-height: 24px;
            background-color: var(--secondary);
            overflow-x: hidden;
            position: relative;
            top: 200px;
            width: 100%
        }

        .text_data:hover {
            border: solid black 1px
        }
        .modern-input {
            border-radius: 12px;
            border: 1px solid #ced4da;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s, border-color 0.3s;
        }

        .modern-input:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
            outline: none;
        }

        .invalid-feedback {
            font-size: 0.875em;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            border-radius: 20px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-link {
            text-decoration: none;
            color: #007bff;
        }

        .btn-link:hover {
            text-decoration: underline;
        }

    }
</style>

<body>
    <header id="header" class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark px-md-4 py-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://dhalahorecinema.com">
                    <img class="img-fluid" width="80" src="cinemalogo.png" alt="DHA Cinema Lahore">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <div class="navbar-nav  ml-auto mt-3 mt-lg-0">
                        <a class="nav-link text-lg-start ">Home</a>
                        <a href="{{ route('login') }}" class="nav-link ">Log in</a>
                        <a href="{{ route('register') }}" class="nav-link ">Register</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class=" body_style text-center">
        @yield('content')
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var navLinks = document.querySelectorAll('.nav-link');

            navLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    navLinks.forEach(function(link) {
                        link.classList.remove('active');
                    });
                    this.classList.add('active');
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
