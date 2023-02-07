<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu {{ $segment }}</li>

        <li class="sidebar-item {{ $segment == '' ? 'active' : ''  }}">
            <a href={{ url("/") }} class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item has-sub {{ ($segment == ('customer' or 'mate')) ? 'active' : '' }}">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Nasabah</span>
            </a>
            <ul class="submenu {{ ($segment == ('customer' or 'mate')) ? 'active' : '' }}">
                <li class="submenu-item {{ $segment == 'customer' ? 'active' : ''  }}">
                    <a href={{ route('customer.index') }}>Data Diri Nasabah</a>
                </li>
                <li class="submenu-item {{ $segment == 'mate' ? 'active' : ''  }}">
                    <a href={{ route('mate.index') }}>Data Suami / Istri</a>
                </li>
                <li class="submenu-item {{ $segment == 'relatives' ? 'active' : ''  }}">
                    <a href={{ route('relatives.index') }}>Data Kontak Darurat</a>
                </li>
                <li class="submenu-item ">
                    <a href={{ route('application.index') }}>Data Pengajuan</a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-collection-fill"></i>
                <span>Extra Components</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="extra-component-avatar.html">Avatar</a>
                </li>
                <li class="submenu-item ">
                    <a href="extra-component-sweetalert.html">Sweet Alert</a>
                </li>
            </ul>
        </li>

        <li class="sidebar-item has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Layouts</span>
            </a>
            <ul class="submenu">
                <li class="submenu-item ">
                    <a href="layout-default.html">Default Layout</a>
                </li>
                <li class="submenu-item ">
                    <a href="layout-vertical-1-column.html">1 Column</a>
                </li>
            </ul>
        </li>

    </ul>
</div>