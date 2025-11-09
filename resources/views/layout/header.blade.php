 <div class="row mx-5">
    <div class="col-12">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
        
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logo1.avif') }}" alt="Logo" height="75" width="220">
        </a>

        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto gap-5 fw-bold fs-4">
            <li class="nav-item text-dark">
            <a class="nav-link fw-bold text-center fs-4 {{ Route::is('homepage') ? 'active text-primary text-decoration-underline' : 'text-dark' }}" href="{{ route('homepage') }}">Home</a>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('category', 'Interactive Multimedia') }}">Interactive Multimedia</a></li>
                <li><a class="dropdown-item" href="{{ route('category', 'Sofware Engineering') }}">Sofware Engineering</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold text-center fs-4 {{ Route::is('writers') ? 'active text-primary text-decoration-underline' : 'text-dark' }}" href="{{ route('writers') }}">Writers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold text-center fs-4 {{ Route::is('about') ? 'active text-primary text-decoration-underline' : 'text-dark' }}" href="{{ route('about') }}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold text-center fs-4 {{ Route::is('popular') ? 'active text-primary text-decoration-underline' : 'text-dark' }}" href="{{ route('popular') }}">Popular</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    </div>
</div>