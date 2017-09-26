<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\View;

use Zend\ServiceManager\Factory\InvokableFactory;

return [

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
