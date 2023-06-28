<?= $this->extend('layout/list') ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="<?= base_url()?>assets/style/css/products-min.css">
<?= $this->endSection(); ?>

<?php
echo $this->section('notice');
if(!empty(validation_errors())) {

    ?>
    <div class="notice error global-notice"><?= validation_list_errors(); ?></div>
    <?php
}
echo $this->endSection();
?>

<?= $this->section('list'); ?>
<table>
    <thead>
        <tr>
            <th>Nom du produits</th>
            <th>Quantité dans l’espace sélectionnée</th>
            <th>Prix d’achat</th>
            <th>Prix de vente</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if(empty($products_list)) {
            echo '<tr><td colspan="5">Aucun produit trouvée</td></tr>';
        } else {
            foreach ($products_list as $product) {
                echo
                '<tr>
                    <td>'.$product['singular_name'].'</td>
                    <td>Aucun espace selectionnée</td>
                    <td>'.$product['billing_price'].'</td>
                    <td>'.$product['selling_price'].'</td>
                    <td><a href="'.base_url('product/'.$product['id']).'">Voir</a></td>
                </tr>';
            }
        }
        ?>
    </tbody>
</table>
<?= $this->endSection(); ?>

<?= $this->section('modal'); ?>
<?= view('form_modal/AddProduct'); ?>
<?= $this->endSection(); ?>


<?= $this->section('js_after_content'); ?>
<script src="assets/js/modal-min.js"></script>
<?= $this->endSection(); ?>
