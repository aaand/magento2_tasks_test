<?php

namespace Testmodules\Tasklist\Model;

//use Magento\Cron\Exception;
use Magento\Framework\Model\AbstractModel;

/**
 * Contact Model
 *
 * @author      andrew
 */
class Tasklist extends AbstractModel
{
    /**
     * @var \Magento\Framework\Stdlib\DateTime
     */
    protected $_dateTime;

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Testmodules\Tasklist\Model\ResourceModel\Tasklist::class);
    }

}
