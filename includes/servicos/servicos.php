<?php
$servicos = [
    [
        'titulo' => 'Consultoria online', 
        'desc' => 'Atendimento 100% online, desde o a estruturacao do planejamento de treino, acompanhamento mensal e possiveis ajustes, sempre levando em consideracao o objetivo atual do cliente.', 
        'icone' => './includes/servicos/icons/online.png'
    ],
    [
        'titulo' => 'Personal presencial', 
        'desc' => 'Atendemos de forma presencial, auxiliando lado a lado na execucao dos exercicios, garantindo que o movimento esteja adequado, evitando lesoes', 
        'icone' => './includes/servicos/icons/treino.png'
    ],
    [
        'titulo' => 'Hipertrofia e emagrecimento', 
        'desc' => 'Especialista em recomposicao corporal, reduzindo o percentual de gordura e aumentando a massa magra, melhorando a estetica do deu fisico, disposicao, bem estar e saude mental.', 
        'icone' => './includes/servicos/icons/hipertrofia.png'
    ],
    [
        'titulo' => 'Correcao de desvios', 
        'desc' => 'Avaliamos sua postura e estruturamos um planejamento assertivo, com objetivo de melhorar o equilibrio das estruturas do seu corpo, fortalecendo partes fracas e alongamento possiveis encurtamentos musculares', 
        'icone' => './includes/servicos/icons/postura.png'
    ],
];
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="./includes/servicos/servicos.module.css">

<section class="slider-section" id="servicos">
    <div class="containerServicos">

        <div class="section-header-servicos">
            <h2>Servicos</h2>
            <p>Nossos servicos</p>
        </div>

        <div class="swiper mySwiperServicos">
            <div class="swiper-wrapper">
                <?php foreach ($servicos as $s): ?>
                    <div class="swiper-slide">
                        <div class="service-card-slider">
                            <img src="<?php echo $s['icone']; ?>" class="icon"/>
                            <h3><?php echo $s['titulo']; ?></h3>
                            <p><?php echo $s['desc']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiperServicos", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    pagination: { el: ".swiper-pagination", clickable: true },
    navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
    breakpoints: {
      640: { slidesPerView: 2 },
      1024: { slidesPerView: 3 },
    },
    autoplay: { delay: 3000 },
  });
</script>