<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="/" class="logo d-flex align-items-center">
        <img src="{{asset("assets/img/bgg_logo.jpg")}}" alt="" style="width: 100px; max-height:100px">
        <h1 class="sitename" style="font-size: 20px;">BGG ENTERTAINMENT</h1>
    </a>
    <nav id="navmenu" class="navmenu">
        <ul>
            <li>
                <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
            </li>
            <li>
                <a href="{{ route('about_page') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a>
            </li>
            <li>
                <a href="{{ route('services_page') }}" class="{{ request()->is('services') ? 'active' : '' }}">Services</a>
            </li>
            <li>
                <a href="{{ route('contact_page') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
            </li>
            <li>
                <a href="#">Blog</a>
            </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

</div>