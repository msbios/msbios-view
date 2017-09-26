<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\View\Helper;

use Zend\View\Helper\AbstractHelper;

/**
 * Class ToggleHelper
 * @package MSBios\View\Helper
 */
class ToggleHelper extends AbstractHelper
{
    /**
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
