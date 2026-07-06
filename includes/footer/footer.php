<?php
$anoAtual = date('Y');
$nomeEmpresa = "Daiane Tavares";
$cnpj = "00.000.000/0001-00"; // Importante para credibilidade
?>

<link rel="stylesheet" href="./includes/footer/footer.css">

<footer class="footer">
    <div class="container footer-grid">
        <div class="footer-box">
            <h3 class="footer-logo"><?php echo $nomeEmpresa; ?></h3>
            <p class="footer-text">Personal Trainer especialista em hipertrofia e emagrecimento, com mais de 15 anos de experiencia na area, transformando vidas atraves do exercicio</p>
        </div>

        <div class="footer-box">
            <h4 class="footer-title">Contato</h4>
            <p class="footer-contact">📍 R. Cel. Quirino, 1817 - Cambuí, Campinas - SP, 13025-003</p>
            <p class="footer-contact">📞 (19) 99821-3243 - Daiane Tavares</p>
            <p class="footer-contact">✉️ contato@daianetavares.com</p>
        </div>

    </div>

    <div class="footer-bottom">
        <div class="container bottom-content">
            <p>&copy; <?php echo $anoAtual; ?> <?php echo $nomeEmpresa; ?>. Todos os direitos reservados.</p>
            <!-- <p>Desenvolvido por <a href="https://robbe.com.br" target="_blank"><strong>.</strong></a></p> -->
        </div>
    </div>
</footer>