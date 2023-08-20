<?= $this->extend('layout/list') ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="<?= base_url()?>assets/style/css/storages-min.css">
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

<?=$this->section('list'); ?>

<table>
    <thead>
        <tr>
            <th>Nom du lieu de stockage</th>
            <th>Pays</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php

    if(empty($storages_list)) {
        echo '<tr><td colspan="3">Aucun lieu de stockage trouvé</td></tr>';
    } else {
        foreach ($storages_list as $storage) {
            echo '<tr>
                <td>
                    <p><span>'.$storage['name'].'</span>
                    <span class="lighttext">Administrateur</span></p>
                </td>
                <td>'.$storage['country'].'</td>
                <td> <a class="bordered-link" href="storage/'.$storage['id'].'">Voir</a> </td>
                </tr>';
        }
    }

    ?>
    </tbody>
</table>

<?= $this->endSection(); ?>

<?= $this->section('modal'); ?>
<?= view('form_modal/AddStorage'); ?>
<?= $this->endSection(); ?>

<?= $this->section('js_before_content') ?>
<script src="<?= base_url()?>assets/js/modal-min.js"></script>
<?= $this->endSection(); ?>
