<?php

/**
 * @var \App\View\AppView $this
 */

$navbar = [
    'active' => [
        'label' => __('Active'),
        'url' => '#',
    ],
    [
        'label' => __('Dropdown'),
        'url' => '#',
        'children' => [
            [
                'label' => __('Action'),
                'url' => '#',
            ],
            [
                'label' => __('Another action'),
                'url' => '#',
            ],
            [
                'label' => __('Something else here'),
                'url' => '#',
            ],
            [
                'type' => $this->Menu::ITEM_TYPE_DIVIDER,
            ],
            [
                'label' => __('Separated link'),
                'url' => '#',
            ],
        ],
    ],
    [
        'label' => __('Link'),
        'url' => '#',
    ],
    [
        'label' => __('Disabled'),
        'url' => '#',
        'type' => $this->Menu::ITEM_TYPE_DISABLED,
    ],
];

$this->Menu->activeItem('active');

?>

<div class="card">
    <div class="card-body">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </div>

    <div class="card-body">
        <?= $this->Menu->render($navbar, ['menu.class' => 'nav']) ?>
    </div>

    <div class="card-body">
        <?= $this->Menu->render($navbar, ['menu.class' => 'nav nav-pills']) ?>
    </div>
    <div class="card-body">
        <?= $this->Menu->render($navbar, ['menu.class' => 'nav nav-tabs']) ?>
    </div>

</div>


<div class="card card-danger card-outline mb-4">
    <!--begin::Header-->
    <div class="card-header">
        <div class="card-title">MenuHelper</div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?= $this->Menu->render($navbar, ['menu.class' => 'navbar-nav me-auto mb-2 mb-lg-0']) ?>

                    <?php

                    /*
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item "><a href="#" class="nav-link ">Home</a></li>
                        <li class="nav-item "><a href="#" class="nav-link ">Link</a></li>
                        <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><a href="#" class="dropdown-item ">Action</a></li>
                                <li><a href="#" class="dropdown-item ">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a href="#" class="dropdown-item ">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link disabled" aria-disabled="true">Disabled</a></li>
                    </ul>
                    */


                    /*
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    */ ?>

                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" data-sharkid="__6">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <!--end::Body-->
</div>



<div class="card card-danger card-outline mb-4">
    <!--begin::Header-->
    <div class="card-header">
        <div class="card-title">Navbar</div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" data-sharkid="__6">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <!--end::Body-->
</div>