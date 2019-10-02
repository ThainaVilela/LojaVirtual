        
<?php
$nomeSistema = "Fox Cursos";
$usuario = ["nome"=>"Thainá"];

$produtos = [
     ["nome"=>"Curso HTML", "preco"=>59.00, "duracao"=>"1 mes","img"=>"img/html.png"],
     ["nome"=>"Curso JavaScript","preco"=>59.00, "duracao"=>"4 meses","img"=>"img/js.png"],
     ["nome"=>"Curso CSS","preco"=>59.00, "duracao"=>"2 meses","img"=>"img/css.png"],
];

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
        <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
        </nav>
        
    <main>
    <section class="container mt-4">

        <div class="row justify-content-around">
        <?php if(isset($produtos) && $produtos != []){ ?>
           <?php foreach($produtos as $produto) { ?>
                <div class="col-lg-3 card p-0 text-center">
                    <h2><?php echo $produto['nome']; ?></h2>
                    <img class="card-img-top" src="<?php echo $produto['img'];?>" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "R$".$produto['preco'].",00";?></h5>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>               
           <?php } ?>
        <?php }else{
            echo "<h1>Não existem produtos cadastrados!</h1>";
        } ?>
        </div>
    </section>
    </main>
</body>
</html>