<div class="app-header__logo">
    <div class="logo-src"></div>
    <div class="header__pane ml-auto">
        <div>
            <!-- Button sidebar-->
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
        <!-- Button search-->
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
<div class="app-header__content">
    <div class="app-header-left">
        <div class="search-wrapper">
            <!-- <div class="input-holder">
                <input type="text" class="search-input" placeholder="Cari disini .....">
                <button class="search-icon"><span></span></button>
            </div> -->
            <!-- button close seach -->
            <button class="close"></button>
        </div>
    </div>

    <div class="app-header-right">
        <div class="header-btn-lg pr-0">
            <div class="widget-content p-0">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="btn-group">
                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                <img width="42" class="rounded-circle" src="<?php echo base_url(); ?>/assets/admin/images/avatars/user.jpg" alt="">
                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                            </a>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                <!-- <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                <div tabindex="-1" class="dropdown-divider"></div> -->
                                <a href="<?php echo base_url("member/login/logout")?>"><button type="button" tabindex="0" class="dropdown-item">Logout</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left  ml-3 header-user-info">
                        <div class="widget-heading">
                            <?php echo $this->session->username?>
                        </div>
                        <div class="widget-subheading">
                            Administrator
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>