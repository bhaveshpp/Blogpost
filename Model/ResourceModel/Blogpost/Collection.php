<?php
/**
 * @category   Bhaveshpp
 * @package    Bhaveshpp_Blogpost
 * @author     https://github.com/bhaveshpp/
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Bhaveshpp\Blogpost\Model\ResourceModel\Blogpost;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends  AbstractCollection
{
    protected $postId = 'post_id';
    /**
     * Define Model and Resource Model  
    */
    protected function __construct()
    {
        $this->init(
            'Bhaveshpp\Blogpost\Model\Blogpost',
            'Bhaveshpp\Blogpost\Model\ResourceModel\Blogpost'
        );
    }
}