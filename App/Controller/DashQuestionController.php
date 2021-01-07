<?php 

    namespace App\Controller;
    use App\Model\DashQuestionModel;

    class DashQuestionController {

        public function __construct()
        {
            $this->model = new DashQuestionModel();
        }
    

        public function DashQuestionRender() 
        {
            $this->model->ajtQuestion();
            require ROOT."/App/View/DashQuestionView.php";
        }

    }