<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <span class="brand-text font-weight-light">Foisal Khan</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ !empty(Auth::user()->image) ? url('public/upload/user_images/' . Auth::user()->image) : url('public/upload/no-image.png') }}"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item {{ request()->is('users/view', 'profile/view') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-tasks"></i>
                        <p>
                            Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('users.view') }}"
                                class="nav-link {{ request()->is('users/view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profile.view') }}"
                                class="nav-link {{ request()->is('profile/view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile View</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{-- logo mangage --}}
                <li class="nav-item {{ request()->is('logos/view') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-blog"></i>
                        <p>
                            Website Logo
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('logos.view') }}"
                                class="nav-link {{ request()->is('logos/view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Logo</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ route('sliders.view') }}"
                                class="nav-link {{ request()->is('sliders/view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Banner</p>
                            </a>
                        </li> --}}
                    </ul>
                </li>
                {{-- portfolio management --}}
                <li class="nav-item {{ request()->is('portfolies/view', 'categories/view') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-wallet"></i>
                        <p>
                            Portfolio
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('categories.view') }}"
                                class="nav-link {{ request()->is('categories/view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('portfolies.view') }}"
                                class="nav-link {{ request()->is('portfolies/view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Portfolio</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{-- project mangage --}}
                <li class="nav-item {{ request()->is('projects/view', 'projectds/view') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-project-diagram"></i>
                        <p>
                            Project
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('projects.view') }}"
                                class="nav-link {{ request()->is('projects/view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('projectds.view') }}"
                                class="nav-link {{ request()->is('projectds/view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Details Add</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{-- videos manage --}}
                <li class="nav-item {{ request()->is('videos/view') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-video"></i>
                        <p>
                            Video
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('videos.view') }}"
                                class="nav-link {{ request()->is('videos/view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Video</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{-- about mangage --}}
                <li class="nav-item {{ request()->is('abouts/view') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-address-card"></i>
                        <p>
                            About
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('abouts.view') }}"
                                class="nav-link {{ request()->is('abouts/view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About</p>
                            </a>
                        </li>

                    </ul>
                </li>

                {{-- clinent mangage --}}
                <li class="nav-item {{ request()->is('contacts/communicate') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-sitemap"></i>
                        <p>
                            Client Contact
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('contacts.communicate') }}"
                                class="nav-link {{ request()->is('contacts/communicate') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact Communication</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{-- contact Information --}}
                <li class="nav-item {{ request()->is('contacts/view') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-cog"></i>
                        <p>
                            Contact Information
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('contacts.view') }}"
                                class="nav-link {{ request()->is('contacts/view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Contact</p>
                            </a>
                        </li>

                    </ul>
                </li>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>