<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuarios = $_POST['usuarios'];
    $senha = $_POST['senha'];

    include "conexao.php";

    $sql = "SELECT * FROM usuarios
            WHERE usuario = '$usuarios'
            AND senha = '$senha'";

   $resultado = mysqli_query($con, $sql);

   if(mysqli_num_rows($resultado) > 0){
    echo "Liberado!";
    header('location: inicio.html');
   } 
   
   else {
    echo "Usuario ou senha incorretos";
    echo "<a href='index.html'>Voltar</a>";
  
}

}
