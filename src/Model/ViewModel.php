<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\View\Model;

use Laminas\View\Model\ViewModel as DefaultViewModel;

/**
 * Class ViewModel
 *
 * @package MSBios\View\Model
 */
class ViewModel extends DefaultViewModel implements ViewModelInterface
{
    /** @var bool  */
    protected $hasjs = false;

    /**
     * @return bool
     */
    public function isHasjs(): bool
    {
        return $this->hasjs;
    }

    /**
     * @param bool $hasjs
     * @return ViewModel
     */
    public function setHasjs(bool $hasjs): ViewModel
    {
        $this->hasjs = $hasjs;
        return $this;
    }
}
