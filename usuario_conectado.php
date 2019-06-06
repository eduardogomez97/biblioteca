<?php 
 session_start();
 
$connection = mysqli_connect('localhost', 'id9305132_admin', 'admin123');
mysqli_select_db($connection, id9305132_gompartfg);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
else { 
if (isset($_POST["username"])) {

                            $consulta="select * from usuarios where username='".$_POST["username"]."' and password='".md5($_POST["password"])."'";
                            if ($result = $connection->query($consulta)) {
                            if ($result->num_rows===0) {
                                echo "<center><p class='mensaje_error'>Usuario o contraseña invalidos.</p></center>";
                            } else {
                                $_SESSION["username"]=$_POST["username"];
     $url = "inicio";
     header("Location: $url");
     die();
                                }
                        }       
                            else {
                            echo "Wrong Query";
                        }
                    } }?>    