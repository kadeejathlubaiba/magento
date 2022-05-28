<?php
namespace Mageplaza\Post\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    
  public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
  {
      
    $postTableName = $setup->getTable('mageplaza_post');

    if($setup->getConnection()->isTableExists($postTableName) != true) {

      $postTable = $setup->getConnection()
          ->newTable($postTableName)
          ->addColumn(
            'post_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'Post ID'
        )
        ->addColumn(
            'title',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['nullable' => false, 'default' => ''],
              'Title'
        )
        ->addColumn(
            'content',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            ['nullable' => false, 'default' => ''],
              'Content'
        )
        ->addColumn(
          'image',
          \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
          255,
          [],
          'Image'
      )
          ->addIndex(
            $setup->getIdxName('mageplaza_post', ['title']),
            ['title']
          )
          ->setComment("Post Table");

      $setup->getConnection()->createTable($postTable);
    }
  }
}
?>
