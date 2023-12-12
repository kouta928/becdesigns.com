<?php
$navItens = [
    ["url" => "home", "label" => "HOME"],
    ["url" => "profissional", "label" => "O PROFISSIONAL"],
    ["url" => "portfolio", "label" => "PORTFÓLIO"],
    ["url" => "servicos", "label" => "SERVIÇOS"],
    ["url" => "contato", "label" => "CONTATO"]
];
$page = (isset($_GET['page'])) ? $_GET['page'] : 'home';
?>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Diego Bracellos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <?php 
    foreach($navItens as $nav){
        $active = ($nav['url'] == $page) ? 'active' : '';
        echo <<<HTML
        <li class="nav-item">
          <a class="nav-link {$active}" aria-current="page" href="?page={$nav['url']}">{$nav['label']}</a>
        </li>
        HTML;
    }
    ?>
      </ul>
    </div>
  </div>
</nav>