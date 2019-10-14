<?php 
    $nomeSistema = "Fox Cursos";
    $usuario = ["nome"=>"Thaina"];

    $nomeArquivo = "produto.json";
    $produtos = json_decode(file_get_contents($nomeArquivo), true);;
    
    // $produtos = [
    //     ["nome"=>"CSS","preco"=>1200.00,"duracao"=>"5 meses","img"=>"img/css.png"],
    //     ["nome"=>"HTML","preco"=>1000.00,"duracao"=>"4 meses","img"=>"img/html.png"],
    //     ["nome"=>"JS","preco"=>1000.00,"duracao"=>"4 meses","img"=>"img/js.png"],
    // ];
    $categorias = ["Cursos","Palestras","Artigos","Blog"];
?>