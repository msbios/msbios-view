<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\View\Model;

use Zend\View\Model\ViewModel as DefaultViewModel;

/**
 * Class ViewModel
 * @package MSBios\View\Model
 */
class ViewModel extends DefaultViewModel implements ViewModelInterface
{
    /** @var bool  */
    protected $hasjs = false;

    /**
     * @return bool
     */
    public function hasJavascript(): bool
    {
        return $this->hasjs;
    }

    /**
     * @param bool $toggle
     * @return $this
     */
    public function attachJavascript(bool $toggle)
    {
        $this->hasjs = $toggle;
        return $this;
    }


}