<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\View;

use Zend\ServiceManager\Factory\InvokableFactory;

return [

    'service_manager' => [
        'factories' => [
            Renderer\PhpRenderer::class =>
                Factory\PhpRendererFactory::class
        ],
        'aliases' => [
            // Override
            'Zend\View\Renderer\PhpRenderer' =>
                Renderer\PhpRenderer::class
        ]
    ],

    'view_manager' => [
        'default_javascript_template_suffix' => 'pjs',
    ],

    'view_helpers' => [
        'factories' => [
            Helper\ToggleHelper::class => InvokableFactory::class
        ],
        'aliases' => [
            'toggle' => Helper\ToggleHelper::class
        ]
    ],

    Module::class => [

    ],
];
