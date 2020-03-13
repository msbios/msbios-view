<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\View\Helper;

use Laminas\View\Helper\AbstractHelper;

/**
 * Class ToggleHelper
 *
 * @package MSBios\View\Helper
 */
class ToggleHelper extends AbstractHelper
{
    /**
     * @inheritDoc
     *
     * @param $defaultValue
     * @param $dynamicValue
     * @param bool $successValue
     * @param bool $failureValue
     * @return bool
     */
    public function __invoke($defaultValue, $dynamicValue, $successValue = true, $failureValue = false)
    {
        return $defaultValue == $dynamicValue ? $successValue : $failureValue;
    }
}
