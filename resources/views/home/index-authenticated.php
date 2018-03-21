<div id="home">
    <div class="categories-area">
        <div class="container">
            <div class="title">
                <div class="subtitle">Trámites sugeridos basados en tus intereses</div>
                <h2>Por categoría</h2>
            </div>

            <div class="row">
                <?php foreach ($categories as $index => $c): ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="category">
                            <a class="heading collapsed" role="button" data-toggle="collapse"
                               href="#categoryCollapse-<?= $c->id ?>" aria-expanded="false"
                               aria-controls="categoryCollapse">
                                <h3><?= $c->name ?></h3>
                                <span class="caret"></span>
                            </a>
                            <div class="category-body collapse" id="categoryCollapse-<?= $c->id ?>">
                                <ul>
                                    <?php foreach ($c->pages()->masters()->published()->popular()->get() as $p): ?>
                                        <?php $p = $p->publishedVersion() ?>
                                        <li>
                                            <a href="fichas/<?= $p->guid ?>"
                                               title="<?= $p->title ?>"><?= str_limit($p->title, 80) ?></a>
                                            <?php if ($p->online): ?>
                                                <div>Trámite en Línea</div><?php endif ?>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                                <a class="btn" href="buscar?category=<?= $c->id ?>">Ir a <?= $c->name ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
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
