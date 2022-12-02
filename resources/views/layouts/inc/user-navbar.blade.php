<section class="logo-container">
    <a href="{{ url('home') }}" class="text-decoration-none">
        <h3 class="logo">theSillimanCon</h3>
    </a>
</section>

<section class="header custom-pad-user">
    <div class="left-content">
        <ul class="nav-links">
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a href="{{ url('home') }}">Home</a>
            </li>
            <li class="{{ Request::is('about') ? 'active' : '' }}">
                <a href="{{ url('about') }}">About</a>
            </li>
            <li class="{{ Request::is('contact') ? 'active' : '' }}">
                <a href="{{ url('contact') }}">Contact</a>
            </li>
            <li class="{{ Request::is('categories') ? 'active' : '' }}">
                <a href="{{ url('categories') }}">Categories <i class="fa-solid fa-angle-down"></i></a>

                <div class="dropdown_menu">
                    <ul>
                        <li><a href="#">Category 1</a></li>
                        <li><a href="#">Category 1</a></li>
                        <li><a href="#">Category 1</a></li>
                        <li><a href="#">Category 1</a></li>
                    </ul>
                </div>
            </li>
            <li class="{{ Request::is('faq') ? 'active' : '' }}">
                <a href="{{ url('faq') }}">FAQs</a>
            </li>
        </ul>
    </div>
    <div class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown" style="margin-top: 5px;">

            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <i class="fas fa-user fa-fw"></i>
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                @if (Auth::user()->role_as == 1)
                    <a class="dropdown-item" href="{{ url('admin/dashboard') }}">Dashboard</a>
                @endif

                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </div>
</section>

<!-- Sub-header Section  -->
<section class="sub-header">
    <div class="left-content">
        @php
            $categories = App\Models\Category::where('navbar_status', '0')
                ->where('status', '0')
                ->get();
        @endphp
        @foreach ($categories as $cateitem)
            <div class="content-col">
                <button>
                    <img src="{{ asset("$cateitem->image") }}" alt="">
                    <a href="{{ url('category/' . $cateitem->name) }}"> {{ $cateitem->name }}</a>
                </button>
            </div>
        @endforeach
    </div>
    <div class="right-content">
        {{-- <div class="breadcrumbs">
            <a href="home.html">Home</a>
        </div> --}}
    </div>
</section>
