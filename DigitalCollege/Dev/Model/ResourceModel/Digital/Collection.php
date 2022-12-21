<?php

namespace DigitalCollege\Dev\Model\ResourceModel\Digital;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class  Collection extends AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('DigitalCollege\Dev\Model\Digital','DigitalCollege\Dev\Model\ResourceModel\Digital');
    }
}
