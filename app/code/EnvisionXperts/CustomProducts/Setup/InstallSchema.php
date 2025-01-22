<?php

namespace EnvisionXperts\CustomProducts\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements InstallSchemaInterface

{

    public function install(SchemaSetUpInterface $setup, ModuleContextInterface $context)

    {

        $installer = $setup;

        $installer->startSetup();

        $tableName = $installer->getTable("products_collection");

        if($installer -> getConnection()->isTableExists($tableName) != true) {
            $table = $installer->getConnection()->newTable(
                $tableName
            )
            ->addColumn(
                'id',
                Table::TYPE_INTEGER,
                null,
                [
                    'identity' => true,
                    'nullable'=> false,
                    'unsigned' => true,
                    'primary' => true
                ],
                'ID'
            )
            ->addColumn(
                'product_name',
                Table::TYPE_TEXT,
                255,
                [
                    'nullable' => false
                ],
                'Product Name'
            )
            ->addColumn(
                'product_price',
                Table::TYPE_INTEGER,
                null,
                [
                    'nullable' => false
                ],
                'Product Price'
            )
            ->addColumn(
                'product_status',
                Table::TYPE_TEXT,
                255,
                [
                    'nullable' => false
                ],
                'Product Status'
            )
            ->addColumn(
                'product_sku',
                Table::TYPE_TEXT,
                255,
                [
                    'nullable' => false
                    ],
                    'Product SKU'
                    )
            ->setComment(
                "Products Collection Table. Each product will be inserted here."
            )
            ->setOption('type', 'InnoDB')
            ->setOption('charset','utf8');
            $installer->getConnection()->createTable($table);

    }
    $installer->endSetup();
}

}
