<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\View\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ModelInterface;
use MSBios\View\Model\ViewModel;

/**
 * Class IndexController
 *
 * @package MSBios\View\Controller
 */
class IndexController extends AbstractActionController
{
    /**
     * @inheritDoc
     *
     * @return ModelInterface
     */
    public function indexAction(): ModelInterface
    {
        $viewModel = new ViewModel([
            'content' => 'Placeholder page'
        ]);
        $viewModel->attachJavascript(true);
        return $viewModel;
    }
}
