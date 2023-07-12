<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">

    <a href="{{route('pages.index')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="{{asset('/assets/img/logo/logo.png')}}"  alt="logo of ecomgladiators"  height="50px" />
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{route('pages.index')}}" class="nav-item nav-link  {{request()->routeIs('pages.index') ? 'active' : ''}}">Home</a>
            <a href="{{route('pages.about')}}" class="nav-item nav-link {{request()->routeIs('pages.about') ? 'active' : ''}}">About</a>
            <a href="{{route('pages.courses')}}" class="nav-item nav-link {{request()->routeIs('pages.courses') ? 'active' : ''}}">Courses</a>
            <a href="{{route('pages.services')}}" class="nav-item nav-link {{request()->routeIs('pages.services') ? 'active' : ''}}">Services</a>
            <a href="{{route('pages.enrollment')}}" class="nav-item nav-link {{request()->routeIs('pages.enrollment') ? 'active' : ''}}">Enrollment</a>
            <a href="{{route('pages.contact-us')}}" class="nav-item nav-link {{request()->routeIs('pages.contact-us') ? 'active' : ''}}">Contact Us</a>
        </div>
        <a href="{{route('pages.certificate')}}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Verify Certificate<i class="bi bi-arrow-right ms-3"></i></a>
    </div>
</nav>
