<?php

namespace Testmodules\Tasklist\Controller\tasks;
class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();

        $contactModel = $this->_objectManager->create('Testmodules\Tasklist\Model\Tasklist');
        $collection = $contactModel->getCollection();
        echo 'Список задач';
        echo "<td><p><a href=\"/tasklist/tasks/newtask\">Добавить задачу</a></p></td>";
        echo '<table border="1">';
        echo '<tr>
                 <th>id</th>
                 <th>Задача</th>
                 <th>Действия</th>
              </tr>';
        foreach ($collection as $contact) {
            echo '<tr>';
            $data = $contact->getData();
            $id = $data['ID'];
            $task = $data['task'];
            echo "<td>$id</td>";
            echo "<td>$task</td>";
            echo "<td><p><a href=\"/tasklist/tasks/delete?id=$id\">Удалить</a></p></td>";
            echo '</tr>';
        }
        echo '</table>';


        //die('test');


        /*$contactModel = $this->_objectManager->create('Testmodules\Tasklist\Model\Tasklist');
        $collection = $contactModel->getCollection();
        foreach ($collection as $contact) {
            var_dump($contact->getData());
        }

        $this->_view->renderLayout();*/
    }
}
