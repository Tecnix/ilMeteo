<html>
    <head>
        <title>Registrazione</title>
    </head>
    <body>
        <div id="container">   
            <?php
                $nome=$_POST['nome'];
                $cognome=$_POST['cognome'];
                $password=$_POST['password'];
                $pass2=$_POST['pass2'];
                $email=$_POST['email'];
                    if($nome=="" || $cognome=="" || $pass1="" || $pass2=="" || $email==""){
                        echo"Devi compilare tutti i Campi";
                    }else if($password!=$pass2){
                        echo"Le password devono coincidere<br>";
                        echo "<a href='../register/index.html'>Indietro</a>";
                    }else{
                        $connessione=new mysqli("eu-cdbr-west-03.cleardb.net:3306", "ba55e2c3290522", "ecffbea9", "heroku_5c48b4796fa9303");
                        $sql="SELECT * FROM users WHERE email='$email'";
                        $result=$connessione->query($sql);
                        if (isset($result->num_rows) && $result->num_rows >0){
                            echo"Utente gia registrato<br>";
                            echo "<a href='../register/index.html'>Indietro</a>";
                        }else{
                            $sql="INSERT INTO users(nome, cognome, password, email) VALUES ('$nome', '$cognome', '$password', '$email')";
                            $result=$connessione->query($sql);
                            echo"Utente registrato correttamente<br>";
                            echo "<a href='../login/index.html'>Indietro</a><br>";
                        }
                    }
            ?>
        </div>
    </body>
</html>