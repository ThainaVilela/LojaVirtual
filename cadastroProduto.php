<?php 
function cadastrarProduto($nomeProduto, $descProduto, $imgProduto, $precoProduto){
$nomeArquivo= "produto.json";

if(file_exists($nomeArquivo)){
    //abrindo e pegando informações do arquivo
    $arquivo = file_get_contents($nomeArquivo);
    //transformar o json em array
    $produtos = json_decode($arquivo, true);
    //adiionando um novo produto na array que estava dentro do arquivo
    $produtos [] = ["nome"=>$nomeProduto,"desc"=>$descProduto, "img"=>$imgProduto, "preco"=>$precoProduto, ];
    //transformando array em json
    $json = json_encode($produtos);
    //salvando o json dentro de um arquivo
    $deuCerto = file_put_contents($nomeArquivo, $json);

    if($deuCerto){
    return "Tudo certo!";
    }else{
        return "Algo deu errado!";
    }
}
else{
    $produtos = [];
    //array_push()
    $produtos [] = ["nome"=>$nomeProduto, "desc"=>$descProduto, "img"=>$imgProduto, "preco"=>$precoProduto];
    //transformando array em json
    $json = json_encode($produtos);
    //salvando o json dentro de um arquivo
    $deuCerto = file_put_contents($nomeArquivo, $json);

    if($deuCerto){
    return "Tudo certo!";
    }else{
        return "Algo deu errado!";
    }
}
}
if($_POST){
    //salvando arquivo
    $nomeImg = $_FILES['imgProduto']['name'];
    $localTemp = $_FILES['imgProduto']['tmp_name'];
    $caminhoSalvo = 'img/'.$nomeImg;
    
    $deucerto = move_uploaded_file($localTemp, $caminhoSalvo);
    exit;
    echo cadastrarProduto($_POST["nomeProduto"], $_POST["descProduto"], $_POST["imgProduto"], $_POST["precoProduto"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastro Produto</title>
</head>
<body>
    <?php  include_once("header.php"); ?>
    <main class="container">
        <div class="row">
            <div class="col-12">
             <h1>Cadastro de Produto</h1>
            </div>
            <div class="col-12">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nomeProduto" placeholder="Nome do produto">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="descProduto" placeholder="Descrição do produto">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="imgProduto" placeholder="Imagem do produto">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="precoProduto" placeholder="Preço do produto">
                    </div>
                    <button class="btn btn-success">Cadastrar Produto</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>