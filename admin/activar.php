<?php 
        $connection = mysqli_connect('localhost', 'id9305132_admin', 'admin123');
mysqli_select_db($connection, id9305132_gompartfg);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} else {
      
        $id = $_GET['id_juego'];
       
        $query="UPDATE juegos SET visible = 1 WHERE id_juego = ".$id;
       
      
      
        if ($result = $connection->query($query)) {
            
            $url = "administrar-juegos";
     header("Location: $url");
     die();
            
        } else {
            
            echo "ERROR AL MODIFICAR";
        }
}