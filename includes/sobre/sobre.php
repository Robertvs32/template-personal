<?php
// Dados do cliente
$sobreTitulo = "Mais de 15 anos, auxiliando pessoas a mudarem suas vidas atraves do treino!";

$sobreTexto = "Profissional formada pela universidade (nome universidade) no ano de (ano de formacao), com especializacao em (especializacao) e diversos artigos publicados. <br><br> São mais de 15 anos de estrada, dedicados a entender que a atividade física vai muito além da estética: ela é a chave para a longevidade, a saúde mental e a alta performance no dia a dia.

Ao longo dessa jornada, centenas de vidas foram transformadas. Cada rotina ajustada, cada meta batida e cada dor superada são o combustível que move esse trabalho diário. Afinal, cuidar do corpo de alguém é uma responsabilidade imensa, e a experiência traz a segurança de saber exatamente o que funciona para cada individualidade.";

$sobreImagem = "./includes/sobre/images/daiane.jpg";

$titleProf = "Daiane Tavares";

// Array de estatísticas (Dinamismo!)
$stats = [
    ['valor' => '500+', 'label' => 'Alunos'],
    ['valor' => '100%', 'label' => 'Satisfação'],
    ['valor' => '24/7', 'label' => 'Suporte'],
];
?>

<link rel="stylesheet" href="./includes/sobre/sobre.module.css">

<section class="sobre-section" id="sobre">
    <div class="container sobre-grid">
        <div class="sobre-img-container">
            <img src="<?php echo $sobreImagem; ?>" alt="Nossa Equipe" class="sobre-img">
            <div class="img-badge">
                <span>+ 15 Anos de Experiência</span>
            </div>
        </div>

        <div class="sobre-content">
            <span class="sobre-tag"><?php echo $titleProf?></span>
            <h2 class="sobre-title"><?php echo $sobreTitulo; ?></h2>
            <p class="sobre-description"><?php echo $sobreTexto; ?></p>

            <div class="sobre-stats">
                <?php foreach($stats as $item): ?>
                    <div class="stat-item">
                        <h3 class="stat-value"><?php echo $item['valor']; ?></h3>
                        <p class="stat-label"><?php echo $item['label']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- <a href="#contato" class="sobre-link">Saiba mais sobre nossa história →</a> -->
        </div>
    </div>
</section>