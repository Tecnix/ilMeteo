<?php
    session_start();
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(!$email){
        echo "Inserisci una mail";
        echo "<br><a href='../login/index.html'>Indietro</a>";
    }
    if(!$password){
        echo "Inserisci una password";
        echo "<br><a href='../login/index.html'>Indietro</a>";
    }
    $connessione=new mysqli("eu-cdbr-west-03.cleardb.net:3306", "ba55e2c3290522", "ecffbea9", "heroku_5c48b4796fa9303");
    $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result=$connessione->query($sql);
    if($result->num_rows>0){
        $row=mysqli_fetch_assoc($result);
        $_session["email"]=$email;
        ob_start();
        header('location: \current_weather\index.php');
        ob_end_flush();
        exit;
    }else{
        session_destroy();
        echo "Email o password errata";
        echo "<br><a href='../login/index.html'>Indietro</a>";
    }
    //$connesione->close();
?>