<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\View\Controller;

use MSBios\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;

/**
 * Class IndexController
 * @package MSBios\View\Controller
 */
class IndexController extends AbstractActionController
{
    /**
     * @return ViewModel
     */
    public function indexAction()
    {
        $viewModel = new ViewModel([
            'content' => 'Placeholder page'
        ]);
        $viewModel->attachJavascript(true);
        return $viewModel;
    }
}
