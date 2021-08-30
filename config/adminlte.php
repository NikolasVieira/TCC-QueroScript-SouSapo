<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Título
    |--------------------------------------------------------------------------
    |
    | Aqui você pode alterar o título padrão do painel de administração.
    |
    | Para obter instruções detalhadas, você pode consultar a seção do título aqui:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => '|',
    'title_prefix' => 'SouSapo',
    'title_postfix' => 'Dashboard',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Aqui você pode ativar o favicon.
    |
    | Para obter instruções detalhadas, você pode consultar a seção de favicon aqui:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Aqui você pode alterar o logotipo do seu painel de administração.
    |
    | Para obter instruções detalhadas, você pode consultar a seção do logotipo aqui:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>Sou</b>Sapo',
    'logo_img' => 'https://a-static.mlcdn.com.br/618x463/quadro-infantil-desenho-sapo-conspecto/conspecto/148957/9b142972fa26b3c5f14c9d865d408650.jpg',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'SouSapo',

    /*
    |--------------------------------------------------------------------------
    | Menu do Usuário
    |--------------------------------------------------------------------------
    |
    | Aqui você pode ativar e alterar o menu do usuário.
    |
    | Para obter instruções detalhadas, você pode consultar a seção do menu do usuário aqui:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Aqui, mudamos o layout do seu painel de administração.
    |
    | Para obter instruções detalhadas, você pode consultar a seção de layout aqui:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Classes de view de Autenticação
    |--------------------------------------------------------------------------
    |
    | Aqui você pode alterar a aparência e o comportamento das views de autenticação.
    |
    | Para obter instruções detalhadas, você pode consultar a seção de classes de autenticação aqui:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Classes do Painel de Administração
    |--------------------------------------------------------------------------
    |
    | Aqui você pode alterar a aparência e o comportamento do painel de administração.
    |
    | Para obter instruções detalhadas, você pode consultar as classes do painel de administração aqui:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Barra Lateral
    |--------------------------------------------------------------------------
    |
    | Aqui podemos modificar a barra lateral do painel de administração.
    |
    | Para obter instruções detalhadas, você pode consultar a seção da barra lateral aqui:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Barra Lateral de Controle (Barra Lateral Direita)
    |--------------------------------------------------------------------------
    |
    | Aqui podemos modificar a barra lateral direita, também conhecida como barra lateral de controle do painel de administração.
    |
    | Para obter instruções detalhadas, você pode consultar a seção da barra lateral direita aqui:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Aqui podemos modificar as configurações de url do painel de administração.
    |
    | Para obter instruções detalhadas, você pode consultar a seção de urls aqui:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Aqui podemos habilitar a opção Laravel Mix para o painel de administração.
    |
    | Para obter instruções detalhadas, você pode olhar a seção de mix de laravel aqui:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Itens do Menu
    |--------------------------------------------------------------------------
    |
    | Aqui podemos modificar a barra lateral / navegação superior do painel de administração.
    |
    | Para obter instruções detalhadas, você pode olhar aqui:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'procurar',
            'topnav_right' => true,
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        [
            'type' => 'sidebar-menu-search',
            'text' => 'procurar',
        ],
        ['header' => 'Configurações do Site'],
        [
            'text'    => 'CRUDs',
            'icon'    => 'fas fa-fw fa-share',
            'submenu' => [
                [
                    'text'    => 'Quadrinhos',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'Capitulos',
                            'url'  => '/chapters',
                        ],
                        [
                            'text'    => 'Paginas',
                            'url'     => '/pages',
                        ],
                    ],
                ],
                [
                    'text' => 'Fórum',
                    'url'  => '#',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Filtros de menu
    |--------------------------------------------------------------------------
    |
    | Aqui podemos modificar os filtros do menu do painel de administração.
    |
    | Para obter instruções detalhadas, você pode consultar a seção de filtros de menu aqui:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Inicialização de Plugins
    |--------------------------------------------------------------------------
    |
    | Aqui podemos modificar os plug-ins usados ​​no painel de administração.
    |
    | Para obter instruções detalhadas, você pode consultar a seção de plug-ins aqui:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Aqui podemos habilitar o suporte Livewire.
    |
    | Para obter instruções detalhadas, você pode procurar o livewire aqui:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    */

    'livewire' => false,
];
