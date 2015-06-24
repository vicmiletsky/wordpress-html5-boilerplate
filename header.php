<!doctype html>
<!--[if IE 8]>         <html class="no-js ie8" lang=""> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9" lang=""> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php wp_title( '|', true, 'right' ); ?><?= bloginfo('title') ?></title>

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?= body_class() ?>>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
