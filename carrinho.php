        
<?php
$nomeSistema = "Fox Cursos";
$usuario = ["nome"=>"Thainá"];
$categorias = ["Cursos", "Palestras", "Artigos", "Blog"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="navbar">
        <h1 id="logo">
            <?php echo $nomeSistema; ?>
        </h1>
        <nav>
            <ul class="nav">
                <?php if(isset($usuario) && $usuario !=[]) {?> 
                    <li class="nav-item"><a class="nav-link" href="#">Cursos</a></li> 
                    <li class="nav-item"><a class="nav-link" href="#">Olá <?php echo $usuario["nome"] ?>!</a></li>
                <?php }else{ ?>
                    <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Cadastrar</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <nav class="navbar navbar-dark bg-dark">
        <ul class="nav">
        <?php if(isset($categorias) && $categorias !=[]) {?>
        <?php foreach($categorias as $categoria) { ?>
        <li class="nav-item"><a class="nav-link text-white" href="#"><?php echo $categoria;?> </a> </li>
        <?php } ?>
        <?php } ?>
        </ul>
        </nav>
        
    <main>
    <section class="container">
    <div class="row">
    <div class="col-12">
    <h1>Carrinho de compras</h1>
    </div>
    <div class="col-12">
        <div class="row card">
            <div class="col-12">
                <h3>Você está comprando o curso  <?php echo $_GET['nomeProduto']; ?></h3>
            </div>
            <div class="col-lg-6 col-md-6">
                <form class="d-flex flex-column p-3" method="post" action="sucesso.php">
                <input type="text" name="nomeCompleto" placeholder="Digite seu nome">
                <input type="text" name="cpf" placeholder="CPF">
                <input type="number" name="cartao" placeholder="número do cartão">
                <input type="date" name="validadeCartao" placeholder="Data de validade">
                <input type="number" name="codigoCartao" placeholder="CVV">
                 <button class="btn btn-sucess" type="submit"> Finalizar a Compra</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </section>
    </main>
</body>
</html>