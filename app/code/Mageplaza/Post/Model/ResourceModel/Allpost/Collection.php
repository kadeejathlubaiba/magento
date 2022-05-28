<?php
namespace Mageplaza\Post\Model\ResourceModel\Allpost;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'post_id';
	
	protected $_eventPrefix = 'post_allpost_collection';

    protected $_eventObject = 'allpost_collection';
	
	/**
     * Define model & resource model
     */
	protected function _construct()
	{
		$this->_init('Mageplaza\Post\Model\Allpost', 'Mageplaza\Post\Model\ResourceModel\Allpost');
	}
}
?>
