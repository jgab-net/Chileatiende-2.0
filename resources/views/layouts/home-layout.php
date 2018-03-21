<?=view('chunks/head', ['title' => $title])?>
<?= view('chunks/navbar', ['skin'=>$skin]) ?>
<main class="site-main" id="app">
    <section class="section bg-bluedark hero-background"
         <?php if($skin == 'ugly'):?>style="background-image: none;"<?php endif ?>
         <?php if($skin == 'gob'):?>style="background-image: url(images/home-gob.jpg);"<?php endif ?>
         <?php if($skin == 'mujer'):?>style="background-image: url(images/home-mujer.jpg);"<?php endif ?>
         <?php if($skin == 'exterior'):?>style="background-image: url(images/home-exterior.jpg);"<?php endif ?>
    >
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 order-lg-12 col-xl-5">
                    <div class="pull-md-right">
                        <div data-value="16px" class="toolbar ">
                            <div class="toolbar_content">
                                <a href="#" class="toolbar-button toolbar-button--contrast">
                                    <span class="toolbar-button_content">
                                        <i class="ic-contrast toolbar-button_icon"></i>
                                    </span>
                                </a>
                                <a href="#" class="toolbar-button toolbar-button--less disabled">
                                    <span class="toolbar-button_content">
                                        <i class="ic-font-size-less toolbar-button_icon"></i>
                                    </span>
                                </a>
                                <a href="#" class="toolbar-button toolbar-button--plus">
                                    <span class="toolbar-button_content">
                                        <i class="ic-font-size-plus toolbar-button_icon"></i>
                                    </span>
                                </a>
                            </div>
                            <a href="#" class="toolbar-button toolbar-button--toggle">
                                <span class="toolbar-button_content">
                                    <i class="ic-accessibility toolbar-button_icon"></i>
                                    <i class="ic-close toolbar-button_icon"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <article class="article article--dark text-light">
                        <h2 class="article_title title--light a11y-tts">
                            Estás en ChileAtiende
                            <?php if($skin == 'exterior'):?>
                                <span class="exterior">/ Exterior</span>
                            <?php elseif ($skin == 'mujer'): ?>
                                <span class="mujer">/ Mujer</span>
                            <?php endif ?>
                        </h2>
                        <p class="a11y-tts">
                            Guía de Trámites y Servicios del Estado
                        </p>
                        <div id="searchHero" class="search-form search-form--large">
                            <!--<form action="buscar">
                                <search id="search" class="search" name="query" value=""></search>
                            </form>-->
                            <div class="search-form_content">
                                <input type="search" placeholder="¿Qué trámite o servicio buscas?" class="search-form_input toggle-search">
                                <button type="submit" class="search-form_button search-form_button--submit">
                                    <i class="ic-search">
                                    </i>
                                </button>
                                <button type="button" class="search-form_button search-form_button--cancel d-none">
                                    <i class="ic-delete">
                                    </i>
                                </button>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--small bg-bluedark d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="list-ib">
                        <li class="a11y-tts">
                            Lo más buscado:
                        </li>
                        <?php foreach($suggestions as $s):?>
                            <li>
                                <a class="link link--clean text-white a11y-tts" href="buscar?query=<?=htmlspecialchars($s->query)?>">
                                    <?=htmlspecialchars($s->query)?>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="sub-section_compact">
        <div class="container">
            <div class="main-post_social">
                <div class="social-links">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/ChileAtiende" target="blank">
                                <i class="ic-facebook">
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/ChileAtiende" target="blank">
                                <i class="ic-twitter">
                                </i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="social-text">
                    <p>Síguenos a través de redes sociales:</p>
                </div>
            </div>
        </div>
    </section>
    <?=$content?>
    <?=view('chunks/banner')?>
    <div class="modal fade claveunica-modal" id="claveunica-modal" class="" tabindex="-1" role="dialog" aria-labelledby="claveunica-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Sección en desarrollo</h4>
                </div> -->
                <div class="modal-body">
                    <h4>Sección en Desarrollo</h4>
                    <p>Portal Chileatiende en etapa Beta</p>
                </div>
                <div class="text-right">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Volver</button>
                </div>
            </div>
        </div>
    </div>
</main>
<?=view('chunks/footer', ['skin'=>$skin])?>
<?=view('chunks/foot')?>