<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\View;

/**
 * Class Module
 *
 * @package MSBios\View
 */
class Module extends \MSBios\Module
{
    /** @const VERSION */
    const VERSION = '2.0.0';

    /**
     * @inheritDoc
     *
     * @return string
     */
    protected function getDir(): string
    {
        return __DIR__;
    }

    /**
     * @inheritDoc
     *
     * @return string
     */
    protected function getNamespace(): string
    {
        return __NAMESPACE__;
    }
}
