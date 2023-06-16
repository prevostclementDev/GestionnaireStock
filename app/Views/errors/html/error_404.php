<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= lang('Errors.pageNotFound') ?></title>
    <link rel="stylesheet" href="<?= base_url()?>assets/style/css/error-min.css">
</head>
<body>
    <div class="wrapError">
        <div class="topLogo">
            <img src="<?= base_url()?>assets/imgs/logo.png" alt="">
        </div>
        <div class="center">
            <div class="logoError">
                <img src="<?= base_url()?>assets/imgs/error/404-<?= random_int(1,3); ?>.svg" alt="">
            </div>
            <div class="text">
                <?php if (ENVIRONMENT !== 'production') : ?>
                    <?= nl2br(esc($message)); ?>
                <?php else : ?>
                    <?= lang('Errors.sorryCannotFind') ?>
                <?php endif  ?>
            </div>
            <div class="action">
                <a class="submit_ui_form" href="<?= base_url()?>">Retour au tableau de bord</a>
            </div>
        </div>
    </div>
</body>
</html>

