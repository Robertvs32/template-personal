<?php
$blocos = [
    [
        'titulo' => 'Alcance a mudanca que deseja, de uma vez por todas!',
        'subtitulo' => 'Resultados garantidos',
        'texto' => 'Com toda a experiencia adquirida ao longo de mais de 15 anos de profissao, garanto que seu objetivo e totalmente possivel! Desde que haja comprometimento no planejamento, o resultado e certo!',
        'imagem' => './includes/features/images/daniela.jpg',
        'botao' => 'Quero alcancar meus objetivos!',
        'link' => 'https://client.mfitpersonal.com.br/out/signup-link/NzM2MzA=?utm_source=ig&utm_medium=social&utm_content=link_in_bio&fbclid=PAZXh0bgNhZW0CMTEAc3J0YwZhcHBfaWQPOTM2NjE5NzQzMzkyNDU5AAGnY1uvEFb0v5xPI4Zk3Z8CenlIhUngQ3U_phK3jn0TzbCTxNUq7fa_vGMekfM_aem_kPtulZnuWTzfSRerYAX5DA'
    ]
];
?>

<link rel="stylesheet" href="./includes/features/features.module.css">

<?php foreach ($blocos as $index => $bloco): 
    // Lógica para inverter: se o índice for ímpar, ele inverte a ordem
    $inverter = ($index % 2 !== 0) ? 'row-reverse' : '';
?>
<section class="feature-section <?php echo $inverter; ?>">
    <div class="feature-grid">
        <div class="feature-content">
            <span class="feature-badge"><?php echo $bloco['subtitulo']; ?></span>
            <h2 class="feature-title"><?php echo $bloco['titulo']; ?></h2>
            <p class="feature-text"><?php echo $bloco['texto']; ?></p>
            <a href="<?php echo $bloco['link'] ?>" class="feature-btn"><?php echo $bloco['botao']; ?></a>
        </div>

        <div class="feature-img-box">
            <img src="<?php echo $bloco['imagem']; ?>" alt="<?php echo $bloco['titulo']; ?>" class="feature-img">
        </div>
    </div>
</section>
<?php endforeach; ?>