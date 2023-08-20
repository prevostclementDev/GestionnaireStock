<?= $this->extend('layout/list') ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="<?= base_url()?>assets/style/css/user-min.css">
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
        <th>Nom & prénom</th>
        <th>type</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
<?php
foreach ($users_list as $user) {
    ?>
    <tr>
        <td><p><?= $user['first_name'].' '.$user['last_name'] ?></p></td>
        <td><?= $user['type'] ?></td>
        <td><a href="<?= base_url()?>user/<?= $user['id'] ?>" class="bordered-link">Voir</a></td>
    </tr>
    <?php
}
if(count($users_list) === 0) {
    ?>
    <tr><td colspan="3">Aucun utilisateurs trouvés</td></tr>
    <?php
}
?>
    </tbody>
</table>
<?= $this->endSection(); ?>

<?= $this->section('modal') ?>
<?= view('form_modal/AddUser'); ?>
<?= $this->endSection(); ?>

<?= $this->section('js_after_content') ?>
<script src="<?= base_url()?>assets/js/modal-min.js"></script>
<?= $this->endSection(); ?>
