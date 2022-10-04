<?php
    $errors =array();

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(!isset($_POST['userFirstname']) || trim($_POST['userFirstname']) === '') 
            $errors[] = "Prénom obligatoire";
        if(!isset($_POST['userLastname']) || trim($_POST['userLastname']) === '') 
            $errors[] = "Nom obligatoire";
        if(!isset($_POST['userMail']) || trim($_POST['userMail']) === '' || !filter_var($_POST['userMail'], FILTER_VALIDATE_EMAIL)) 
            $errors[] = "Adresse mail obligatoire dans un format correct";
        if(!isset($_POST['userPhone']) || trim($_POST['userPhone']) === '') 
            $errors[] = "Téléphone obligatoire dans un format correct";
        if(!isset($_POST['userMessage']) || trim($_POST['userMessage']) === '') 
            $errors[] = "Message obligatoire";
    }

    if(empty($errors)) {
        echo "Merci " . $_POST['userFirstname'] . " " . $_POST['userLastname'] . " de nous avoir contacté à propos du thème '" . $_POST['userSubject'] . "'. <br>
                Un de nos conseillers vous contactera soit à l’adresse " . $_POST['userMail'] . " ou <br>par téléphone au " . $_POST['userPhone'] . " dans les plus
                brefs délais pour traiter <br>votre demande : <br> <br>" . $_POST['userMessage'];
    }else{
        echo "Attention : <br><br>";
        foreach($errors as $err){
            echo $err . "<br>";
        }
    }            

?>
