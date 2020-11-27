<?php
if(isset($_POST["URL"]) AND isset($_POST["MotDePasse"]) AND !isset($_POST["email"])){
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
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), "/\\");
            header("Location: http://$host$uri/$url");
            exit();
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
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), "/\\");
            header("Location: http://$host$uri/$url");
            exit();
        }
    }
    if ($url == "ordi-unlock.php"){
        if ($mdp == "List'&Love"){
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), "/\\");
            $extra = 'final.php';
            header("Location: http://$host$uri/$extra");
            exit();
        }else{
            echo "Mauvais mot de passe";
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), "/\\");
            header("Location: http://$host$uri/$url");
            exit();
        }
    }
    if ($url == "final.php"){
        if ($mdp == "1906"){
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), "/\\");
            $extra = 'final2.php';
            header("Location: http://$host$uri/$extra");
            exit();
        }else{
            echo "Mauvais mot de passe";
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), "/\\");
            header("Location: http://$host$uri/$url");
            exit();
        }
    }
}else{
    if(isset($_POST["URL"]) AND isset($_POST["MotDePasse"]) AND isset($_POST["email"])){
    $url = $_POST['URL'];
    $mdp = $_POST['MotDePasse'];
    $email = $_POST["email"];
    if ($url == "ordi-centrale.php"){
        if ($email == "julie.bruant@centrale-marseille.fr" AND $mdp == "ELLIPSIS"){
                echo "Bonne combinaison.";
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELF']), "/\\");
                $extra = 'ordi-unlock.php';
                header("Location: http://$host$uri/$extra");
                exit();
        }else{
                echo "Mauvais mot de passe";
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELF']), "/\\");
                $extra = '?error';
                header("Location: http://$host$uri/$URL$extra");
                exit();
        }
    }
    if ($url == "final2.php"){
        if ($email == "mads.mikkelsen" AND $mdp == "vesper"){
                echo "Bonne combinaison.";
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELF']), "/\\");
                $extra = 'final3.php';
                header("Location: http://$host$uri/$extra");
                exit();
        }else{
                echo "Mauvais mot de passe";
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELF']), "/\\");
                $extra = '?error';
                header("Location: http://$host$uri/$URL$extra");
                exit();
        }
    }
}
else{
    echo "Envoyez moi un truc valable non d'un chien.";
}
}
?>