<?php
// Creare una variabile con un paragrafo di testo a vostra scelta.

$text = "Digita Password";
$pass = $_GET["pass"];

?>

<h1>
    <?php 
    echo $text
     ?>
</h1>

<h1>
    <?php 
    echo $pass
     ?>
</h1>

<h1>
    lunghezza di 
    <?php 
    echo strlen($pass) 
    ?>
</h1>

<h1>
    <?php 
    echo $text;
    ?>
</h1>

<h1>
    <?php 
    echo str_replace($_GET["pass"],"****",$pass);
    ?>
</h1>

<h1>
    lunghezza di 
    <?php 
    echo strlen($pass) 
    ?>
</h1>


<!-- Una parola da censurare viene passata dall'utente tramite parametro GET. -->