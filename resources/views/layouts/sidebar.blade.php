<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? '' : 'collapsed' }}" href="{{ url('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-heading">Master Data</li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('departemen') ? '' : 'collapsed' }}" href="{{ url('departemen') }}">
                <i class="bi bi-file-earmark"></i>
                <span>Departemen</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('kategori-tiket') ? '' : 'collapsed' }}" href="{{ url('kategori-tiket') }}">
                <i class="bi bi-file-earmark"></i>
                <span>Kategori Tiket</span>
            </a>
        </li>

        <li class="nav-heading">Tiket</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-file-earmark"></i>
                <span>Buat Tiket</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-file-earmark"></i>
                <span>Log Tiket</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-file-earmark"></i>
                <span>Feedback Tiket</span>
            </a>
        </li>

        <li class="nav-heading">Pengaturan</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-file-earmark"></i>
                <span>User</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-file-earmark"></i>
                <span>Role</span>
            </a>
        </li>

        

    </ul>

</aside><!-- End Sidebar-->
