<?php

class IndexController extends ControllerBase
{

    public function indexAction($idsubject)
    {
        $subject = Subject::find();
        $this->view->subject = $subject;

    }


}

