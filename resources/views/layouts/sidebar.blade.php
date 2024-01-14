<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        @if (request()->user()->hasRole('Customer'))
            <li class="sidebar-item {{ request()->is('dashboard') ? 'active' : '' }} ">
                <a href="{{ route('dashboard') }}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
        @endif

        @if (request()->user()->hasRole(['Super Admin', 'Admin']))
            <li class="sidebar-item  has-sub {{ request()->segment(1) == 'master' ? 'active open' : '' }}">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Master</span>
                </a>
                <ul class="submenu {{ request()->segment(1) == 'master' ? 'active' : '' }}">
                    <li class="submenu-item {{ request()->is('master/tema') ? 'active' : '' }}">
                        <a href="{{ route('tema.index') }}"><i class="bi bi-circle-fill me-2"
                                style="font-size: 7px;"></i>Tema</a>
                    </li>
                    <li class="submenu-item {{ request()->is('master/musik') ? 'active' : '' }}">
                        <a href="{{ route('musik.index') }}"><i class="bi bi-circle-fill me-2"
                                style="font-size: 7px;"></i>Musik</a>
                    </li>
                </ul>
            </li>
        @endif

        @if (request()->user()->hasRole(['Super Admin', 'Admin']))
            <li class="sidebar-item  has-sub {{ request()->segment(1) == 'administrator' ? 'active open' : '' }}">
                <a href="#" class='sidebar-link'>
                    <i class="fa-solid fa-gear"></i>
                    <span>Administrator</span>
                </a>
                <ul class="submenu {{ request()->segment(1) == 'administrator' ? 'active' : '' }}">
                    <li class="submenu-item {{ request()->is('administrator/order') ? 'active' : '' }}">
                        <a href="{{ route('order.index') }}"><i class="bi bi-circle-fill me-2"
                                style="font-size: 7px;"></i>Order</a>
                    </li>
                </ul>
            </li>
        @endif
        @if (request()->user()->hasRole('Customer'))
            <li class="sidebar-item {{ request()->segment(1) == 'undangan' ? 'active' : '' }}">
                <a href="{{ route('undangan.index') }}" class='sidebar-link'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-calendar-heart-fill" viewBox="0 0 16 16">
                        <path
                            d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5ZM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2ZM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z" />
                    </svg>
                    <span>Undangan</span>
                </a>
            </li>
        @endif
    </ul>
</div>
