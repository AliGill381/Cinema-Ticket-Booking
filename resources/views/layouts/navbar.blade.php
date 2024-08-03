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
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">
                            Home
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="showtimes-tab" data-bs-toggle="tab" data-bs-target="#showtimes"
                            type="button" role="tab" aria-controls="showtimes" aria-selected="false">
                            Showtimes
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about"
                            type="button" role="tab" aria-controls="about" aria-selected="false">
                            About Us
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="{{ route('login') }}" class="nav-link" id="login-tab">Log in</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="{{ route('register') }}" class="nav-link" id="register-tab">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
