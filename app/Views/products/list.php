<?= $this->extend('layout/list') ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="assets/style/css/products-min.css">
<?= $this->endSection(); ?>

<?php
echo $this->section('list');

$table = new \CodeIgniter\View\Table();

$table->setHeading(['Nom du réaprovisionement', 'lieu de stockage', 'Demandé par', 'Status' , 'Action']);

$lines = array(
        '100x seringue',
    'Armoire B4',
    '<a href="" class="bordered-link">Clément Prévost</a>' ,
    '<div class="notice warning">En attente</div>',
    '<a href="" class="bordered-link">Voir</a>'
);

$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);
$table->addRow($lines);

echo $table->generate();

?>

<?= $this->endSection(); ?>
