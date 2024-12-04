<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo wp_get_document_title() ?></title>
        <!-- <script src="https://cdn.jsdelivr.net/npm/less"></script> -->

        <link rel="icon" href="<?php echo get_stylesheet_directory_uri() ?>/resources/svg/logo.svg">
        <!-- <link rel="stylesheet/less" type="text/css" href="styles.less"> -->
        <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css"> -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
        <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"> -->
        <?php wp_head() ?>
    </head>
    <body>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Меню</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'head_menu',
                                'depth' => 1,
                                'container' => 'modal-body',
                                'menu_class' => 'list-unstyled',
                                'add_a_class' => 'text-decoration-none'
                            ));
                        ?>
                        <!-- <ul class="list-unstyled">
                            <li><a href="/" class="text-decoration-none">Образование</a></li>
                            <li><a href="/" class="text-decoration-none">Документация</a></li>
                            <li><a href="/" class="text-decoration-none">Поддержка</a></li>
                            <li><a href="/" class="text-decoration-none">Цены</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <header>
                <div class="row header justify-content-between">
                    <div class="col-lg-1 col-3 logo">
                        <a href="<?php echo site_url() ?>">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/resources/svg/logo.svg" alt="logo">
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-2 d-none d-lg-block title">
                        <a href="<?php echo site_url() ?>" style='color: white; text-decoration: none;'>
                            <?php bloginfo('name') ?>
                        </a>
                    </div>
                    <div class="xol-xl-7 col-lg-7 d-none d-lg-block titles">
                        <div class="col-">
                            <a href="/">образование</a>
                            <a href="/">документация</a> 
                            <a href="/">поддержка</a> 
                            <a href="/">цены</a>
                        </div>
                    </div>
                    <div class="col-lg-2 d-none d-lg-flex action-btn-parent">
                        <button type="button" class="action-btn"><a href="/">Загрузить</a></button>
                    </div>
                    <div class="col-3 d-lg-none menu-open" id="menu-open">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Меню
                        </button>                
                    </div>
                </div>
            </header>
        </div>