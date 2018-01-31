<?php

class ReviewController extends ControllerBase
{

    public function indexAction()
    {
        $subject = Subject::find();
        $this->view->subject = $subject;

        // $detail = Review::Find(
        //     [
        //         "SubjectID = '" . $idsubject . "'"  
        //     ]
        // );

        // $this->view->comment = $detail;
    }

    public function addCommentAction()
    {
        // $idUser = $this->request->getPost('idUser');
        $comment = $this->request->getPost('comment');
        // $idSubject = $this->request->getPost('idSubject');
        $Newreview = new Review();
        $Newreview->reviewID = 111;
        $Newreview->ReviewerName =1;
        $Newreview->Description= $comment;
        $Newreview->SubjectID =1;
        if(!$Newreview->save()){
            foreach($Newreview->getMessages() as $message){
                echo $message;
            }
        }
        
        
    }

}

