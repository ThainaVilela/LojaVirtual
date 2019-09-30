        
<?php
$nomeSistema = "Fox Cursos";
$usuario = ["nome"=>"Thainá"];
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
    <main>
    <section class="container mt-4">
        <div class="row justify-content-around">
            <div class="col-lg-3 card p-0 text-center">
                <h2>HTML 5 do zero</h2>
                <img class="card-img-top" src="img/html.png" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">R$ 59,00</h5>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
            <div class="col-lg-3 card p-0 text-center">
                <h2>JavaScript</h2>
                <img class="card-img-top" src="img/js.png" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">R$ 59,00</h5>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
            <div class="col-lg-3 card p-0 text-center">
                <h2>HTML 5 do zero</h2>
                <img class="card-img-top" src="img/css.png" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">R$ 59,00</h5>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
    </section>
    </main>
</body>
</html>