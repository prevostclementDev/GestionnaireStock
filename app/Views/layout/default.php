<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if ( isset($head_title) ) { echo $head_title; } ?></title>
    <?= $this->renderSection('meta') ?>
    <?= $this->renderSection('style') ?>
</head>
    <body>
    <?= $this->renderSection('js_before_content') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->renderSection('modal'); ?>
    <?= $this->renderSection('js_after_content') ?>
    <script src="<?= base_url()?>assets/js/disabled-mobile-version-min.js"></script>
    </body>
</html>
