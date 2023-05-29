<?php
     session_start();
     if(!isset($_SESSION["username"])){
         header("Location: login.php");
         exit;
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="search_sing.css">
    <script src="search_sing.js" defer="true"></script>
    <title>Cerca canto</title>
</head>
<body>
    <header>
    <div id='utente'>FeatherFull
            <div>Utente:<?php 
            echo $_SESSION["username"];
            if(isset($_SESSION["immagine_profilo"])){
                $file_nome=substr_replace($_SESSION["immagine_profilo"], "", 0, 19);
                echo"<img src=" . $file_nome . ">";
            }
            if(!isset($_SESSION["immagine_profilo"])){
                echo"<img src='https://png.pngtree.com/png-vector/20191009/ourlarge/pngtree-user-icon-png-image_1796659.jpg'>";
            }
            ?> 
            </div>
    </div>
    <nav>
        <div>
            <a href="home.php"> Home</a> 
            <a href="forum.php"> Forum</a>
            <a href='specie.php'>Specie</a>
            <a href='logout.php'>Logout</a>
            <a href='profile.php'> Profilo</a>
        </div>
    </nav>
    </header>
    <form name='search_content' id='search_content'>
        <h1>Cerca qui la specie che vuoi ascoltare:</h1>
        <h3>Esempio: 'Melopsittacus Undulatus'</h3>
        <label>Cerca: <input type='text' name='content' id='content'> </label>
        <input class="submit" type='submit'>
        <div><img id='parrot' src='https://images8.alphacoders.com/875/875790.jpg'></div>
    </form>
    <article id="contenuto"><article class="hidden">Potrebbe volerci qualche istante...</article></article>
    <footer>@FeatherFull (Irene Bevacqua 1000016641)</footer>
</body>
</html>