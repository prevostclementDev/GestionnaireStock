<?= $this->extend('layout/default-logged'); ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="assets/style/css/products-min.css">
<?= $this->endSection(); ?>

<?= $this->section('interface') ?>

<section class="form-container-admin">

    <form action="" method="">
        <h1 class="title">Information général</h1>
        <label for="">
            <span>Nom singulier du produit</span>
            <input type="text" value="Seringue à perfusion">
        </label>
        <label for="">
            <span>Nom pluriel du produit</span>
            <input type="text" value="Seringues à perfusions">
        </label>
        <label for="">
            <span>Prix de d’achat (En euros)</span>
            <input type="number" value="100">
        </label>
        <label for="">
            <span>Prix de vente (En euros)</span>
            <input type="number" value="140">
        </label>
        <label for="">
            <span>Unité</span>
            <input type="text" value="pièces">
        </label>

        <div class="buttonSubmit-container">
            <input type="submit" value="Enregistrer">
            <button class="submit_ui_form">Supprimer</button>
        </div>
    </form>

    <form action="" method="">
        <h1 class="title">Information depuis l’entrepôt</h1>
<!--        <p class="subtitle lighttext">Le produit n’est pas dans l’entrepôt</p>-->
        <label for="">
            <span>Quantité</span>
            <input type="number" value="120">
        </label>
        <label for="">
            <span>Seuil de quantité faible</span>
            <input type="number" value="20">
        </label>
        <label for="">
            <span>Localisation dans l’entrepôt</span>
            <input type="text" value=" Etagère B4">
        </label>

        <div class="buttonSubmit-container">
            <input type="submit" value="Enregistrer">
        </div>
    </form>

</section>

<?= $this->endSection(); ?>
