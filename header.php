<?php include_once("variaveis.php"); ?>
<header class="navbar">
    <h1 id="logo">
        <?php echo $nomeSistema; ?>
    </h1>
    <nav>
        <ul class="nav">
            <?php if(isset($usuario) && $usuario != []) {?>
            <li class="nav-item"><a class="nav-link" href="index.html">Cursos</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Olá <?php echo $usuario["nome"] ?>!</a></li>
            <li class="nav-item"><a href="sair.php" class="nav-link">Sair</a></li>
            <?php }else{ ?>
            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
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