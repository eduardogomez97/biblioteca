<?php 

$connection = mysqli_connect('localhost', 'id9305132_admin', 'admin123');
mysqli_select_db($connection, id9305132_gompartfg);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
else {
    if (isset($_POST["nombre"])) {
    
                
                $nombre = $_POST["nombre"];
                $ruta = "/biblioteca/".$nombre."/";
                $descripcion = $_POST["descripcion"];
                $nimagen = $_POST["imagen"];
                
                $query= "select * from juegos where nombre_juego ='$nombre'";
                if ($result = $connection->query($query)) {
                    if ($result -> num_rows==1) {
                        echo "EL NOMBRE YA ESXISTE";
                    } else {
                         $query = "INSERT INTO juegos (nombre_juego,descripcion,ruta,img,visible)
                         VALUES ('$nombre','$descripcion','$ruta','$nimagen','1')";
                        if ($connection->query($query)) {
                              $url = "juegos";
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