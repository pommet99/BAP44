<?php 

    namespace App\Controller;
    use App\Model\UneDemandeModel;

    class UneDemandeController 
    {

        public function __construct()
        {
            $this->model = new UneDemandeModel();
        }

        public function demandeRender() 
        {
            $demandes = $this->model->recupDmd();
            require ROOT."/App/View/UneDemandeView.php";
        }

    }