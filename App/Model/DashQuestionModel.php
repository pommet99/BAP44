<?php

    namespace App\Model;
    use Core\Database;

    class DashQuestionModel extends Database {

        public function ajtQuestion()
        {
            if (isset($_POST['valid_qr']))
            {
                $question = $_POST['titreQuestion'];
                $reponse = $_POST['contenuQuestion'];
                if (empty($question) || empty($reponse))
                {
                    header('location:?ad=question&champs-vides');
                }
                else
                {
                    $query = $this->pdo->prepare("INSERT INTO fcpe_qr(qr_question, qr_reponse) VALUES (?,?)");
                    $query->execute(array($question,$reponse));
                    header('location:?ad=question&reussite');
                }
            } 
        }
    }