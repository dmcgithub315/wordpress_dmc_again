<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= get_home_url()?>">
        <img
            class="logo-img"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/logo.png"
            alt="logo"
        />
        </a>
        <a class="navbar-brand" href="<?= get_home_url()?>">
        <img
            class="logo-img"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/logo-text.png"
            alt="logo"
        />
        </a>
        <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-6 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active home-nav text-success" aria-current="page" href="<?= get_home_url()?>"
                >Home</a
            >
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?= get_home_url()?>/about.">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?= get_home_url()?>/category/house/">Properties +</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?= get_home_url()?>/pages">Pages +</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?= get_home_url()?>/category/blog/">Blog</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?= get_home_url()?>/contact">Contact</a>
            </li>
            
        </div>
        <form class="header-form d-flex" role="search">
        <a href="#">
            <i class="fa-solid fa-magnifying-glass"></i>
        </a>
        <button class="submit-btn" type="submit">Submit Properties</button>
        </form>
    </div>
</nav>