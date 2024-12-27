<?php
declare(strict_types=1);

namespace CakeLte\View;

use BootstrapUI\View\UIViewTrait;

/**
 * @property \CakeLte\View\Helper\CakeLteHelper $CakeLte
 * @property \BsUtils\View\Helper\MenuHelper $MenuLte
 * @property \BsUtils\View\Helper\MenuHelper $Menu
 */
trait CakeLteTrait
{
    use UIViewTrait;

    /**
     * Initialize CakeLte plugin
     *
     * @param array $options Options
     * @return void
     */
    public function initializeCakeLte(array $options = []): void
    {
        $this->initializeUI();
        $this->loadHelper('CakeLte.CakeLte', $options);
        $this->loadHelper('BsUtils.Menu');
        $this->loadHelper('MenuLte', [
            'className' => 'BsUtils.Menu',
            'nestClass' => null,
            'activeClass' => 'active',
            'defaultIcon' => [
                0 => 'bi bi-circle-fill',
                1 => 'bi bi-circle',
                2 => 'bi bi-record-circle-fill',
                'default' => 'bi bi-circle',
            ],
            'templates' => [
                'menuTitle' => '<li class="nav-header">{{text}}</li>',
                'icon' => '<i class="nav-icon {{icon}}"></i>',
                'divider' => '<li><hr class="dropdown-divider"></li>',
            
                'menuContainer' => '<ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">{{items}}</ul>',
                'menuItem' => '<li class="nav-item {{class}}">{{text}}{{nest}}</li>',
                'menuItemDisabled' => '<li class="nav-item"><a class="nav-link disabled" aria-disabled="true">{{icon}}<p>{{text}}</p></a></li>',
                'menuItemLink' => '<a href="{{url}}" class="nav-link {{class}}{{activeClass}}">{{icon}}<p>{{text}}{{arrow}}</p></a>',
                'menuItemLinkNest' => '<a href="{{url}}" class="nav-link {{class}}{{activeClass}}">{{icon}}<p>{{text}}<i class="nav-arrow bi bi-chevron-right"></i></p></a>',
            
                'dropdownContainer' => '<ul class="nav nav-treeview">{{items}}</ul>',
                'dropdownItem' => '<li class="nav-item">{{text}}{{nest}}</li>',
                'dropdownItemDisabled' => '<li class="nav-item">{{text}}{{nest}}</li>',
                'dropdownItemLink' => '<a href="{{url}}" class="nav-link">{{icon}}<p>{{text}}</p></a>',
                'dropdownItemLinkNest' => '<a href="{{url}}" class="nav-link">{{icon}}<p>{{text}}<i class="nav-arrow bi bi-chevron-right"></i></p></a>',
            ],
        ]);
    }
}
