<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> <?= $this->fetch('title') ?> </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css([
            'bootstrap.css',
            'font-awesome.min',
            '/owl-carousel/owl.carousel.css',
            '/owl-carousel/owl.theme.css',
            '/assets/js/google-code-prettify/prettify.css',
            '/fonts/roboto-font/stylesheet.css',
            '/style.css',
            'flipclock.css',
            'responsive-style.css',
        ]); 
    ?>
    
    <?= $this->Html->script([
            'jquery.js',
            'bootstrap.min.js',
            '/owl-carousel/owl.carousel.js',
            '/assets/js/google-code-prettify/prettify.js',
            'placeholders.min.js',
            'flipclock.min.js',
            'custom-js.js',
            //'https://apis.google.com/js/platform.js?onload=init',
            'https://apis.google.com/js/api:client.js',
        ]); 
    ?>        

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <div class="main">
        <?= $this->Element('header'); ?>
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
        <?= $this->Element('footer'); ?>
    </div>
    <?= $this->fetch('script') ?>
</body>
</html>
