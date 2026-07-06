<?php
// Configurações da Galeria de Fotos
    $galeria_titulo = "Casos de sucesso";
    $galeria_subtitulo = "Seja um tambem!";
    $galeria_desc = "Veja o que um bom planejamento, junto a forca de vontade e capaz!";

    // Array com o caminho das fotos (basta alterar ou adicionar mais caminhos aqui)
    $fotos = [
        "./includes/fotosGrid/fotos/1.jpeg",
        "./includes/fotosGrid/fotos/2.jpg",
        "./includes/fotosGrid/fotos/3.jpg",
        "./includes/fotosGrid/fotos/4.jpg",
    ];
?>

<link rel="stylesheet" href="./includes//fotosGrid/fotosGrid.module.css">

<section class="galeria-section" id="alunos">
    <div class="galeria-container">
        
        <div class="galeria-header">
            <span class="galeria-tag"><?php echo $galeria_subtitulo; ?></span>
            <h2 class="galeria-title"><?php echo $galeria_titulo; ?></h2>
            <p class="galeria-desc"><?php echo $galeria_desc; ?></p>
        </div>

        <div class="galeria-grid">
            <?php foreach ($fotos as $index => $foto): ?>
                <div class="galeria-item">
                    <img 
                        src="<?php echo $foto; ?>" 
                        alt="Foto <?php echo $index + 1; ?> - Gold Star" 
                        loading="lazy"
                    >
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>