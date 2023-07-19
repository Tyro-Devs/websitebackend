
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="/" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/" class="nav-item nav-link @if( route('home')) @php echo('active') @endphp @endif"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ route('top-sections.index') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Top Section</a>
            <a href="{{ route('tool.index') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Tool</a>
            <a href="{{ route('about-us.index') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>About Us</a>
            <a href="{{ route('why-us.index') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Why Us</a>
            <a href="{{ route('why-us-accordions.index') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Why Us Accordion</a>
            <a href="{{ route('services.index') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Services</a>
            <a href="{{ route('type.index') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Type</a>
            <a href="{{ route('service-detali.index') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Service Detail</a>
            <a href="{{ route('portfolio.index') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Portfolio</a>
            <a href="{{ route('contact.index') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Contact</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div>
        </div>
    </nav>
</div>
