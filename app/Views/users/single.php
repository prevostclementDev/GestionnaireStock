<?= $this->extend('layout/default-logged'); ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="<?= base_url()?>assets/style/css/user-min.css">
<?= $this->endSection(); ?>

<?= $this->section('interface'); ?>
<section class="title-container">
    <h1 class="title">Clément Prévost</h1>
    <div class="additionnal lighttext">Affecté</div>
</section>
<section class="about">
    <h2>Information général</h2>
    <ul class="list-name">
        <li>Nom : <span class="boldtext">Prévost</span></li>
        <li>Prénom : <span class="boldtext">Clément</span></li>
    </ul>
    <form action="">
        <label for="">
            <input type="email" value="clementprevost45@gmail.com">
        </label>
        <div class="action-container">
            <input type="submit" value="Enregister">
            <button class="submit_ui_form">Changer le mot de passe</button>
            <button class="submit_ui_form">Supprimer</button>
        </div>
    </form>
</section>
<section class="user-section on-primary-background wdth100">
    <h2>Dernières actions de l'utilisateur</h2>
    <ul class="list-logs boldtext">
        <li>
            <p>Création de la commande 10399</p>
            <p>Il y a 3 jours</p>
        </li>
        <li>
            <p>Création de la commande 399</p>
            <p>Le 18/04/2023</p>
        </li>
    </ul>
</section>
<section class="user-section on-primary-background wdth100">
    <h2>Lieux de stockages liés</h2>
    <ul class="list-logs boldtext">
        <li class="align-top">
            <div class="leftpart">
                <p>Armoire B4 - membre</p>
                <form action="">
                    <select name="" id="">
                        <option value="">Membre</option>
                    </select>
                    <input type="submit" value="Changer">
                </form>
            </div>
            <div class="bottomPart">
                <a href="" class="bordered-link">Voir</a>
            </div>
        </li>
        <li class="align-top">
            <div class="leftpart">
                <p>Armoire B3 - administrateur</p>
                <form action="">
                    <select name="" id="">
                        <option value="">Administrateur</option>
                    </select>
                    <input type="submit" value="Changer">
                </form>
            </div>
            <div class="bottomPart">
                <a href="" class="bordered-link">Voir</a>
            </div>
        </li>
    </ul>
</section>
<?= $this->endSection(); ?>