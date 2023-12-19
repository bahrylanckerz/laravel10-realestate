<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Real <span>Estate</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">web apps</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#propertyType" role="button" aria-expanded="false" aria-controls="propertyType">
                <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Property Type</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="propertyType">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.propertytype') }}" class="nav-link">All Type</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.propertytype.create') }}" class="nav-link">Add Type</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>