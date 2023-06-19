<?= $this->extend('layout/list') ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="<?= base_url()?>assets/style/css/user-min.css">
<?= $this->endSection(); ?>

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
    <tr>
        <td>
            <p>
                Clément Prévost
            </p>
        </td>
        <td>
            Non affecté
        </td>
        <td>
            <a href="<?= base_url()?>user/13" class="bordered-link">Voir</a>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                Clément Prévost
            </p>
        </td>
        <td>
            Non affecté
        </td>
        <td>
            <a href="<?= base_url()?>user/13" class="bordered-link">Voir</a>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                Clément Prévost
            </p>
        </td>
        <td>
            Non affecté
        </td>
        <td>
            <a href="<?= base_url()?>user/13" class="bordered-link">Voir</a>
        </td>
    </tr>
    </tbody>
</table>

<?= $this->endSection(); ?>

<?= $this->section('modal') ?>
<?= view_cell('AddUserCell'); ?>
<?= $this->endSection(); ?>

<?= $this->section('js_after_content') ?>
<script src="<?= base_url()?>assets/js/modal-min.js"></script>
<?= $this->endSection(); ?>
