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
    <link rel="stylesheet" href="forum.css">
    <script src='forum.js' defer='true'></script>
    <title>Forum</title>
</head>
<body>
    <header>
    <div id='utente'>FeatherFull
            <div>Utente: <?php 
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
            <a href="search_sing.php"> Canto</a>
            <a href="specie.php"> Specie</a>
            <a href='logout.php'>Logout</a>
            <a href='profile.php'> Profilo</a>
        </div>
    </nav>
    </header>
    <div id='contenuto'>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "hw1") or die(mysqli_error($conn));
            $query="SELECT* FROM POST";
            $res=mysqli_query($conn, $query);
            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_assoc($res)){
                    $query1="SELECT* FROM USERS WHERE username='".$row['username']."'";
                    $ris=mysqli_query($conn, $query1);
                    $utente=mysqli_fetch_assoc($ris);
                    if(empty($utente["immagine_profilo"])){
                        echo"<section class='post'>
                        <img src='https://png.pngtree.com/png-vector/20191009/ourlarge/pngtree-user-icon-png-image_1796659.jpg'>
                        <h3>".$row["username"]."</h3>
                        <p>".$row["commento"]."</p>
                        </section>";
                    }
                    else{
                        echo"<section class='post'>
                        <img src=".substr_replace($utente["immagine_profilo"], "", 0, 19).">
                        <h3> ".$row["username"]."</h3>
                        <p>".$row["commento"]."</p>
                        </section>";
                    }
                }
            }
            mysqli_close($conn); 
        ?>
        <section id='risultato'></section>
        <section id="inserimento">
            <form method="POST"  name="carica_post">
                <label>Scrivi qui per fare un post:<br>
                <input type="text" name="testo" id="commento" placeholder="Inserisci qui il testo del tuo post"><br>
                <button type="submit" id="posta"> Posta </button>
                </label>
            </form>
        </section>
    </div>
    <footer>@FeatherFull (Irene Bevacqua 1000016641)</footer>
</body>
</html>