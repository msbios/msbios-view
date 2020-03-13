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
    public function hasJavascript(): bool;

    /**
     * @param bool $toggle
     * @return $this
     */
    public function attachJavascript(bool $toggle);
}
