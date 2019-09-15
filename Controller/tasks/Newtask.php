<?php

namespace Testmodules\Tasklist\Controller\tasks;
class Newtask extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();

        echo '<form action="/tasklist/tasks/add">
  <p><b>Добавить задачу</b></p>
  <p><input type="text" name="task" value=""></p>
  <p><input type="submit"></p>
 </form>';

    }
}
