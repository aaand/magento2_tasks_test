<?php

namespace Testmodules\Tasklist\Controller\tasks;
class Add extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        if (!isset($_REQUEST['task'])) {
            print_r('task not input');
            die();
        }
        $task = $_REQUEST['task'];
        $contact = $this->_objectManager->create('Testmodules\Tasklist\Model\Tasklist');
        $contact->setTask($task);
        $contact->save();
        header('Location: /tasklist/tasks');
        die();
    }
}
