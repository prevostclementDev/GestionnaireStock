<?= $this->extend('layout/login') ?>

<?php
    echo $this->section('notice');
    if(!empty(validation_errors()) || isset($error)) {

        ?>
        <div class="notice error login-notice"><?= validation_list_errors(); ?><?php if(isset($error)) { echo $error; } ?></div>
        <?php
    }
    echo $this->endSection();
?>

<?= $this->section('formlogin') ?>
<form action="" method="post">
    <?= csrf_field() ?>

    <label for="">
        <span>Email :</span>
        <input type="email" name="email" placeholder="Ex : email@domaine.com">
    </label>
    <label for="">
        <span>Mot de passe :</span>
        <input type="password" name="password" placeholder="votre mot de passe...">
    </label>

    <div class="submit left">
        <input type="submit" value="Se connecter">
        <a class="bordered-link" href="<?= base_url() ?>se-creer-un-compte">Créer un espace entreprise</a>
    </div>
</form>
<?= $this->endSection() ?>
