<?php include_once("config/variaveis.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include_once("header.php"); ?>
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
                        <a href="carrinho.php?nomeProduto=<?php echo $produto['nome']; ?>"
                            class="btn btn-primary">Comprar</a>
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