<?php 
    use App\Controller\ConnexionController;
    use App\Controller\AccueilController;
    use App\Controller\ContactController;
    use App\Controller\FaqController;
    use App\Controller\DashArticleController;
    use App\Controller\DashQuestionController;
    use App\Controller\DashContactController;
    use App\Controller\UneDemandeController;


    if(array_key_exists("page",$_GET))
    {
        switch ($_GET["page"]) :

            case 'connexion'  :
                $controller = new ConnexionController();
                $controller->ConnexionRender();
            break; 
            case 'accueil' :
                $controller = new AccueilController();
                $controller->AccueilRender();
            break;
            case 'contact' :
                $controller = new ContactController();
                $controller->ContactRender();
            break;
            case 'faq' :
                $controller = new FaqController();
                $controller->FaqRender();
            break;
            default:
                $controller = new ConnexionController();
                $controller->ConnexionRender();
            endswitch;
    } 
    else if (array_key_exists("ad",$_GET))
    {
        switch ($_GET["ad"]) :
            case 'article' :
                $controller = new DashArticleController();
                $controller->DashArticleRender();
            break;
            case 'question' :
                $controller = new DashQuestionController();
                $controller->DashQuestionRender();
            break;
            case 'demande' :
                $controller = new UneDemandeController();
                $controller->demandeRender();
            break;
            case 'ctct' :
                $controller = new DashContactController();
                $controller->DashContactRender();
            endswitch;
    }
    else 
    {
            $controller = new  ConnexionController();
            $controller->ConnexionRender();
    }