<?= $this->extend('layout/list'); ?>

<?= $this->section('style'); ?>
    <link rel="stylesheet" href="<?= base_url() ?>assets/style/css/replenishment-order-min.css">
<?= $this->endSection(); ?>

<?php
echo $this->section('list');

$table = new \CodeIgniter\View\Table();

$table->setHeading(['Nom du  réaprovisionement', 'Lieu de stockage', 'Demandé par', 'Status' , 'Action']);

$lines = array(
    '100x seringue',
    'Armoire B4',
    'Prévost Clément' ,
    '<div class="notice warning">En attente</div>',
    '<a href="'.base_url().'replenishment/10" class="bordered-link">Voir</a>'
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
<?= view_cell('AddReplenishmentCell'); ?>
<?= $this->endSection(); ?>


<?= $this->section('js_after_content') ?>
<script src="<?= base_url() ?>assets/js/modal-min.js"></script>
<?= $this->endSection(); ?>
