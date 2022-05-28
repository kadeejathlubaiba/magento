<?php
namespace Mageplaza\Post\Model;

use Magento\Framework\Model\AbstractModel;

class Allpost extends AbstractModel
{
	const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;
	
	const CACHE_TAG = 'mageplaza_post';
	
	//Unique identifier for use within caching
	protected $_cacheTag = self::CACHE_TAG;
	
	protected function _construct()
    {
        $this->_init('Mageplaza\Post\Model\ResourceModel\Allpost');
    }
	
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];
        return $values;
    }
	
	public function getAvailableStatuses()
    {
        return [self::STATUS_ENABLED => __('Enabled'), self::STATUS_DISABLED => __('Disabled')];
    }
}
?>