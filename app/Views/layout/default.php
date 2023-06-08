<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $head_title ?></title>
    <?= $this->renderSection('meta') ?>
    <?= $this->renderSection('style') ?>
</head>
    <body>
    <?= $this->renderSection('js_before') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->renderSection('js_after') ?>
    </body>
</html>
