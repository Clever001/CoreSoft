<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CoreSoft</title>
        <!-- <script src="https://cdn.jsdelivr.net/npm/less"></script> -->

        <link rel="icon" href="<?php echo get_stylesheet_directory_uri() ?>/resources/svg/logo.svg">
        <!-- <link rel="stylesheet/less" type="text/css" href="styles.less"> -->
        <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
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
                <ul class="list-unstyled">
                    <li><a href="/" class="text-decoration-none">Образование</a></li>
                    <li><a href="/" class="text-decoration-none">Документация</a></li>
                    <li><a href="/" class="text-decoration-none">Поддержка</a></li>
                    <li><a href="/" class="text-decoration-none">Цены</a></li>
                </ul>
                </div>
            </div>
            </div>
        </div>

        <div class="container-fluid">
            <header>
                <div class="row header justify-content-between">
                    <div class="col-lg-1 col-3 logo">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/resources/svg/logo.svg" alt="logo">
                    </div>
                    <div class="col-xl-2 col-lg-2 d-none d-lg-block title">CoreSoft</div>
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
        <div class="container-fluid start">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-4 col-12">
                        <div class="col-12 title">CoreSoft</div>
                        <div class="col-12 subtitle">Импровизируй<br>Создавай<br>Улучшай</div>
                    </div>
                    <div class="col-xl-7 col-lg-8 col-12">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/resources/png/start_image.png" alt="start_image" class="start-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid supported">
            <div class="container">
                <div class="row justify-content-evenly">
                    <div class="col-12 title">У нас есть все, что нужно</div>
                    <div class="col-lg-9 col-12 subtitle">CoreSoft IDE является творческой площадкой, которую можно  
                        свободно использовать для редактирования, отладки и сборки кода на разных языках программирования.</div>

                    
                    <div class="d-flex flex-wrap justify-content-center">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5 col-6 my-card">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/resources/svg/java.svg" alt="java">
                            <div class="name">Java</div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5 col-6 my-card">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/resources/svg/js.svg" alt="javascript">
                            <div class="name">JavaScript</div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5 col-6 my-card">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/resources/svg/cpp.svg" alt="cpp">
                            <div class="name">C++</div>
                        </div>
    
                        <div class="w-100 d-none d-md-block d-xxl-none"></div>
    
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5 col-6 my-card">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/resources/svg/php.svg" alt="php">
                            <div class="name">php</div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5 col-6 my-card">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/resources/svg/spring.svg" alt="spring">
                            <div class="name">Spring</div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5 col-6 my-card">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/resources/svg/maven.svg" alt="maven">
                            <div class="name">Maven</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid advantages">
            <div class="container">
                <div class="row justify-content-evenly">
                    <div class="col-12 main-title">Почему именно CoreSoft?</div>
                    <div class="col-lg-5 col-md-6 col-sm-8 col-12 my_card">
                        <div class="top">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/resources/svg/laptop.svg" alt="laptop">
                            <div class="title">Низкие требования</div>
                        </div>
                        <div class="text">От вас не требуется мощная машина для запуска IDE. 
                            Наша программа подходит практически для любого железа.</div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-8 col-12 my_card">
                        <div class="top">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/resources/svg/trending-up.svg" alt="trending-up">
                            <div class="title">Высокая эффективность</div>
                        </div>
                        <div class="text">Поддержка Hot reload и расширенные функции отладки 
                            позволяют как никогда просто писать и отлаживать код.</div> 
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-8 col-12 my_card">
                        <div class="top">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/resources/svg/armchair.svg" alt="armchair">
                            <div class="title">Удобство и простота</div>
                            
                        </div>
                        <div class="text">Интуитивно понятный интерфейс и целое море 
                            возможностей для кастомизаций.</div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-8 col-12 my_card">
                        <div class="top">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/resources/svg/sync.svg" alt="sync">
                            <div class="title">Легкая переносимость</div>
                        </div>
                        <div class="text">Наша IDE доступна на всех современных платформах: 
                            Windows, MacOs, Unix/Linux.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid slider-block">
            <div class="container">
                <div class="row slider-row">
                    <div class="col-12 title">11 из 10 разработчиков выбирают CoreSoft</div>
                    <div class="col-12 slider-body swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide-content">
                                    <div class="top">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/resources/png/user_1.png" alt="user" class="slide-image">
                                        <div class="column">
                                            <h3>Mary Grygleski</h3>
                                            <p>Senior Developer Advocate, Java Champion</p>
                                        </div>
                                    </div>
                                    <p>CoreSoft, несомненно, является лучшей IDE для разработчиков программного обеспечения.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide-content">
                                    <div class="top">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/resources/png/user_2.png" alt="user" class="slide-image">
                                        <div class="column">
                                            <h3>Mohamed Taman</h3>
                                            <p>Owner/CEO, Java Champion</p>
                                        </div>
                                    </div>
                                    <p>Я всегда чувствую себя комфортно и уютно, работая над своими проектами 
                                        с использованием CoreSoft.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide-content">
                                    <div class="top">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/resources/png/user_3.png" alt="user" class="slide-image">
                                        <div class="column">
                                            <h3>Josh Long</h3>
                                            <p>Spring Developer Advocate, Java Champion</p>
                                        </div>
                                    </div>
                                    <p>Я пользуюсь CoreSoft и ни разу не пожалел. Это лучшая IDE для Java разработчика.
                                        Вместе с ней работать легко!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid action">
            <div class="container justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-12 title">Установите CoreSoft прямо сейчас!</div>
                    <div class="col-12 subtitle">Установите CoreSoft бесплатно прямо сейчас и 
                        Вам станет доступен полноценный постоянно расширяющийся 
                        инструментарий, благодаря которому Вы сможете создавать приложения 
                        любой сложности!</div>
                    <div class="col-lg-4 col-md-5 col-6 button-parent">
                        <div class="button"><a href="/">Загрузить</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text">Разработано студентом КЭ-343 Никончук В.И.<br>2024г.</div>
                </div>
            </div>
        </div>
    </body>
    <!-- <script src="https://cdn.jsdelivr.net/npm/less" ></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/resources/javascript/slider.js"></script>
    <?php wp_footer() ?>
</html>
