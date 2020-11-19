<?php
if(isset($_POST["URL"]) AND isset($_POST["MotDePasse"])){
    $url = $_POST['URL'];
    $mdp = $_POST['MotDePasse'];
/*
    if ($url == "pageTestLogin"){
        if ($mdp == "oui"){
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), "/\\");
            $extra = 'ordi.html';
            header("Location: http://$host$uri/$extra");
            exit();
        }else{
            echo "Mauvais mot de passe";
        }
    }
}
*/
    if ($url == "lockscreen.php"){
        if ($mdp == "23/11/1998"){
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), "/\\");
            $extra = 'smartphone.php';
            header("Location: http://$host$uri/$extra");
            exit();
        }else{
            echo "Mauvais mot de passe";
        }
    }
}
else{
    echo "Envoyez moi un truc valable non d'un chien.";
}
?>