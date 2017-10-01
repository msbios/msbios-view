<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\View\Factory;

use Interop\Container\ContainerInterface;
use MSBios\View\Renderer\PhpRenderer;
use Zend\Mvc\Service\ViewPhpRendererFactory;
use Zend\View\Renderer\RendererInterface;

/**
 * Class PhpRendererFactory
 * @package MSBios\View\Factory
 */
class PhpRendererFactory extends ViewPhpRendererFactory
{
    /**
     * @param ContainerInterface $container
     * @param string $name
     * @param array|null $options
     * @return PhpRenderer
     */
    public function __invoke(ContainerInterface $container, $name, array $options = null)
    {
        /** @var RendererInterface $defaultRenderer */
        $defaultRenderer = parent::__invoke($container, $name, $options);

        /** @var PhpRenderer $renderer */
        $renderer = new PhpRenderer;
        $renderer->setHelperPluginManager($defaultRenderer->getHelperPluginManager());
        $renderer->setResolver($defaultRenderer->resolver());

        return $renderer;
    }
}
