<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <h4 class="dark-logo">Katalog Produk</h4>
            <h4 class="light-logo">Katalog Produk </h4>
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-house"></span><span class="mtext">Beranda</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('produk.index') }}">Daftar Produk</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="{{ route('kategori.index') }}">Daftar Kategori</a></li>
                    </ul>
                    <ul class="submenu">
                        <li><a href="{{ route('brand.index') }}">Daftar Brand</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-table"></span><span class="mtext">Produk</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('produk.create') }}">Tambah Produk</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-table"></span><span class="mtext">Kategori</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('kategori.create') }}">Tambah Kategori</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-table"></span><span class="mtext">Merek</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('brand.create') }}">Tambah Merek</a></li>
                    </ul>
                </li>
                <li>
                    <div class="sidebar-small-cap">Pengaturan Akun</div>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-person"></span><span class="mtext">Akun</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('password.request') }}">Ganti Kata Kunci</a></li>
                        <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                Keluar
                            </a>
                            <form action="{{ route('logout') }}" method="post" id="logout-form">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
