<?php

/**
 * @var \App\View\AppView $this
 */

$headerMenu = [
    [
        'label' => '<i class="bi bi-list"></i>',
        'url' => '#',
        'data-lte-toggle' => 'sidebar',
        'role' => 'button',
    ],
    [
        'label' => __('Home'),
        'url' => '/',
        'container' => [
            'class' => 'd-none d-md-block',
        ]
    ],
    'debug' => [
        'label' => __('Debug'),
        'url' => 'cakelte/debug',
        'container' => [
            'class' => 'd-none d-md-block',
        ]
    ],
    'theme' => [
        'label' => __('Theme'),
        'url' => 'adminlte',
        'container' => [
            'class' => 'd-none d-md-block',
        ]
    ],
    'logout' => [
        'label' => __('Logout'),
        'url' => '#',
        'container' => [
            'class' => 'd-none d-md-block',
        ]
    ],
];

echo $this->Menu->render($headerMenu, ['menuClass' => 'navbar-nav']);
