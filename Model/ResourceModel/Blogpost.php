<?php 
/**
 * @category   Bhaveshpp
 * @package    Bhaveshpp_Blogpost
 * @author     https://github.com/bhaveshpp/
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Bhaveshpp\Blogpost\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Blogpost extends AbstractDb {
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('blogpost','post_id');
    }
}