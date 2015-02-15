<?php

class Busteco_Collections_Model_Source_Brand extends Mage_Eav_Model_Entity_Attribute_Source_Abstract {

    const BRAND1 = 1;
    const BRAND2 = 2;
    const BRAND3 = 3;
    
    public function getAllOptions() {
         if (is_null($this->_options)) {
            $this->_options = array(
                array(
                    'label' => 'Brand 1',
                    'value' =>  self::BRAND1
                ),
                array(
                    'label' => 'Brand 2',
                    'value' =>  self::BRAND2
                ),
                array(
                    'label' => 'Brand 3',
                    'value' =>  self::BRAND3
                ),
            );
        }
        return $this->_options;
    }

    public function toOptionArray()
    {
        return $this->getAllOptions();
    }

}
