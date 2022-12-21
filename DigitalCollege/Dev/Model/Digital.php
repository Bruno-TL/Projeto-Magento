<?php

namespace DigitalCollege\Dev\Model;

use Magento\Framework\Model\AbstractModel;

class Digital extends AbstractModel
{
    /**
     * Initialize resource model
     * @return void
     */

    public function _construct()
    {
        $this->_init('DigitalCollege\Dev\Model\ResourceModel\Digital');
    }
}
