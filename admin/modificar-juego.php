<?php 

$connection = mysqli_connect('localhost', 'id9305132_admin', 'admin123');
mysqli_select_db($connection, id9305132_gompartfg);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
else {
    if (isset($_POST["nombre"])) {
    
                $id = $_POST["id_juego"];
                $nombre = $_POST["nombre"];
                $descripcion = $_POST["descripcion"];
                
                $query= "select * from juegos where nombre_juego ='$nombre'";
                if ($result = $connection->query($query)) {
                    if ($result -> num_rows==1) {
                        echo "EL NOMBRE YA ESXISTE";
                    } else {
                         $query = "UPDATE `juegos` SET `nombre_juego`= '$nombre', `descripcion`= '$descripcion' where id_juego = '$id' ";
                         echo $query;
                        if ($connection->query($query)) {
                              $url = "administrar-juegos";
     header("Location: $url");
     die();
                        } else {
                                    echo "ERROR AL REGISTRAR. <br>";
                          }
                        }
                    }
                }
    } 
    
            ?>