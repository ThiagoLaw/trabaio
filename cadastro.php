<?php
    if(isset($_POST['senha'])){
        include_once('config.php');

        $Usuario = $_POST['Usuario'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $CPF = $_POST['CPF'];
        $Email = $_POST['Email'];
      


       
            $result = mysqli_query($conexao, "INSERT INTO cadrasto(Usuario, senha, telefone, CPF, Email)VALUES ('$Usuario', '$senha', '$telefone', '$CPF', '$Email')");
            echo "ok";
           
    }
    ?>
  
  
  <!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- loja de icones -->
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
   <!-- unindo o style -->
    <link rel="stylesheet" href="Style/StyleLogin.css">

  <title>Cadastro</title>
</head>
<body>
    <!-- caixas de resposta do cadastro -->
      <main class="container">
        <form action="/Novo.php" method="post"> 
            <h1>Cadastro</h1>
            <div class="input-box-s">
                 <input placeholder="Usuario" type="text" name="Usuario" id="Usuario" class="inputUser" minlength="8" maxlength="45" required>
                 
                 
                 <input placeholder="CPF" minlength="11" maxlength="11" type="number" name="CPF" id="CPF" class="inputUser" {
                    -webkit-appearance: none;}>

    
                   <input placeholder="telefone" minlength="9" maxlength="30" type="number" required="number" name="telefone" id="telefone" class="inputUser" -webkit-appearance: none;> 
                
                <input placeholder="Email" type="Email" name="Email" id="Email" class="inputUser" minlength="8" maxlength="110" required>
            </div>
            <div class="input-box-s">
                <input placeholder="senha" type="password" name="senha" id="senha" class="inputUser" minlength="8" maxlength="30" required>
            </div>

            <div class="remember-forgot-s">
                <label>
                <input type="checkbox" required>
                Eu concordo com os termos de serviço!
                </label>
            </div>

            
            <div class="register-link"> 
               <div class="input-box-s">
            <input type="submit" value="Cadastrar" name="submit" id="submit" class="functionbuttons"><br/>
             </div> 
              
                <p>Já possui uma conta? <a href="./login.php">Faça Login!</a></p>
            </div>
           
           
        </form>

    </main>
</body>
</html>
  
  
  

  



