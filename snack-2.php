<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
    if(empty($_GET["name"]) || empty($_GET["mail"]) || empty($_GET["age"])) {
        echo "Mancano dati";
        die; // Interrompe il programma
    }
    
    if (strlen($_GET["name"]) > 3 && strpos($_GET["mail"], ".") && 
        strpos($_GET["mail"], "@") && is_numeric($_GET["age"])){
        
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }

    // if (strlen($_GET["name"]) < 4){
    //     echo "Accesso negato";
    // } elseif (!strpos($_GET["mail"], ".")){
    //     echo "Accesso negato";
    // } elseif (!strpos($_GET["mail"], "@")) {
    //     echo "Accesso negato";
    // } elseif (!is_numeric($_GET["age"])){
    //     echo "Accesso negato";
    // } else {
    //     echo "Accesso riuscito";
    // };
?>