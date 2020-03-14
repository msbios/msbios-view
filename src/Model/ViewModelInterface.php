<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\View\Model;

/**
 * Interface ViewModelInterface
 *
 * @package MSBios\View\Model
 */
interface ViewModelInterface
{
    /**
     * @return bool
     */
    public function isHasjs(): bool;

    /**
     * @param bool $hasjs
     * @return ViewModel
     */
    public function setHasjs(bool $hasjs): ViewModel;
}
