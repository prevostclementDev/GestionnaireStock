<?= $this->extend('layout/default-logged.php') ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="<?= base_url()?>assets/style/css/storages-min.css">
<?= $this->endSection(); ?>

<?= $this->section('interface'); ?>

<section class="title-container">
    <h1 class="title">Information général</h1>
    <form action="<?= base_url('storage/'.$storage['id']) ?>" method="POST">
        <?= csrf_field() ?>
        <label for="">
            <span class="lighttext">Nom du lieu de stockage</span>
            <input name="name" type="text" value="<?= $storage['name'] ?>">
        </label>
        <label for="">
            <span class="lighttext">Adresse</span>
            <input name="adresse" type="text" value="<?= $storage['adresse'] ?>">
        </label>
        <label for="">
            <span class="lighttext">Pays</span>
            <input name="country" type="text" value="<?= $storage['country'] ?>">
        </label>
        <div class="buttonSubmit-container">
            <input type="submit" value="Enregistrer">
            <a href="<?= base_url('storage/delete/'.$storage['id']) ?>" class="submit_ui_form">Supprimer</a>
        </div>
    </form>
</section>

<!--<h1 class="title">Magasin B</h1>-->
<!--<div class="subtitle">-->
<!--    <p>195 route de sur les crêts, bernex</p>-->
<!--    <p>France</p>-->
<!--</div>-->

<section class="container-link-usage">
    <section class="link-section product-link">
        <div class="title-container">
            <h2>Produit liés</h2>
            <button id="linkproducttostorage-opener" class="submit_ui_form">Ajouter une liaison</button>
        </div>
        <ul class="list-link">
            <li class="on-primary-background wdth-100">
                <a href="" class="bordered-link">Seringue simple</a>
                <a href="" class="bordered-link">Délier</a>
            </li>
            <li class="on-primary-background wdth-100">
                <a href="" class="bordered-link">Seringue simple</a>
                <a href="" class="bordered-link">Délier</a>
            </li>
            <li class="on-primary-background wdth-100">
                <a href="" class="bordered-link">Seringue simple</a>
                <a href="" class="bordered-link">Délier</a>
            </li>
        </ul>
    </section>
    <section class="link-section user-link">
        <div class="title-container">
            <h2>Membres liés</h2>
            <button id="linkusertostorage-opener" class="submit_ui_form">Ajouter une liaison</button>
        </div>
        <ul class="list-link">
            <li class="on-primary-background wdth-100">
                <a href="" class="bordered-link">Prévost Clément</a>
                <a href="" class="bordered-link">Délier</a>
            </li>
            <li class="on-primary-background wdth-100">
                <a href="" class="bordered-link">Prévost Clément</a>
                <a href="" class="bordered-link">Délier</a>
            </li>
            <li class="on-primary-background wdth-100">
                <a href="" class="bordered-link">Prévost Clément</a>
                <a href="" class="bordered-link">Délier</a>
            </li>
        </ul>
    </section>
</section>

<?= $this->endSection(); ?>

<?= $this->section('modal'); ?>
<?= view('form_modal/LinkProductToStorage') ?>
<?= view('form_modal/LinkUserToStorage') ?>
<?= $this->endSection(); ?>

<?= $this->section('js_after_content') ?>
<script src="<?= base_url()?>assets/js/modal-min.js"></script>
<?= $this->endSection(); ?>
