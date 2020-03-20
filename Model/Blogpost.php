<?php 
/**
 * @category   Bhaveshpp
 * @package    Bhaveshpp_Blogpost
 * @author     https://github.com/bhaveshpp/
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Bhaveshpp\Blogpost\Model;

use Magento\Framework\Model\AbstractModel;

class Blogpost extends AbstractModel {
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Bhaveshpp\Blogpost\Model\ResourceModel\Blogpost');
    }
}