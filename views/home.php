<!-- banner da pagina inicial -->
<?php
$sql = "SELECT * FROM banners ORDER BY id DESC";
$qry = mysqli_query($con, $sql) or die("ERRO AO CONSULTAR");
$dados = [];
$i = 0;
while($data = mysqli_fetch_assoc($qry)){
    $dados[$i] = $data;
    $i++;
}

?>

<div id="carouselExampleCaptions" class="carousel slide">

    <div class="carousel-inner">
        <?php foreach ($dados as $ch => $b) {
            $active = ($ch == 0) ? 'active' : '';
            $img = ($isMobile) ? $b['mobile'] : $b['img'];
            ?>
            <div class="carousel-item <?php echo $active ?>">
                <img src="<?php echo URL_SITE . "img/" . $img ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5 class="bg-dark"><?php echo $b['title'] ?></h5>
        <p class="bg-dark"><?php echo $b['description'] ?></p> -->
                    <a href="#" class="btn btn-danger">ASSINE JÁ</a>
                </div>
            </div>
        <?php } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- STACKS -->
<?php
$stacks = [
    [
        "title" => "PHP",
        "description" => "18 anos de experiência",
        "img" => "php.png",
        "btnAction" => "https://google.com",
        "btnLabel" => "Visitar site"
    ],
    [
        "title" => "MYSQL",
        "description" => "18 anos de experiência",
        "img" => "mysql.png",
        "btnAction" => "https://google.com",
        "btnLabel" => "Visitar site"
    ],
    [
        "title" => "JAVASCRIPT",
        "description" => "22 anos de experiência",
        "img" => "js.jpeg",
        "btnAction" => "https://google.com",
        "btnLabel" => "Visitar site"
    ],
    [
        "title" => "NODE JS",
        "description" => "6 anos de experiência",
        "img" => "node.webp",
        "btnAction" => "https://google.com",
        "btnLabel" => "Visitar site"
    ]
];
?>
<div class="container pt-4">
    <div class="row">
        <?php
        foreach($stacks as $stack){
            $url_site = URL_SITE;
            echo <<<HTML
            <div class="col col-sm-12 col-md-3">
                <div class="card">
                    <img src="{$url_site}img/{$stack['img']}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{$stack['title']}</h5>
                        <p class="card-text">{$stack['description']}</p>
                        <a href="{$stack['btnAction']}" class="btn btn-primary">{$stack['btnLabel']}</a>
                    </div>
                </div>
            </div>
            HTML;
        }
        ?>
    </div>
</div>