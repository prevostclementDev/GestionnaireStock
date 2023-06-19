<?= $this->extend('layout/list') ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="<?= base_url()?>assets/style/css/products-min.css">
<?= $this->endSection(); ?>

<?php
echo $this->section('list');

$table = new \CodeIgniter\View\Table();

$table->setHeading(['Nom du produits', 'Quantité dans l’espace sélectionnée', 'Prix d’achat', 'Prix de vente' , 'Action']);

$lines = array(
        'Seringue à perfusion',
    '121 pieces',
    '10 euros' ,
    '30 euros',
    '<a href="'.base_url().'product/10" class="bordered-link">Voir</a>'
);

$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);

echo $table->generate();

?>

<?= $this->endSection(); ?>

<?= $this->section('modal'); ?>
<?= view_cell('AddProductCell'); ?>
<?= $this->endSection(); ?>


<?= $this->section('js_after_content'); ?>
<script src="assets/js/modal-min.js"></script>
<?= $this->endSection(); ?>
