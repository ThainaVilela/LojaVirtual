<?PHP
//usuario cadastrado no banco
$usuario = ["email"=>"thainavilela@gmail.com","senha"=> '$2y$10$8rYO7PDTxgEW9EXnAGa8qui992WDus5WjqfE25gh/4WwMPkeLdxt6']; 
if($_POST){
    $email = $_POST['email'];
    $senha =$_POST['senha'];

    // IF se o email digitado pelo usuario é igual ao email de usuário cadastrado no meu banco de dados
    if($email ==$usuario['email']){
        // validando a senha
        if(password_verify($senha, $usuario['senha'])){
            //definindo a localização para onde o usuário é redirecionado ao logar.
            session_start();
            $_SESSION['usuario'] = ["nome" => "Thaina"];
            header('Location:index.php');
        }else{
            echo "Email ou senha inválida";
        }
    }
    // ELSE se o email estiver errado:
    else{
        echo "Email ou senha inválida";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include_once("header.php"); ?>
    <main class="d-flex justify-content-center align-items-center p-5">
       <form action="login.php" method="post" class="card p-2">
       <div class="form-group">
       <label for="email">Email</label>
       <input type="email" name="email" id="email" class="form-control" required>
       </div>
       <div class="form-group">
       <label for="senha">senha</label>
       <input type="password" name="senha" id="senha" class="form-control" required>
       </div>
      <div class="form-group text-center" >
      <button class="btn btn-success" type="submit">Entrar</button>
      </div>

       </form>
    </main>
</body>
</html>