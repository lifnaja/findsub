<?php

class ReviewController extends ControllerBase
{

    public function indexAction($idsubject)
    {
        $subject = Subject::find();
        $this->view->subject = $subject;

        $detail = Review::Find(
            [
                "SubjectID = '" . $idsubject . "'"  
            ]
        );

        $this->view->comment = $detail;
    }

}

