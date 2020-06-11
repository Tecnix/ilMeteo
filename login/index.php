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
    $connessione=new mysqli("eu-cdbr-west-03.cleardb.net:3306", "ba609c39ced810", "c59b6be7", "heroku_06276f2ed7f0076");
    $sql="SELECT * FROM users WHERE email='$email'";
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
    $connesione->close();
?>