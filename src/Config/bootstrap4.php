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

        'Form' => [
            'action',
            'method' => 'post',
        ],

        'Text' => [
            'name',
            'value',
            'meta.label' => 'eval.ucfirst($listAttr["name"])',
            'placeholder' => 'eval."-> " . ucfirst($listAttr["name"])',
            'class' => 'form-control form-control-sm',
            'config.nameBlade' => 'FormInput',
        ],

        'Button' => [
            'meta.html',
            'class' => 'btn btn-danger btn-sm',
        ],

    ],

];
