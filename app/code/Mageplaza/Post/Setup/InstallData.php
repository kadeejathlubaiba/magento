<?php

namespace Mageplaza\Post\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $dataMenuRows = [
            [
                'title' => 'title 1',
                'content' => 'Here is the content 1',
                'image' => 'avatar1.jpg',
            ],
            [
                'title' => 'title 2',
                'content' => 'Here is the content 2',
                'image' =>'avatar1.jpg' ,
            ]
        ];
        
        foreach($dataMenuRows as $data) {
            $setup->getConnection()->insert($setup->getTable('mageplaza_post'), $data);
        }
    }
}
?>
