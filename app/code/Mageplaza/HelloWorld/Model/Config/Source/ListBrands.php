<?php
namespace Mageplaza\HelloWorld\Model\Config\Source;

class ListBrands implements \Magento\Framework\Data\OptionSourceInterface {
    public function toOptionArray()
    {
        return [
            ['value' => 'Levis', 'label' => __('Levis')], 
            ['value' => 'Wrangler', 'label' => __('Wrangler')], 
            ['value' => 'Polo', 'label' => __('Polo')]
        ];
    }
}

?>