<?php
$passos = [
    [
        'id' => '01',
        'icone' => './includes/processos/icons/alvo.png',
        'titulo' => 'Alinhamento de objetivo',
        'desc' => 'Analisamos juntos o melhor caminho para o objetivo que voce deseja.'
    ],
    [
        'id' => '02',
        'icone' => './includes/processos/icons/postura.png',
        'titulo' => 'Analise postural',
        'desc' => 'Faremos uma analise para identificar possiveis desvios, adequando o treino para melhorar sua postura e garantir integridade de movimento.'
    ],
    [
        'id' => '03',
        'icone' => './includes/processos/icons/planejamento.png',
        'titulo' => 'Estruturacao de treino',
        'desc' => 'Apos analisar sua postura, sera feito o planejamento do treino, adequado ao seu objetivo, rotina e horarios.'
    ],
    [
        'id' => '04',
        'icone' => './includes/processos/icons/acompanhamento.png',
        'titulo' => 'Acompanhamento',
        'desc' => 'Acompanhamos constantemente sua evolucao, para possiveis adequacoes ou elaboracao de novas estrategias.'
    ]
];
?>

<link rel="stylesheet" href="./includes/processos/processos.module.css">

<section class="process-section" id="processos">
    <div class="container-process">
        <div class="section-header" style="text-align: center;">
            <h2 style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 2px; color: #999;">Processo Simples</h2>
            <p style="font-size: 1.8rem; color: #111; font-weight: 300;">Processo simples, mas assertivo!</p>
        </div>

        <div class="process-grid">
            <?php foreach ($passos as $p): ?>
                <div class="process-item">
                    <span class="process-number"><?php echo $p['id']; ?></span>
                    <div class="process-content">
                        <img src="<?php echo $p['icone']?>" class="process-icon"/>
                        <h3><?php echo $p['titulo']; ?></h3>
                        <p><?php echo $p['desc']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>