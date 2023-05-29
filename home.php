<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">
</head>
<body>
    <header>
    <div id='utente'>FeatherFull  
    <?php
        if(isset($_SESSION["username"])){
            $username=$_SESSION["username"];
        echo "<div>Benvenuto $username   ";
        if(isset($_SESSION["immagine_profilo"])){
            $file_nome=substr_replace($_SESSION["immagine_profilo"], "", 0, 19);
            echo"<img src=" . $file_nome . ">";
        }
        if(!isset($_SESSION["immagine_profilo"])){
            echo"<img src='https://png.pngtree.com/png-vector/20191009/ourlarge/pngtree-user-icon-png-image_1796659.jpg'>";
        }
        echo"</div>";
        }?>
    </div>
        <nav>
            <div>
            <a href="search_sing.php"> Canto</a> 
            <a href="forum.php"> Forum</a>
            <a href='specie.php'>Specie</a>
            <?php
                if(!isset($_SESSION["username"])){
                    echo"<a href='login.php'> Login</a>
                    <a href='sign_up.php'> Sign up</a>";
                }
                else{
                    echo"<a href='logout.php'>Logout</a>
                    <a href='profile.php'> Profilo</a>";
                }
            ?>
            </div>
        </nav>
        <h1>FeatherFull:<br>Un mondo di pappagalli</h1>
     </header>
     <section class="section0">
        <div class="circle" id="circle1">
            <section>
            <h2>Benvenuti nel sito web dedicato ai pappagalli</h2>
                    <p>Benvenuti nel sito web definitivo per i proprietari di pappagalli. 
                        Qui troverete informazioni sulle diverse specie di pappagalli, sulla cura dei pappagalli e
                        sull'addestramento dei pappagalli.</p>
            </section>
        </div>
       <img id="parrot1"src="https://static.vecteezy.com/system/resources/previews/020/952/484/non_2x/parrot-on-the-branch-free-png.png">
    </section> 
    <section class="section0">
       <div class="circle">
            <section>
                <h2>Specie di pappagalli(canto)</h2>
                <p>In questa sezione, scoprirete il canto delle diverse specie di pappagalli, dalle specie più comuni come i pappagalli australiani, 
                    ai pappagalli meno conosciuti come i pappagalli della Nuova Zelanda.</p>
                <a href="search_sing.php"id="canto">Scopri</a>
            </section>
        </div>
        <img id="parrot2"src="https://www.freepnglogos.com/uploads/parrot-png/parrot-png-transparent-parrot-images-pluspng-1.png">
    </section>
    <div id="forum">
        <section>
            <h2> Scopri il nostro forum!</h2>
            <p>Qui potrai confrontarti con altri appassionati di pappagalli e comunicare con loro.
            </p>
            <a href="forum.php"> Scopri ora!</a>
        </section>
    </div>
    <footer>@FeatherFull (Irene Bevacqua 1000016641)</footer>
</body>
</html>