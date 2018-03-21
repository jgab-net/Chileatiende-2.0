<?php if(!empty($featured)):?>
    <section>
        <div class="container">
            <section class="sub-section">
                <h2 class="heading-medium a11y-tts">
                    Destacados
                </h2>
                <div class="row">
                    <?php foreach ($featured as $f): ?>
                        <?php $f->publishedVersion() ?>
                        <div class="col-lg-6 col-xl-3">
                            <article class="new new--mobile d-block d-lg-none a11y-tts">
                                <figure class="new_figure-mobile">
                                    <img
                                        src="<?= $f->image ?>"
                                        alt="<?= $f->title ?>"
                                        class="img-fluid w-100 img-frame"
                                    >
                                </figure>
                                <div class="new_title">
                                    <a
                                        href="fichas/<?= $f->guid ?>"
                                        data-ga-te-category="Tabs Fichas"
                                        data-ga-te-action="Ficha Destacadas"
                                        data-ga-te-value="<?=$f->id?>"
                                        class="link link-clean"
                                    >
                                        <h4><?= $f->title ?></h4>
                                    </a>
                                    <a
                                        href="fichas/<?= $f->guid ?>"
                                        data-ga-te-category="Tabs Fichas"
                                        data-ga-te-action="Ficha Destacadas"
                                        data-ga-te-value="<?=$f->id?>"
                                        class="link link--text-dark visited"
                                    >
                                        <?= $f->title ?>
                                    </a>
                                </div>
                            </article>
                            <a
                                href="fichas/<?= $f->guid ?>"
                                data-ga-te-category="Tabs Fichas"
                                data-ga-te-action="Ficha Destacadas"
                                data-ga-te-value="<?=$f->id?>"
                                class="featured-card has-icon d-none d-lg-block a11y-tts"
                            >
                                <div class="featured-card_figure elem-bg">
                                    <img
                                        src="<?= $f->image ?>"
                                        alt="<?= $f->title ?>"
                                        class="card_image img-to-bg"
                                    >
                                </div>
                                <div class="featured-card_body">
                                    <h2 class="featured-card_title">
                                        <?= $f->title ?>
                                    </h2>
                                    <p>
                                        <?= $f->title ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 d-none d-md-block">
                        <a href="fichas/destacadas" class="button button--block button--light button--clean button--space a11y-tts">Ver más
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </section>
<?php endif ?>
<section class="section--medium mt-4">
    <div class="container">
        <h2 class="heading-medium a11y-tts">
            Trámites más destacados
        </h2>
        <p>Conoce cuales son los trámites mas visitados por categoría</p>
        <div class="row pt-4">
            <?php foreach($categories as $index=>$c):?>
                <div class="col-lg-4 col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="heading-medium a11y-tts">
                                <?=$c->name?>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach(App\Page::popularPublishedVersions($c->id) as $p):?>
                            <div class="col-12">
                                <p>
                                    <a
                                        href="fichas/<?=$p->guid?>"
                                        title="<?= $p->title ?>"
                                        data-ga-te-category="Tabs Fichas"
                                        data-ga-te-action="Ficha Mas Visitadas"
                                        data-ga-te-value="<?=$p->master_id?>"
                                        class="a11y-tts">
                                        <?=str_limit($p->title, 80)?>
                                    </a>
                                </p>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>