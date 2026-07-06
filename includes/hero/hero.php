<?php
    $tituloPrincipal = "Personal Trainer Daiane Tavares";
    $subtexto = "O resultado comeca na escolha do profissional que conhece o caminho!";
    $imagemFundo = "./includes/hero/images/fundo.png"; 
    $textBotao = "Quero resultados!";
    $linkBotao = "https://client.mfitpersonal.com.br/out/signup-link/NzM2MzA=?utm_source=ig&utm_medium=social&utm_content=link_in_bio&fbclid=PAZXh0bgNhZW0CMTEAc3J0YwZhcHBfaWQPOTM2NjE5NzQzMzkyNDU5AAGnY1uvEFb0v5xPI4Zk3Z8CenlIhUngQ3U_phK3jn0TzbCTxNUq7fa_vGMekfM_aem_kPtulZnuWTzfSRerYAX5DA";
?>

<link rel="stylesheet" href="./includes/hero/hero.module.css">

<section class="hero-section" style="background-image: url('<?php echo $imagemFundo; ?>');">
    <div class="hero-overlay"></div>
    
    <div class="container hero-container">
        <div class="hero-content">
            <p class="spanHero">CAMPINAS</p>
            <h1 class="hero-title"><?php echo $tituloPrincipal; ?></h1>
            <p class="hero-subtitle"><?php echo $subtexto; ?></p>
            <a href="<?php echo $linkBotao; ?>" class="hero-btn"><?php echo $textBotao?></a>
        </div>
    </div>
</section>