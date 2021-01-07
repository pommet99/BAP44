<?php 

    namespace App\Controller;
    use App\Model\ContactModel;

    class ContactController {

        public function __construct()
        {
            $this->model = new ContactModel();
        }

        public function ContactRender() 
        {
            $this->model->addContactRequest();
            require ROOT."/App/View/ContactView.php";
        }

    }