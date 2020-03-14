<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\View\Renderer;

use Laminas\View\Helper\HelperInterface;
use Laminas\View\Helper\InlineScript;
use Laminas\View\Model\ModelInterface;
use Laminas\View\Renderer\PhpRenderer as DefaultPhpRenderer;
use MSBios\View\Model\ViewModelInterface;

/**
 * Class PhpRenderer
 *
 * @package MSBios\View\Renderer
 */
class PhpRenderer extends DefaultPhpRenderer
{
    /**
     * @inheritDoc
     *
     * @param ModelInterface|string $nameOrModel
     * @param null $values
     * @return string
     */
    public function render($nameOrModel, $values = null): string
    {
        if ($nameOrModel instanceof ViewModelInterface && $nameOrModel->isHasjs()) {
            /** @var HelperInterface|InlineScript $plugin */
            $plugin = $this->plugin('InlineScript');

            $plugin->captureStart();
            echo parent::render(
                $nameOrModel->getTemplate() . '.pjs', // TODO: Need get this suffix from config
                $nameOrModel->getVariables()
            );
            $plugin->captureEnd();
        }

        return parent::render($nameOrModel, $values);
    }
}
