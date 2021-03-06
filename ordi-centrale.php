<!DOCTYPE html>
<html>

<head>
  <title>Escape</title>
  <meta charset="UTF-8" />
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->  <!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/ordi-centrale.css">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
</head>

<body>
<div id="barrenoire">Ordinateur de Julie Bruant</div>
<div id="container">
      <header>
        
        <a id="logo" href="" title="Centrale Marseille"><img src="images/centrale.png"></a>
        <h1>Centrale Authentication Service (CAS)</h1>
      </header>
      <div id="content">




<div class="box" id="login">
  <form id="fm1" action="login.php" method="post" autocomplete="off">

    <?php 
    if (isset($_GET["error"])) {
    
        echo "<div id=\"msg\" class=\"errors\" style=\"
                                  background-color: rgb(255, 238, 221);
                                  border: 1px dotted #BB0000;
                                  color: #BB0000;
                                  padding: 5px;\">
                Mauvais identifiant / mot de passe.
              </div>";
    }


    ?>

    <h2>Entrez votre mail et votre mot de passe.</h2>
    
    <input type="hidden" name="URL" value="ordi-centrale.php" readonly />

    <section class="row">
      <label for="email">Mail:</label>
          
          <input id="username" name="email" class="required" tabindex="1" accesskey="i" type="text" value="" size="25" autocomplete="off">
    </section>
    
    <section class="row">
      <label for="password"><span class="accesskey">M</span>ot de passe:</label>
      
      
      <input id="password" name="MotDePasse" class="required" tabindex="2" accesskey="m" type="password" value="" size="25" autocomplete="off">
      <span id="capslock-on" style="display:none;"><p><img src="images/warning.png" valign="top"> La touche Verrouillage Majuscule est activée !</p></span>
    </section>
    
    <section class="row check">
      <input id="warn" name="warn" value="true" tabindex="3" accesskey="p" type="checkbox">
      <label for="warn"><span class="accesskey">P</span>révenez-moi avant d'accéder à d'autres services.</label>
    </section>
    
    <section class="row btn-row">

      <input class="btn-submit" name="submit" accesskey="l" value="SE CONNECTER" tabindex="4" type="submit">
      <input class="btn-reset" name="reset" accesskey="c" value="EFFACER" tabindex="5" type="reset">
    </section>
  </form>
</div>
  

      
      <footer>

      </footer>

    </div>

    <script type="text/javascript" src="js/scripte-banale.js" ></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
