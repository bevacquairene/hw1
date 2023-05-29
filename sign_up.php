<?php
    if(isset($_POST["name"])&&isset($_POST["surname"])&&isset($_POST["email"])&&isset($_POST["username"])
        &&isset($_POST["password"])){
            $conn = mysqli_connect("localhost", "root", "", "hw1") or die(mysqli_error($conn));
            $error=array();
        //verifica delle credenziali scritte
        //verifico l'username
            $pattern='/^[a-zA-Z0-9_]{5,10}$/';
        if(preg_match($pattern, $_POST["username"])){
            $username= mysqli_real_escape_string($conn, $_POST['username']);
            $query="SELECT * FROM USERS WHERE username = '".$username."'";
            $res=mysqli_query($conn, $query) or die(mysqli_error($conn));
            $righe=mysqli_num_rows($res);
            if($righe>0){
                $error[]="Username già usato";
            }
        }
        else{
            $error[]="Formato dell'username non corretto oppure troppo corto o lungo";
        }
        //verfico la password
        if(strlen($_POST["password"])<7){
            $error[]="Password troppo corta";
        }
        //verifico la mail
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $error[]='E-mail non valida';
        }
        $query0="SELECT * FROM USERS WHERE email='".$_POST['email']."'";
        $res=mysqli_query($conn, $query0);
        if(mysqli_num_rows($res)>0){
            $error[]="E-mail già utilizzata";
        }
        //registrazione nel database
        if(count($error)==0){
            $name=mysqli_real_escape_string($conn, $_POST['name']);
            $surname=mysqli_real_escape_string($conn, $_POST['surname']);
            $username=mysqli_real_escape_string($conn, $_POST['username']);
            $password=mysqli_real_escape_string($conn, $_POST['password']);
            $email=mysqli_real_escape_string($conn, $_POST['email']);
            $query1="INSERT INTO USERS(username, password, email, name, surname) VALUES('$username', '$password', '$email', '$name', '$surname')";
            if(mysqli_query($conn, $query1)){
                session_start();
                $_SESSION["username"]=$_POST["username"];
                header("Location: home.php");
                mysqli_close($conn);
                exit;
            }
            else{
                $error[]='Errore di connessione al database';
            }
        }
        mysqli_free_result($res);
        mysqli_close($conn);
    }
    else{
        $error[]="Non hai inserito tutti i campi";
    }

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="sign_up.css">

    </head>
    <body>
    <form id="signup" name="signup" method="post">
            <img id="parrot" src='https://cdn-icons-png.flaticon.com/512/1903/1903135.png'>
            <h1> Registrati a FeatherFull</h1>
            <?php
                // Verifica la presenza di errori
            if (isset($error)) {
                foreach($error as $err){
                    echo "<p class='error'>$err</p>";
                }
            }
                
            ?>
            <label>Nome: <br><input type='text' name="name"> </label>
            <label>Cognome: <br><input type='text' name="surname"> </label>
            <label>E-mail: <br><input type='text' name="email"> </label>
            <label>Username: <br><input type='text' name="username"> </label>
            <label>Password: <br><input type='password' name="password"> </label>
            <input id='button' type="submit" name='registro' value="Registrati">
            <p>Hai già un account?<br><br> <a href='login.php'>Accedi qui!</a></p>
        </form>
    </body>
</html>
   