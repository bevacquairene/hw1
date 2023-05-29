<?php
if(isset($_POST["username"])&&isset($_POST["password"])){
    $conn = mysqli_connect("localhost", "root", "", "hw1") or die(mysqli_error($conn));
    $username= mysqli_real_escape_string($conn, $_POST['username']);
    $password= mysqli_real_escape_string($conn, $_POST['password']);
    $query="SELECT * FROM USERS WHERE username = '".$username."' AND password='".$password."'";
    $res=mysqli_query($conn, $query) or die(mysqli_error($conn));
    $righe=mysqli_num_rows($res); //conta il numero di righe del risultato
    if($righe>0){
        $row=mysqli_fetch_assoc($res);//mi restituisce un array di righe, ma se ho un solo user è inutile iterarlo
        session_start();
        $_SESSION["username"]=$row["username"];
        $_SESSION["immagine_profilo"]=$row["immagine_profilo"];
        header("Location: home.php");
        mysqli_free_result($res);
        mysqli_close($conn);
        exit;
        
    }
    else{
        $error="Utente non trovato";
    }
}
else if(!isset($_POST["username"])&&isset($_POST["password"])){
    $error="Inserisci l'username";

}
else if(isset($_POST["username"])&&!isset($_POST["password"])){
    $error="Inserisci la password";
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <form id="login" name="login" method="post">
            <img id="parrot" src='https://cdn-icons-png.flaticon.com/512/1903/1903135.png'><h1> Accedi a FeatherFull </h1>
            <?php
                // Verifica la presenza di errori
        if (isset($error)) {
             echo "<p class='error'>$error</p>";
            }
                
            ?>
            <label>Username: <br><input type='text' name="username"> </label>
            <label>Password: <br><input type='password' name="password"> </label>
            <input id='button' type="submit" name='Accesso' value="Accedi">
            <p>Non hai ancora un account?<br><br> <a href='sign_up.php'>Registrati qui!</a></p>
        </form>
    </body>
</html>