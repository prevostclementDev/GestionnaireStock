<?= $this->extend('layout/list') ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="<?= base_url()?>assets/style/css/products-min.css">
<?= $this->endSection(); ?>

<?php
echo $this->section('list');

$table = new \CodeIgniter\View\Table();

$table->setHeading(['Action réalisé', 'Fait par']);

$lines = array(
    'a supprimer un/des produit(s) : {liste_de_produit}',
    'Prévost Clément'
);

$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);

echo $table->generate();

?>

<?= $this->endSection(); ?>