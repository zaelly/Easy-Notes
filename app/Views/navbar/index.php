<nav class="navbar bg-primary container-header navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid nav-itens">
        <a class="navbar-brand logo" href="#">Nota Fácil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" id="home" href="<?= site_url('/') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="comecar" href="<?= site_url('comece_ja') ?>">Começe já!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="trabalhe-conosco" href="<?= site_url('trabalhe_conosco') ?>">Trabalhe conosco</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Fale Conosco
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#" id="<?= site_url('contato') ?>">Contato</a></li>
                    <li><a class="dropdown-item" href="#" id="<?= site_url('suporte') ?>">Suporte</a></li>
                </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>