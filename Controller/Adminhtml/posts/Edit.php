<?php
/**
 * @category   Bhaveshpp
 * @package    Bhaveshpp_Blogpost
 * @author     https://github.com/bhaveshpp/
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Bhaveshpp\Blogpost\Controller\Adminhtml\posts;

class Edit extends \Bhaveshpp\Blogpost\Controller\Adminhtml\Posts
{

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $model = $this->_objectManager->create('Bhaveshpp\Blogpost\Model\Blogpost');

        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addError(__('This item no longer exists.'));
                $this->_redirect('bhaveshpp_blogpost/*');
                return;
            }
        }
        // set entered data if was error when we do save
        $data = $this->_objectManager->get('Magento\Backend\Model\Session')->getPageData(true);
        if (!empty($data)) {
            $model->addData($data);
        }
        $this->_coreRegistry->register('current_bhaveshpp_blogpost_posts', $model);
        $this->_initAction();
        $this->_view->getLayout()->getBlock('posts_posts_edit');
        $this->_view->renderLayout();
    }
}