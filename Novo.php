<?php 
 
 if(isset($_POST['senha'])){
        include_once('config.php');

        $Usuario = $_POST['Usuario'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $CPF = $_POST['CPF'];
        $Email = $_POST['Email'];
      


       
            $result = mysqli_query($conexao, "INSERT INTO cadrasto(Usuario, senha, telefone, CPF, Email)VALUES ('$Usuario', '$senha', '$telefone', '$CPF', '$Email')");
            header("Location: http://localhost/login.php");
           
    }




?>
