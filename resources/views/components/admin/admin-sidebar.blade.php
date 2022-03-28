<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">GudangKu</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        {{-- <a class="nav-link" href="{{route('admin.index')}}"> --}}
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
        Keluar / Masuk
    </div> --}}

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- Barang --}}
    <x-admin.admin-sidebar-barang-links></x-admin.admin-sidebar-barang-links>
    {{--mahasiswa        --}}
    {{-- <x-admin-sidebar-mahasiswas-links></x-admin-sidebar-mahasiswas-links> --}}
    {{--akun--}}
    {{-- <x-admin-sidebar-akuns-links></x-admin-sidebar-akuns-links> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Perkuliahan
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <x-admin-sidebar-forumdekans-links></x-admin-sidebar-forumdekans-links> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
