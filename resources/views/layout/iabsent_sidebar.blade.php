@if (auth()->check() &&
        auth()->user()->hasAnyRole(['super admin', 'admin']))
    <li class="nav-heading">HOME IABSENT</li>

    <li class="nav-item">
        <a class="nav-link {{ request()->segment(2) == 'dashboard' ? '' : 'collapsed' }}"
            href="{{ route('iabsent.dashboard') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-heading">PAGE IABSENT</li>

    <li class="nav-item">
        <a class="nav-link {{ request()->segment(2) == 'user' ? '' : 'collapsed' }}" href="{{ route('iabsent.user') }}">
            <i class="bi bi-people"></i>
            <span>User</span>
        </a>
    </li><!-- End Users Nav -->
@endif

@if (auth()->check() && auth()->user()->hasRole('iabsent member'))
    <li class="nav-heading">HOME</li>

    <li class="nav-item">
        <a class="nav-link {{ request()->segment(2) == 'dashboard' ? '' : 'collapsed' }}"
            href="{{ route('iabsent.dashboard') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-heading">PAGE</li>

    <li class="nav-item">
        <a class="nav-link {{ request()->segment(2) == 'profile' || request()->segment(2) == 'portfolio' || request()->segment(2) == 'article' ? '' : 'collapsed' }}"
            data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Contents</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav"
            class="nav-content collapse {{ request()->segment(2) == 'profile' || request()->segment(2) == 'portfolio' || request()->segment(2) == 'article' ? 'show' : 'hide' }}"
            data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('iabsent.profile') }}"
                    class="{{ request()->segment(2) == 'profile' ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Profile</span>
                </a>
            </li>
        </ul>
    </li><!-- End Contents Nav -->

    <li class="nav-heading">HISTORY</li>

    <li class="nav-item">
        <a class="nav-link {{ request()->segment(2) == 'activity' ? '' : 'collapsed' }}"
            href="{{ route('iabsent.activity') }}">
            <i class="bi bi-person-lines-fill"></i>
            <span>Activity</span>
        </a>
    </li><!-- End Activity Nav -->
@endif
