<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $subject = Subject::find();
        $this->view->subject = $subject;
    }


}

