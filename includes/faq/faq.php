<?php
    $faq_config = [
        'titulo' => 'Dúvidas Frequentes',
        'itens' => [
            [
                'pergunta' => 'Como funcionam os treinos (Online ou Presencial)?',
                'resposta' => 'No modelo presencial, eu acompanho você lado a lado durante toda a execução dos exercícios na academia, corrigindo a postura e motivando em tempo real. No modelo online (consultoria), eu monto todo o seu planejamento personalizado através de um aplicativo, com vídeos demonstrativos de cada exercício, e nós fazemos o acompanhamento do seu progresso semanalmente.'
            ],
            [
                'pergunta' => 'Eu nunca treinei na vida. Esse acompanhamento serve para mim?',
                'resposta' => 'Com certeza! O treino é montado do zero respeitando o seu nível atual. Se você é iniciante, o foco inicial será no aprendizado dos movimentos, ganho de consciência corporal e condicionamento básico, sempre evoluindo no seu ritmo e com total segurança.'
            ],
            [
                'pergunta' => 'Em quanto tempo começarei a ver os primeiros resultados?',
                'resposta' => 'Os resultados variam de pessoa para pessoa, mas geralmente nas primeiras 4 semanas você já começará a notar melhoras significativas na sua disposição, qualidade do sono e força. Mudanças estéticas mais visíveis (como perda de gordura e definição muscular) costumam ficar bem evidentes entre 8 a 12 semanas de constância nos treinos e na alimentação.'
            ],
            [
                'pergunta' => 'Preciso treinar todos os dias para ter resultados?',
                'resposta' => 'Não necessariamente. A frequência ideal depende da sua rotina e dos seus objetivos. Planos de 3 a 4 vezes por semana bem estruturados costumam trazer excelentes resultados para a maioria das pessoas. O mais importante é a consistência, e não a quantidade exagerada.'
            ],
            [
                'pergunta' => 'Eu tenho uma lesão (ex: hérnia de disco, dor no joelho). Posso treinar assim mesmo?',
                'resposta' => 'Sim, e deve! O treino personalizado é uma das melhores ferramentas para fortalecer a musculatura ao redor das articulações e aliviar dores. Nós adaptaremos ou evitaremos exercícios que causem desconforto, trabalhando em conjunto com as recomendações do seu médico ou fisioterapeuta.'
            ],
            [
                'pergunta' => 'O plano de treino inclui dieta?',
                'resposta' => 'O treino e o plano alimentar andam juntos, por isso eu ofereço orientações e metas de hábitos saudáveis. No entanto, cardápios específicos e planos alimentares calculados milimetricamente são de competência exclusiva do Nutricionista, profissional com quem costumo trabalhar em parceria para acelerar seus resultados.'
            ]
        ]
    ];
?>

<link rel="stylesheet" href="./includes/faq/faq.css">

<section id="faq" class="faq-section">


    <h2 class="faq-main-title"><?php echo $faq_config['titulo']; ?></h2>
    
    <div class="faq-container">
        <?php foreach ($faq_config['itens'] as $index => $item): ?>
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <?php echo $item['pergunta']; ?>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <p><?php echo $item['resposta']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <script>
        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', () => {
                const faqItem = button.parentElement;
                const isOpen = faqItem.classList.contains('active');

                // Fecha todos os outros (opcional, remova se quiser abrir vários)
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('active');
                    item.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
                });

                // Alterna o item atual
                if (!isOpen) {
                    faqItem.classList.add('active');
                    button.setAttribute('aria-expanded', 'true');
                }
            });
        });
    </script>
</section>