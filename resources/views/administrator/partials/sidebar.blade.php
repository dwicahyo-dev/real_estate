<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('admin') }}">Real Estate</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('admin') }}">RE</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Helpers::setSelectedSegmentTwo('') }}">
                <a href="{{ url('admin') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Data</li>
            <li class="{{ Helpers::setSelectedSegmentTwo('property_type') }}">
                <a class="nav-link" href="{{ route('property_type.index') }}"><i class="far fa-square">
                    </i> <span>Property Types</span>
                </a>
            </li>

            <li class="{{ Helpers::setSelectedSegmentTwo('property') }}">
                <a class="nav-link" href="{{ route('property.index') }}"><i class="far fa-square">
                    </i> <span>Properties</span>
                </a>
            </li>
        </ul>
    </aside>
</div>