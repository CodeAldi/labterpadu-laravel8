<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ '#' }}" class="app-brand-link">
            {{-- <span class="app-brand-logo demo">
            </span> --}}
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Dashboard</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ (Route::currentRouteName() == 'admin.home') ? 'active' : '' }}">
            <a href="{{ route('admin.home') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Berita</span>
        </li>
        <li class="menu-item {{ (Route::currentRouteName() == 'admin.kategoriberita') ? 'active' : '' }}">
            <a href="{{ route('admin.kategoriberita') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-ol"></i>
                <div data-i18n="Analytics">Kategori Berita</div>
            </a>
        </li>
        <li class="menu-item {{ (Route::currentRouteName() == 'admin.berita') ? 'active' : '' }}">
            <a href="{{ route('admin.berita') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-library"></i>
                <div data-i18n="Analytics">Berita</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Galleries and files</span>
        </li>
        <li class="menu-item">
            <a href="{{ '#' }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-images"></i>
                <div data-i18n="Analytics">Gallery</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ '#' }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-folder"></i>
                <div data-i18n="Analytics">File</div>
            </a>
        </li>
    </ul>
</aside>