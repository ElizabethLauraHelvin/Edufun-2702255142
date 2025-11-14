 <div class="row mx-5 fixed-top bg-white">
    <div class="col-12">
            <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <img src="{{ asset('img/logo1.png') }}" alt="" width="200">
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto gap-5 fs-4 fw-bold text-center">
                    <li class="nav-item">
                    <a class="nav-link {{ Route::is('homepage') ? 'active text-primary text-decoration-underline' : 'text-dark' }}" aria-current="page" href="{{ route('homepage') }}">Homepage</a>
                    </li>

                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Route::is('category') ? 'active text-primary text-decoration-underline' : 'text-dark' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('category','Software Engineering') }}">Software Engineering</a></li>
                        <li><a class="dropdown-item" href="{{ route('category', 'Interactive Multimedia') }}">Interactive Multimedia</a></li>
                    </ul>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link {{ Route::is('writer') ? 'active text-primary text-decoration-underline' : 'text-dark' }}" href="{{ route('writer') }}">Writers</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link {{ Route::is('about') ? 'active text-primary text-decoration-underline' : 'text-dark' }}" href="{{ route('about') }}">About Us</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link {{ Route::is('popular') ? 'active text-primary text-decoration-underline' : 'text-dark' }}" href="{{ route('popular') }}">Popular</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
        </div>
    </div>
</div>