<?php
    if(isset($_POST['submit'])){
        include_once('config.php');

        $user = $_POST['user'];
        $senha = $_POST['senha'];
       
       

       
            $result = mysqli_query($conexao, "SELECT * FROM cadrasto WHERE Usuario='$user' AND Senha ='$senha'");
           if(mysqli_num_rows($result)>0){echo "<script>alert('boiola logado')</script>";
        header("Location: http://localhost/pagina_inicial.php");
        
        
        
        }
           
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

  <title>Login</title>
</head>
<body>
    <!-- caixas de resposta do email e da senha -->
    <main class="container">
        <form action="/login.php" method="post"> 
            <h1>Login Lava Jato</h1>
            <div class="input-box">
                <input placeholder="Usuário" type="text" name="user" required>
                <!-- icones  -->
                <i class="bx bxs-user"> </i>
            </div>
            <div class="input-box">
                <input placeholder="Senha" type="password" name="senha" required>
                <!-- icones -->
                <i class="bx bxs-lock-alt"> </i>
            </div>

            <div class="remember-forgot">
                <label>
                <input type="checkbox">
                Lembrar minha senha
                </label>
                <a href="#">Esqueci minha senha</a>
            </div>
            <section>
                
                <!-- <a href="./página_inicial.html" target="_blank" class="login">Login</a>
            </section> -->
            <div class="register-link">
                <p>Não tem uma conta? <a href="./cadastro.php">Cadastre-se!</a></p>
            </div>
      
              <div class="input-box-s">
            <input type="submit" value="Login" name="submit" id="submit" class="functionbuttons"><br/>
             </div> 

        </form>
    </main>
</body>
</html>
</html>



