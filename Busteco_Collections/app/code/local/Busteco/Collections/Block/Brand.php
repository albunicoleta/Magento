<?php

class Busteco_Collections_Block_Brand extends Mage_Core_Block_Template
{
    public function getCollectionByBrand($brand)
    {
        $collection = Mage::getModel('catalog/product')->getCollection();
        /* @var $collection Mage_Catalog_Model_Resource_Product_Collection */
        $collection->addAttributeToSelect('name')
                ->addAttributeToSelect('price')
                ->addAttributeToFilter('brand', array('eq' => $brand));
                
        return $collection;
    }
    
    public function getAllBrands(){
        $options = new Busteco_Collections_Model_Source_Brand();
        return $options->toOptionArray();
    }
}
