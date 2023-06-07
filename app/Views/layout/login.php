<?= $this->extend('layout/default') ?>

<?= $this->section('style') ?>
<link rel="stylesheet" href="<?= base_url('assets/style/css/login-min.css'); ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section id="loginpage">
        <img class="backgroundfixedimg" src="assets/imgs/login_background/home-<?= random_int(1,6); ?>.jpg">
        <div class="filterbackground--white"></div>

        <section class="connectionbar">
            <div class="logocontainer">
                <img src="assets/imgs/logo.png" alt="">
            </div>

            <div class="toptitle">
                <img src="assets/imgs/box.svg" alt="">
                <h1><?= $page_title ?></h1>
            </div>

            <div class="formspace">
                <?= $this->renderSection('formlogin') ?>
            </div>
        </section>
    </section>
<?= $this->endSection() ?>