<?php 
session_start();
$connection = mysqli_connect('localhost', 'id9305132_admin', 'admin123');
mysqli_select_db($connection, id9305132_gompartfg);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
else {
 if (isset($_POST["username"])) {

                $username = $_POST["username"];
                $password = $_POST["password"];
                $nombre = $_POST["nombre"];
                $apellidos = $_POST["apellidos"];
 
  $query= "select * from usuarios where username ='$username'";
                if ($result = $connection->query($query)) {
                    if ($result -> num_rows==1) {
                        echo "EL USUARIO YA EXISTE";

                    } else {

                         $query = "INSERT INTO usuarios (username,password,nombre,apellido)
                         VALUES ('$username',md5('$password'),'$nombre','$apellidos')";

                        if ($connection->query($query)) {
                              $_SESSION["username"]=$_POST["username"];
     $url = "inicio";
     header("Location: $url");
     die();

                        } else {
                                    echo "ERROR AL REGISTRARTE. <br>";
                          }
                        }
                    }
}
}



?>