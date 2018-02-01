<?php

class ReviewController extends ControllerBase
{

    public function indexAction($subjectID)
    {
        $subject = Subject::FindFirst(
                [
                    "SubjectID ='".$subjectID."'"
                ]
            );
        $this->view->comment = $subject;

        $detail = Review::Find(
            [
                "SubjectID ='".$subjectID."'"
            ]
        );

        $this->view->detail = $detail;

        $user = Users::FindFirst(
            [
                "iduser = 1"
            ]
        );
    $this->view->user = $user;
    }

    public function addCommentAction()
    {
        // $idUser = $this->request->getPost('idUser');
        $comment = $this->request->getPost('comment');
        // $idSubject = $this->request->getPost('idSubject');
        $Newreview = new Review();
        $Newreview->ReviewerName ="Godnaja";
        $Newreview->Description = $comment;
        $Newreview->SubjectID =1001;
        if(!$Newreview->save()){
            foreach($Newreview->getMessages() as $message){
                echo $message;
            }
        }

        $users = Users::FindFirst(
            [
                "username = 'Godnaja'"
            ]
        );

        $point = $users->point;
        $users->point = $point+5;
        $users->save();
        return $this->response->redirect("review/index");
        
    }
    public function examAction($subjectID)
    {
       
    }

}

