<div class="row pt-5">
    <div class="col-sm-12 col-md-4">
        <img src="<?php echo URL_SITE ?>img/gato.jpeg" class="img-fluid">
    </div>
    <div class="col-sm-12 col-md-8">
        <h2>Diego Bracellos</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta sit corporis amet ducimus aliquid tenetur
            neque dignissimos, sequi nemo exercitationem voluptatem quo soluta architecto error blanditiis unde
            doloribus cum pariatur.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eaque nam quae alias, quisquam, dolorum
            nihil animi cum, inventore aspernatur iure ipsa rem veritatis quidem tempora? Ducimus officia ea deserunt.
        </p>
    </div>
</div>
<?php
$atuacao = [
    [
        "titulo" => "PHP", 
        "icon" => "bi-filetype-php", 
        "text" => "Experiência de 22 anos trabalhando com PHP orientado a objetos"
    ],
    [
        "titulo" => "Base de Dados", 
        "icon" => "bi-database-gear", 
        "text" => "Ampla experiência com várias base de dados como MSQL, POSTGREE e ORACLE"
    ],
    [
        "titulo" => "JQUERY", 
        "icon" => "bi-filetype-js", 
        "text" => "Biblioteca Javascript para frontEnd"
    ],
    [
        "titulo" => "JAVA", 
        "icon" => "bi-filetype-java", 
        "text" => "Eu aprendi mas não uso essa merda"
    ]
];
?>
<div class="row pt-5">
    <?php
    foreach($atuacao as $area){
        echo <<<HTML
        <div class="col-sm-12 col-md-3">
            <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi {$area['icon']} fs-1"></i>
                    <h3>{$area['titulo']}</h3>
                    <p>{$area['text']}</p>
                </div>
            </div>
        </div>
        HTML;
    }
    ?>
</div>