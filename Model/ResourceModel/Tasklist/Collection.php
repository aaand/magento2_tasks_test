<?php

namespace Testmodules\Tasklist\Model\ResourceModel\Tasklist;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Contact Resource Model Collection
 *
 * @author      andrew
 */
class Collection extends AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Testmodules\Tasklist\Model\Tasklist', 'Testmodules\Tasklist\Model\ResourceModel\Tasklist');
    }
}
