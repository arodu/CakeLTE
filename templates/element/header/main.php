<?= $this->element('CakeLte.header/menu') ?>
<ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->
    <li class="nav-item"> <a class="nav-link" data-widget="navbar-search" href="#" role="button"> <i class="bi bi-search"></i> </a> </li> <!--end::Navbar Search-->
    <?= $this->element('CakeLte.header/messages') ?>
    <?= $this->element('CakeLte.header/notifications') ?>
    <?= $this->element('CakeLte.header/fullscreen') ?>
    <?= $this->element('CakeLte.header/user_menu') ?>
    <?= $this->element('CakeLte.header/theme_mode') ?>
</ul> <!--end::End Navbar Links-->