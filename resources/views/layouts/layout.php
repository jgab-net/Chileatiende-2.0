<?=view('chunks/head', $__data)?>
<?= view('chunks/navbar') ?>
<main class="site-main">
<div id="app">
    <header class="default">

        <?php if(@!$hideSearch): ?>
        <div class="search-area hidden-print">
            <div class="container">
                <label>¿Qué trámite o servicio buscas?</label>
                <form action="buscar">
                    <search id="search" name="query" value="<?=@e($query)?>"></search>
                </form>
            </div>
        </div>
        <?php endif ?>
    </header>

    <main>
        <?=$content?>
    </main>
</div>
</main>
<?=view('chunks/footer')?>
<?=view('chunks/foot')?>