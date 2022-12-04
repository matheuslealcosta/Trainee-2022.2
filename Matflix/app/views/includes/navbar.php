<!-- inicio da navbar-->
<?php
    $navitem = [
        'Home' => 'landing-page',
        'Posts' => 'lista-posts',
        'Login' => 'login'
    ];
?>
<nav class="navbar navbar-expand-lg navbar-container navbar-dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="landing-page">
                <img src="../../../public/img/matflix_logo.jpg" alt="Logo da Matflix">
                Matflix
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-links" id="navbarNav">
                <ul class="navbar-nav">
                <?php foreach ($navitem as $nome => $url): ?>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?=$url?>"><?=$nome?></a>
                </li>
                <?php endforeach; ?>
                </ul>
            </div>
            </div>
</nav>