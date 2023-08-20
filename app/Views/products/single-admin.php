<?= $this->extend('layout/default-logged'); ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="<?= base_url() ?>assets/style/css/products-min.css">
<?= $this->endSection(); ?>

<?= $this->section('interface') ?>

<?php
if(!empty(validation_errors())) {

    ?>
    <div class="notice error global-notice"><?= validation_list_errors(); ?></div>
    <?php
}
?>

<section class="form-container-admin">
    <form action="<?= base_url('product/'.$product['id']) ?>" method="post">
        <?= csrf_field() ?>
        <h1 class="title">Information général</h1>
        <label for="">
            <span>Nom singulier du produit</span>
            <input type="text" name="singular_name" value="<?= $product['singular_name'] ?>">
        </label>
        <label for="">
            <span>Nom pluriel du produit</span>
            <input type="text" name="plurial_name" value="<?= $product['plurial_name'] ?>">
        </label>
        <label for="">
            <span>Prix de d’achat (En euros)</span>
            <input type="number" name="billing_price" step="0.01" value="<?= $product['billing_price'] ?>">
        </label>
        <label for="">
            <span>Prix de vente (En euros)</span>
            <input type="number" name="selling_price" step="0.01" value="<?= $product['selling_price'] ?>">
        </label>
        <label for="">
            <span>Unité</span>
            <input type="text" name="unite" value="<?= $product['unite'] ?>">
        </label>

        <div class="buttonSubmit-container">
            <input type="submit" value="Enregistrer" name="update_basic_data_product">
            <a href="" class="submit_ui_form">Supprimer</a>
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
