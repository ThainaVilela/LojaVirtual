<?php 
    session_start();
        $nomeSistema = "Fox Cursos";
        //Definindo usuário- se existir a sessão usuário(?) se existir o valor dela será o que já foi recebido e senão ficará vazio ("")
        $usuario = isset($_SESSION['usuario'])? $_SESSION['usuario']: [];

        $nomeArquivo = "produto.json";
        $produtos = json_decode(file_get_contents($nomeArquivo), true);;
        
        // $produtos = [
        //     ["nome"=>"CSS","preco"=>1200.00,"duracao"=>"5 meses","img"=>"img/css.png"],
        //     ["nome"=>"HTML","preco"=>1000.00,"duracao"=>"4 meses","img"=>"img/html.png"],
        //     ["nome"=>"JS","preco"=>1000.00,"duracao"=>"4 meses","img"=>"img/js.png"],
        // ];
        $categorias = ["Cursos","Palestras","Artigos","Blog"];
?>