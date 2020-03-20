<?php
/**
 * @category   Bhaveshpp
 * @package    Bhaveshpp_Blogpost
 * @author     https://github.com/bhaveshpp/
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Bhaveshpp\Blogpost\Controller\Adminhtml\posts;

class Index extends \Bhaveshpp\Blogpost\Controller\Adminhtml\Posts
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Magento_Backend::content');
        $resultPage->getConfig()->getTitle()->prepend(__('Manage Posts'));
        $resultPage->addBreadcrumb(__('Post'), __('Post'));
        $resultPage->addBreadcrumb(__('Posts'), __('Posts'));
        return $resultPage;
    }
}