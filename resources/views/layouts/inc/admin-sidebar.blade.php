<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu"style="border: 1px solid #564D4A; background: #F7F4F3;">
            <div class="nav">
                <div class="sb-sidenav-menu-heading" style="background: #564D4A; color: #fff;">Core</div>
                <a class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}"
                    href="{{ url('admin/dashboard') }}" style="color: #564D4A;">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" style="color: #564D4A;"></i></div>
                    Dashboard
                </a>

                <div class="sb-sidenav-menu-heading mt-4" style="background: #564D4A; color: #fff;">Interface</div>
                <a class="nav-link {{ Request::is('admin/category') || Request::is('admin/add-category') || Request::is('admin/edit-category/*') ? 'active' : '' }} ? 'collapse active':'collapsed' }}"
                    href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false"
                    aria-controls="collapseLayouts" style="color: #564D4A;">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns" style="color: #564D4A;"></i></div>
                    Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color: #564D4A;"></i>
                    </div>
                </a>
                <div class="collapse {{ Request::is('admin/category') || Request::is('admin/add-category') || Request::is('admin/edit-category/*') ? 'active' : '' }} ? 'show':'' }}"
                    id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion"
                    style="color: #564D4A;">
                    <nav class="sb-sidenav-menu-nested nav" style="color: #564D4A;">
                        <a class="nav-link {{ Request::is('admin/add-category') ? 'active' : '' }}"
                            href=" {{ url('admin/add-category') }}" style="color: #564D4A;">Add Category</a>
                        <a class="nav-link {{ Request::is('admin/category') || Request::is('admin/edit-category/*') ? 'active' : '' }}"
                            href=" {{ url('admin/category') }} " style="color: #564D4A;">View Category</a>
                    </nav>
                </div>
                <a class="nav-link {{ Request::is('admin/posts') || Request::is('admin/add-post') || Request::is('admin/edit-post/*') ? 'active' : '' }} ? 'collapse active':'collapsed' }}"
                    href="#" data-bs-toggle="collapse" data-bs-target="#collapsePost" aria-expanded="false"
                    aria-controls="collapseLayouts" style="color: #564D4A;">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-pen-nib" style="color: #564D4A;"></i></div>
                    Posts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color: #564D4A;"></i>
                    </div>
                </a>
                <div class="collapse {{ Request::is('admin/posts') || Request::is('admin/add-post') || Request::is('admin/edit-post/*') ? 'active' : '' }} ? 'show':'' }}"
                    id="collapsePost" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion"
                    style="color: #564D4A;">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-post') ? 'active' : '' }}"
                            href=" {{ url('admin/add-post') }} " style="color: #564D4A;">Add Post</a>
                        <a class="nav-link {{ Request::is('admin/posts') || Request::is('admin/edit-post/*') ? 'active' : '' }}"
                            href=" {{ url('admin/posts') }} " style="color: #564D4A;">View Post</a>
                    </nav>
                </div>

                <a class="nav-link {{ Request::is('admin/users') ? 'active' : '' }}" href="{{ url('admin/users') }}"
                    style="color: #564D4A;">
                    <div class="sb-nav-link-icon"><i class="fas fa-users" style="color: #564D4A;"></i></div>
                    Users
                </a>

                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="login.html">Login</a>
                                <a class="nav-link" href="register.html">Register</a>
                                <a class="nav-link" href="password.html">Forgot Password</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseError" aria-expanded="false"
                            aria-controls="pagesCollapseError">
                            Error
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="401.html">401 Page</a>
                                <a class="nav-link" href="404.html">404 Page</a>
                                <a class="nav-link" href="500.html">500 Page</a>
                            </nav>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
        <div class="sb-sidenav-footer" style="background: #5B2300; color: #F7F4F3;">
            <div>Logged in as:</div>
            Admin
        </div>
    </nav>
</div>
