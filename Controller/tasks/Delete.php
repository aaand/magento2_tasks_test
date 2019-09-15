<?php

namespace Testmodules\Tasklist\Controller\tasks;
class Delete extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        if (!isset($_REQUEST['id'])) {
            print_r('id not input');
            die();
        }
        $id = $_REQUEST['id'];
        $contactModel = $this->_objectManager->create('Testmodules\Tasklist\Model\Tasklist');
        $collection = $contactModel->getCollection()->addFieldToFilter('ID', array('eq' => $id));
        foreach ($collection as $contact) {
            $contact->delete();
        }
        header('Location: /tasklist/tasks');
        die();
    }
}
