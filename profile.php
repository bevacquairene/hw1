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
    <link rel="stylesheet" href="profile.css"> 
    <script src='profile.js' defer='true'></script>
    <title>Profile</title>
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
            <a href='specie.php'> Specie</a>
            <a href="forum.php"> Forum</a>
            <a href='logout.php'>Logout</a>
        </div>
    </nav>
    </header>
        <?php
            if(isset($_FILES["immagine"])){
                $file_percorso = "/xampp/htdocs/MHW1/"; // Percorso di destinazione dell'immagine
                $file_nome = $_FILES["immagine"]["name"];
        
                // Verifica se l'immagine è stata caricata correttamente
                if (move_uploaded_file($_FILES["immagine"]["tmp_name"], $file_percorso.$file_nome)){
                    $username=$_SESSION["username"];
                    $conn = mysqli_connect("localhost", "root", "", "hw1") or die(mysqli_error($conn));
                    $percorsoImmagine =mysqli_real_escape_string($conn,$file_percorso.$file_nome);
                    $query = "UPDATE USERS SET immagine_profilo = '$percorsoImmagine' WHERE username = '".$username."'";
                    mysqli_query($conn, $query);
                    $_SESSION["immagine_profilo"]=$percorsoImmagine;
                    mysqli_close($conn);
                } else {
                    echo "Si è verificato un errore durante il caricamento dell'immagine.";
                }
            }
            if(isset($_SESSION["immagine_profilo"])){
                $file_nome=substr_replace($_SESSION["immagine_profilo"], "", 0, 19);
                echo"<div id='profilo'><img src=" . $file_nome . "></div>";
            }
            if(!isset($_SESSION["immagine_profilo"])){
                echo"<div id='profilo'><img src='https://png.pngtree.com/png-vector/20191009/ourlarge/pngtree-user-icon-png-image_1796659.jpg'></div>";
            }
            ?>
    <section id='contenuto'>    
        <section id="info">
            <?php
                $username=$_SESSION["username"];
                $conn = mysqli_connect("localhost", "root", "", "hw1") or die(mysqli_error($conn));
                $query="SELECT * FROM USERS WHERE username = '".$username."'";
                $res=mysqli_query($conn, $query) or die(mysqli_error($conn));
                $righe=mysqli_num_rows($res);
                if($righe>0){
                    $row=mysqli_fetch_assoc($res);
                    echo"<p>Informazioni utente: <br><br>
                    Nome: ".$row["name"]."<br>
                    Cognome: ".$row["surname"]."<br>
                    Username: ".$row["username"]."
                    </p>";
                    mysqli_free_result($res);
                    mysqli_close($conn);
                }
            ?>
        </section>
        <section id='preferiti'>
            Galleria dei pappagalli preferiti:
            <?php
                $username=$_SESSION["username"];
                $conn = mysqli_connect("localhost", "root", "", "hw1") or die(mysqli_error($conn));
                $query="SELECT * FROM PREFERITI WHERE username = '".$username."'";
                $res=mysqli_query($conn, $query) or die(mysqli_error($conn));
                $righe=mysqli_num_rows($res);
                if($righe>0){
                    echo "<div>";
                    while($row=mysqli_fetch_assoc($res)){
                        echo "<section class='preferiti'><img class='img_preferito' src=".$row["foto"].">
                        <img class='stella'src='https://cdn.icon-icons.com/icons2/1077/PNG/512/star_77949.png'>
                        </section>";
                    }
                    echo"</div>";
                }
                else{
                    echo "<div> Ancora nessun pappagallo preferito </div>";
                }
                mysqli_free_result($res);
                mysqli_close($conn);

            ?>
        </section>
    </section>
    <form method='POST' enctype='multipart/form-data' name='carica_foto'>
            <label>Inserisci oppure modifica l'immagine del profilo
            <input type='file' name='immagine' id='scegli'>
            <input type='submit' value='Carica' id='carica'>
            </label>
    </form>
    <footer>@FeatherFull (Irene Bevacqua 1000016641)</footer>
</body>
</html>