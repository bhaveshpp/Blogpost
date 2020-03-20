<?php
/**
 * @category   Bhaveshpp
 * @package    Bhaveshpp_Blogpost
 * @author     https://github.com/bhaveshpp/
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
**/

namespace Bhaveshpp\Blogpost\Controller\Adminhtml\Posts;

class NewAction extends \Bhaveshpp\Blogpost\Controller\Adminhtml\Posts
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
