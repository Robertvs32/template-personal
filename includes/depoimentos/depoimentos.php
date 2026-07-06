<?php
    $depoimentos = [
        [
            'nome' => 'Cecilia Amstalden', 
            'texto' => 'Estou super satisfeita com o trabalho da minha personal trainer Daiane! Ela é super profissional, atenciosa e   orienta muito bem os exercícios, sempre adaptando os treinos de acordo com minhas necessidades e objetivos. Desde que comecei a treinar com ela, notei uma grande melhora na minha força e condicionamento físico. Recomendo muito para quem quer resultados de verdade e um acompanhamento de qualidade.', 
            'foto' => './includes/depoimentos/imagens/cecilia.png', 
            'estrelas' => 5 
        ],
        [
            'nome' => 'Genildo Meneses', 
            'texto' => 'Profissional atenciosa, dedicada, pontual, passa treinos específicos... Se vc procura resultado Daiane Tavares com certeza é a pessoa correta... Sabe oq está dizendo e fazendo!!! Super recomendo!!!', 
            'foto' => './includes/depoimentos/imagens/genildo.png', 
            'estrelas' => 5 
        ],
        [
            'nome' => 'Patricia M', 
            'texto' => 'A Daiane é uma ótima profissional porque entende as necessidades dos alunos e ajusta os treinos às expectativas e necessidades de cada um. Além disso, também trabalha a parte de alimentação e emocional, o que motiva a todos no alcance dos resultados. Nesse quase 1 ano com a Daiane, ela proporcionou não só a minha perda de peso, como devolveu a minha confiança e autoestima.', 
            'foto' => './includes/depoimentos/imagens/patricia.png', 
            'estrelas' => 5 
        ],
        [
            'nome' => 'Luiza Gadotti', 
            'texto' => 'Personal dedicada, competente e atenciosa. Desde que começamos os treinos meu desempenho físico só melhora. Devia ter começado antes!', 
            'foto' => './includes/depoimentos/imagens/luiza.png', 
            'estrelas' => 5 
        ],

    ];
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="./includes/depoimentos/depoimentos.module.css">

<section class="testimonial-section" id="depoimentos">
    <div class="containerDepoimentos">
        
        <div class="section-header">
            <h2>Nossos alunos</h2>
            <p>Depoimentos</p>
        </div>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php foreach ($depoimentos as $d): ?>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div>
                                <div class="stars"><?php echo str_repeat('★', $d['estrelas']); ?></div>
                                <p class="testimonial-text">"<?php echo $d['texto']; ?>"</p>
                            </div>
                            <div class="user-meta">
                                <img src="<?php echo $d['foto']; ?>" alt="">
                                <div>
                                    <h4><?php echo $d['nome']; ?></h4>
                                    <span><?php echo $d['cargo']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    grabCursor: true,
    navigation: { 
        nextEl: ".swiper-button-next", 
        prevEl: ".swiper-button-prev" 
    },
    breakpoints: {
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 3 },
    },
    autoplay: { delay: 5000 },
  });
</script>