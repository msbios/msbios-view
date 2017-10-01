<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\View\Renderer;

use MSBios\View\Model\ViewModelInterface;
use Zend\View\Helper\InlineScript;
use Zend\View\Renderer\PhpRenderer as DefaultPhpRenderer;

/**
 * Class PhpRenderer
 * @package MSBios\View\Renderer
 */
class PhpRenderer extends DefaultPhpRenderer
{
    /**
     * @param string|\Zend\View\Model\ModelInterface $nameOrModel
     * @param null $values
     * @return string
     */
    public function render($nameOrModel, $values = null)
    {
        if ($nameOrModel instanceof ViewModelInterface && $nameOrModel->hasJavascript()) {
            /** @var InlineScript $plugin */
            $plugin = $this->plugin('InlineScript');
            $plugin->captureStart();
            echo parent::render(
                $nameOrModel->getTemplate() . '.pjs',
                $nameOrModel->getVariables()
            );
            $plugin->captureEnd();
        }

        return parent::render($nameOrModel, $values);
    }
}
