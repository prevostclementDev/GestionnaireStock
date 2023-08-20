<?= $this->extend('layout/default-logged'); ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="<?= base_url()?>assets/style/css/user-min.css">
<?= $this->endSection(); ?>

<?= $this->section('interface'); ?>

<?php
if(!empty(validation_errors())) {

    ?>
    <div class="notice error global-notice"><?= validation_list_errors(); ?></div>
    <?php
}
?>

<section class="title-container">
    <h1 class="title"><?= $user['first_name'].' '.$user['last_name'] ?></h1>
    <div class="additionnal lighttext"><?= $user['type'] ?></div>
</section>
<section class="about">
    <h2>Information général</h2>
    <ul class="list-name">
        <li>Nom : <span class="boldtext"><?= $user['first_name'] ?></span></li>
        <li>Prénom : <span class="boldtext"><?= $user['last_name'] ?></span></li>
    </ul>
    <form action="<?= base_url('user/'.$user['id']) ?>" method="post">
        <?= csrf_field() ?>
        <label for="">
            <input type="email" name="email" value="<?= $user['email'] ?>">
        </label>
        <div class="action-container">
            <input type="submit" value="Enregister">
            <a href="" class="submit_ui_form">Changer le mot de passe</a>
            <?php
            if($user['type'] !== 'super_administrator') {
                echo '<a class="submit_ui_form" href="'.base_url('user/delete/'.$user['id']).'">Supprimer</a>';
            }
            ?>
        </div>
    </form>
</section>
<section class="user-section on-primary-background wdth100">
    <h2>Dernières actions de l'utilisateur</h2>
    <ul class="list-logs boldtext">
        <li>Aucune dernières actions</li>
<!--        <li>-->
<!--            <p>Création de la commande 10399</p>-->
<!--            <p>Il y a 3 jours</p>-->
<!--        </li>-->
<!--        <li>-->
<!--            <p>Création de la commande 399</p>-->
<!--            <p>Le 18/04/2023</p>-->
<!--        </li>-->
    </ul>
</section>
<section class="user-section on-primary-background wdth100">
    <h2>Lieux de stockages liés</h2>
    <ul class="list-logs boldtext">
        <li>Aucun stockage liés</li>
<!--        <li class="align-top">-->
<!--            <div class="leftpart">-->
<!--                <p>Armoire B4 - membre</p>-->
<!--                <form action="">-->
<!--                    <select name="" id="">-->
<!--                        <option value="">Membre</option>-->
<!--                    </select>-->
<!--                    <input type="submit" value="Changer">-->
<!--                </form>-->
<!--            </div>-->
<!--            <div class="bottomPart">-->
<!--                <a href="" class="bordered-link">Voir</a>-->
<!--            </div>-->
<!--        </li>-->
<!--        <li class="align-top">-->
<!--            <div class="leftpart">-->
<!--                <p>Armoire B3 - administrateur</p>-->
<!--                <form action="">-->
<!--                    <select name="" id="">-->
<!--                        <option value="">Administrateur</option>-->
<!--                    </select>-->
<!--                    <input type="submit" value="Changer">-->
<!--                </form>-->
<!--            </div>-->
<!--            <div class="bottomPart">-->
<!--                <a href="" class="bordered-link">Voir</a>-->
<!--            </div>-->
<!--        </li>-->
    </ul>
</section>
<?= $this->endSection(); ?>