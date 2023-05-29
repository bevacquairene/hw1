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
    <link rel='stylesheet' href='specie.css'>
    <script src='specie.js' defer='true'> </script>
    <title>Specie</title>
</head>
<body>
<header>
    <div id='utente'>FeatherFull
            <div>Utente: 
            <?php 
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
            <a href='search_sing.php'> Canto</a>
            <a href="forum.php"> Forum</a>
            <a href='logout.php'>Logout</a>
            <a href='profile.php'> Profilo</a>
        </div>
    </nav>
    </header>
    <div class="container">
    <h2>Inserisci qui la specie che stai cercando</h2>
    <form id='pappagallo' name='cerca'>
      <div class="form-group">
        <label for="name">Specie (es: "aratinga solstitialis"):</label>
        <input type="text" id="name" name="name" placeholder="Inserisci qui il nome della specie">
      </div>
      <div class="form-group">
        <button type="submit">Cerca</button>
      </div>
    </form>
  </div>
    <section id='contenuto'></section>
    <footer>@FeatherFull (Irene Bevacqua 1000016641)</footer>
</body>
</html>