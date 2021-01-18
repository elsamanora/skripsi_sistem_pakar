<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src">
        </div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Home</li>
                <li>
                    <a href="<?= base_url() . 'index.php/admin/Home' ?>">
                        <i class="fa fa-home fa-lg"></i>
                        Home
                    </a>
                </li>
                <li class="app-sidebar__heading">Modul</li>
                <li>
                    <a href="<?= base_url() . 'index.php/admin/Penyakit' ?>">
                        <i class="fa fa-virus fa-lg"></i>
                        Penyakit
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() . 'index.php/admin/Gejala' ?>">
                        <i class="fa fa-file-medical-alt fa-lg"></i>
                        Gejala
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() . 'index.php/admin/Pengetahuan' ?>">
                        <i class="fa fa-book-medical fa-lg"></i>
                        Pengetahuan
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() . 'index.php/admin/Aturan' ?>">
                        <i class="fa fa-sliders-h fa-lg"></i>
                        Aturan
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() . 'index.php/admin/Penanganan' ?>">
                        <i class="fa fa-medkit fa-lg"></i>
                        Penanganan 
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() . 'index.php/admin/User' ?>">
                        <i class="fa fa-user fa-lg"></i>
                        Penanganan 
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>