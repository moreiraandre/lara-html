<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Define screen size classes
    |--------------------------------------------------------------------------
    |
    */

    'screen_sizes' => [
        'xs', 'sm', 'md', 'lg',
    ],

    /*
    |--------------------------------------------------------------------------
    | Grid CSS classes
    |--------------------------------------------------------------------------
    |
    */

    'grid-css' => [

        'screen' => 'container-fluid',
//        'row' => 'row no-gutters',
        'row' => 'row',
        'col' => 'col-md',

    ],

    /*
    |--------------------------------------------------------------------------
    | Custom plugins
    |--------------------------------------------------------------------------
    |
    | Case must respect the call of the plugin, example call: $this->addMeuForm();
    | plugin definition: 'MyForm' => []
    |
    */

    'plugins' => [

        // Alerts
        'AlertPrimary' => [
            'meta.html',
            'class' => 'alert alert-primary',
            'config.nameBlade' => 'Alert',
        ],

        'AlertSecondary' => [
            'meta.html',
            'class' => 'alert alert-secondary',
            'config.nameBlade' => 'Alert',
        ],

        'AlertSuccess' => [
            'meta.html',
            'class' => 'alert alert-success',
            'config.nameBlade' => 'Alert',
        ],

        'AlertDanger' => [
            'meta.html',
            'class' => 'alert alert-danger',
            'config.nameBlade' => 'Alert',
        ],

        'AlertWarning' => [
            'meta.html',
            'class' => 'alert alert-warning',
            'config.nameBlade' => 'Alert',
        ],

        'AlertInfo' => [
            'meta.html',
            'class' => 'alert alert-info',
            'config.nameBlade' => 'Alert',
        ],

        'AlertLight' => [
            'meta.html',
            'class' => 'alert alert-light',
            'config.nameBlade' => 'Alert',
        ],

        'AlertDark' => [
            'meta.html',
            'class' => 'alert alert-dark',
            'config.nameBlade' => 'Alert',
        ],
        // *** End Alerts ***

        // Badges
        'BadgePrimary' => [
            'meta.html',
            'class' => 'badge badge-primary',
            'config.nameBlade' => 'Badge',
        ],

        'BadgeSecondary' => [
            'meta.html',
            'class' => 'badge badge-secondary',
            'config.nameBlade' => 'Badge',
        ],

        'BadgeSuccess' => [
            'meta.html',
            'class' => 'badge badge-success',
            'config.nameBlade' => 'Badge',
        ],

        'BadgeDanger' => [
            'meta.html',
            'class' => 'badge badge-danger',
            'config.nameBlade' => 'Badge',
        ],

        'BadgeWarning' => [
            'meta.html',
            'class' => 'badge badge-warning',
            'config.nameBlade' => 'Badge',
        ],

        'BadgeInfo' => [
            'meta.html',
            'class' => 'badge badge-info',
            'config.nameBlade' => 'Badge',
        ],

        'BadgeLight' => [
            'meta.html',
            'class' => 'badge badge-light',
            'config.nameBlade' => 'Badge',
        ],

        'BadgeDark' => [
            'meta.html',
            'class' => 'badge badge-dark',
        ],
        // *** End Badges ***

        // Breadcrumb
        'Breadcrumb' => [
            'class' => 'breadcrumb',
            'config.containerType' => 'Plugins',
        ],

        'BreadItem' => [
            'meta.html',
            'href' => '#',
            'config.nameBlade' => 'BreadcrumbItem',
        ],

        'BreadItemActive' => [
            'meta.html',
            'class' => 'breadcrumb-item active',
            'config.nameBlade' => 'BreadcrumbItemActive',
        ],
        // *** End Breadcrumb ***

        // Buttons
        'BtnPrimary' => [
            'meta.html',
            'class' => 'btn btn-primary',
            'type' => 'button',
            'config.nameBlade' => 'Button',
        ],
        'BtnSecondary' => [
            'meta.html',
            'class' => 'btn btn-secondary',
            'type' => 'button',
            'config.nameBlade' => 'Button',
        ],
        'BtnSuccess' => [
            'meta.html',
            'class' => 'btn btn-success',
            'type' => 'button',
            'config.nameBlade' => 'Button',
        ],
        'BtnDanger' => [
            'meta.html',
            'class' => 'btn btn-danger',
            'type' => 'button',
            'config.nameBlade' => 'Button',
        ],
        'BtnWarning' => [
            'meta.html',
            'class' => 'btn btn-warning',
            'type' => 'button',
            'config.nameBlade' => 'Button',
        ],
        'BtnInfo' => [
            'meta.html',
            'class' => 'btn btn-info',
            'type' => 'button',
            'config.nameBlade' => 'Button',
        ],
        'BtnLight' => [
            'meta.html',
            'class' => 'btn btn-light',
            'type' => 'button',
            'config.nameBlade' => 'Button',
        ],
        'BtnDark' => [
            'meta.html',
            'class' => 'btn btn-dark',
            'type' => 'button',
            'config.nameBlade' => 'Button',
        ],
        'BtnLink' => [
            'meta.html',
            'class' => 'btn btn-link',
            'type' => 'button',
            'config.nameBlade' => 'Button',
        ],
        // *** End Buttons ***

        // Button Group
        'BtnGroup' => [
            'class' => 'btn-group',
            'config.nameBlade' => 'ButtonGroup',
            'config.containerType' => 'Plugins',
        ],

        'BtnGroupVertical' => [
            'class' => 'btn-group-vertical',
            'config.nameBlade' => 'ButtonGroup',
            'config.containerType' => 'Plugins',
        ],
        // *** End Button Group ***

        // Card
        'Card' => [
            'class' => 'card',
            'config.containerType' => 'Plugins',
        ],

        'CardPrimary' => [
            'class' => 'card text-white bg-primary',
            'config.nameBlade' => 'Card',
            'config.containerType' => 'Plugins',
        ],

        'CardSecondary' => [
            'class' => 'card text-white bg-secondary',
            'config.nameBlade' => 'Card',
            'config.containerType' => 'Plugins',
        ],

        'CardSuccess' => [
            'class' => 'card text-white bg-success',
            'config.nameBlade' => 'Card',
            'config.containerType' => 'Plugins',
        ],

        'CardDanger' => [
            'class' => 'card text-white bg-danger',
            'config.nameBlade' => 'Card',
            'config.containerType' => 'Plugins',
        ],

        'CardWarning' => [
            'class' => 'card bg-warning',
            'config.nameBlade' => 'Card',
            'config.containerType' => 'Plugins',
        ],

        'CardInfo' => [
            'class' => 'card text-white bg-info',
            'config.nameBlade' => 'Card',
            'config.containerType' => 'Plugins',
        ],

        'CardLight' => [
            'class' => 'card bg-ligth',
            'config.nameBlade' => 'Card',
            'config.containerType' => 'Plugins',
        ],

        'CardDark' => [
            'class' => 'card text-white bg-dark',
            'config.nameBlade' => 'Card',
            'config.containerType' => 'Plugins',
        ],

        'CardHeader' => [
            'meta.html',
            'class' => 'card-header',
        ],

        'CardImgTop' => [
            'src',
            'alt',
            'class' => 'card-img-top',
        ],

        'CardBody' => [
            'class' => 'card-body',
            'config.containerType' => 'Plugins',
        ],

        'CardBodyTitle' => [
            'meta.html',
            'class' => 'card-title',
        ],

        'CardBodyText' => [
            'meta.html',
            'class' => 'card-text',
        ],

        'CardFooter' => [
            'meta.html',
            'class' => 'card-footer',
        ],
        // *** End Card ***

        // Carousel
        'Carousel' => [
            'class' => 'carousel slide',
            'config.containerType' => 'Plugins',
            'config.onBefore' => \MoreiraAndre\LaraHtml\Bootstrap4Fa\Mutators\CarouselBefore::class,
        ],

        'CarouselItem' => [
            'meta.src',
            'meta.title' => '',
            'meta.text' => '',
            'class' => 'carousel-item',
        ],
        // *** End Carousel ***

        // Collapse
        'Collapse' => [
            'meta.button-html',
            'meta.id',
            'meta.body-html',
        ],
        // *** End Collapse ***

        // Dropdown
        'DropdownPrimary' => [
            'meta.button-html',
            'class' => 'btn btn-primary dropdown-toggle',
            'config.containerType' => 'Plugins',
            'config.nameBlade' => 'Dropdown',
        ],

        'DropdownSecondary' => [
            'meta.button-html',
            'class' => 'btn btn-secondary dropdown-toggle',
            'config.containerType' => 'Plugins',
            'config.nameBlade' => 'Dropdown',
        ],

        'DropdownSuccess' => [
            'meta.button-html',
            'class' => 'btn btn-success dropdown-toggle',
            'config.containerType' => 'Plugins',
            'config.nameBlade' => 'Dropdown',
        ],

        'DropdownDanger' => [
            'meta.button-html',
            'class' => 'btn btn-danger dropdown-toggle',
            'config.containerType' => 'Plugins',
            'config.nameBlade' => 'Dropdown',
        ],

        'DropdownWarning' => [
            'meta.button-html',
            'class' => 'btn btn-warning dropdown-toggle',
            'config.containerType' => 'Plugins',
            'config.nameBlade' => 'Dropdown',
        ],

        'DropdownInfo' => [
            'meta.button-html',
            'class' => 'btn btn-info dropdown-toggle',
            'config.containerType' => 'Plugins',
            'config.nameBlade' => 'Dropdown',
        ],

        'DropdownLight' => [
            'meta.button-html',
            'class' => 'btn btn-light dropdown-toggle',
            'config.containerType' => 'Plugins',
            'config.nameBlade' => 'Dropdown',
        ],

        'DropdownDark' => [
            'meta.button-html',
            'class' => 'btn btn-dark dropdown-toggle',
            'config.containerType' => 'Plugins',
            'config.nameBlade' => 'Dropdown',
        ],

        'DropItem' => [
            'meta.html',
            'href' => '#',
            'class' => 'dropdown-item',
            'config.nameBlade' => 'DropdownItem',
        ],
        // *** End Dropdown ***

        // Form
        'Form' => [
            'action' => '',
            'method' => 'post',
        ],

        'Text' => [
            'name',
            'value',
            'meta.label' => 'eval.ucfirst(str_replace("_", " ", $listAttr["name"]))',
            'placeholder' => 'eval."-> " . ucfirst(str_replace("_", " ", $listAttr["name"]))',
            'class' => 'form-control form-control-sm',
            'config.nameBlade' => 'FormInput',
        ],
        // *** End Form ***

        // List
        'List' => [
            'class' => 'list-group',
            'config.containerType' => 'Plugins',
        ],

        'ListItem' => [
            'meta.html',
            'class' => 'list-group-item',
        ],

        'ListItemActive' => [
            'meta.html',
            'class' => 'list-group-item active',
            'config.nameBlade' => 'ListItem',
        ],

        'ListItemDisabled' => [
            'meta.html',
            'class' => 'list-group-item disabled',
            'config.nameBlade' => 'ListItem',
        ],
        // *** End List ***

        // Table
        'Table' => [
            'class' => 'table',
        ],

        'Tr' => [
            'meta.html',
            'config.nameBlade' => 'TableTr',
        ],

        'Th' => [
            'meta.html',
            'config.nameBlade' => 'TableTh',
        ],

        'Td' => [
            'meta.html',
            'config.nameBlade' => 'TableTd',
        ],
        // *** End Table ***

        'Br' => [
            ''
        ],

        'Button' => [
            'meta.html',
            'class' => 'btn btn-danger btn-sm',
        ],

    ],

];
