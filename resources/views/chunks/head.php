<!DOCTYPE html>
<html lang="es" class="a11y-font-0">
<head>
    <base href="<?=url('')?>" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?=csrf_token()?>">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"  />
    <title>ChileAtiende - <?=$title?></title>
    <meta property="og:title" content="Chileatiende - <?=$title?>" />
    <meta property="og:image" content="images/og_chatiende.png">
    <meta name="twitter:title" content="<?=$title?>">
    <?php if(isset($description)):?>
        <meta name="description" content="<?=$description?>" />
        <meta property="og:description" content="<?=$description?>" />
        <meta name="twitter:description" content="<?=$description?>">
    <?php endif ?>
    <?php if(isset($keywords)):?>
        <meta name="keywords" content="<?=$keywords?>" />
    <?php endif ?>
    <?php if(isset($author)):?>
        <meta name="author" content="<?=$author?>" />
        <meta name="twitter:creator" content="<?=$author?>">
    <?php endif ?>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
    <!-- Bootstrap -->
    <link href="css/app.css" rel="stylesheet">

</head>
<body class="footer-links-11">
