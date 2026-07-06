<?php
    $logo = "./includes/navbar/logo/logo.svg";
    $navLinks = [
        ['nome' => 'Serviços', 'url' => '#servicos'],
        ['nome' => 'Processos', 'url' => '#processos'],
        ['nome' => 'Alunos', 'url' => '#alunos'],
        ['nome' => 'Depoimentos', 'url' => '#depoimentos'],
        ['nome' => 'Localizacao', 'url' => '#localizacao'],
    ];
?>

<nav class="navbar" id="navbar">
    <div class="container">
        <a href="#" class="logo">
            <img class="logoNav" src="<?php echo $logo?>" alt="Logo Daiane Tavares">
        </a>

        <ul class="nav-menu">
            <?php foreach($navLinks as $link): ?>
                <li><a class="btnLink" href="<?php echo $link['url']; ?>"><?php echo $link['nome']; ?></a></li>
            <?php endforeach; ?>
        </ul>

        <div class="hamburger" id="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
</nav>

<script src="./includes/navbar/navbar.js"></script>
<link rel="stylesheet" href="./includes/navbar/navbar.module.css">