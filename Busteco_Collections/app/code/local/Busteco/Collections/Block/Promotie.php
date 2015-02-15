<?php

class Busteco_Collections_Block_Promotie extends Mage_Core_Block_Template
{
    public function getCollection()
    {
        $collection = Mage::getModel('catalog/product')->getCollection();
        $now = new Varien_Date();
        $now = $now->now();
        /* @var $collection Mage_Catalog_Model_Resource_Product_Collection */
        // filter products that have special price
        $collection->addAttributeToSelect('name')
                ->addAttributeToSelect('price')
                ->addAttributeToFilter('special_price', array('notnull' => true))
                ->addAttributeToFilter('special_from_date',array('lteq' => $now))
                ->addFieldToFilter('special_to_date',array(array('gteq' => $now), array('null' => true)));
        
        return $collection;
    }
}
