<?= $this->extend('layout/list') ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="<?= base_url()?>assets/style/css/storages-min.css">
<?= $this->endSection(); ?>

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
    <tr>
        <td>
            <p>
                <span>Armoire B4</span>
                <span class="lighttext">Membre - Sélectionnée</span>
            </p>
        </td>
        <td>
            Suisse
        </td>
        <td>
            <a href="<?= base_url()?>storage/13" class="bordered-link">Voir</a>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span>Armoire B4</span>
                <span class="lighttext">Membre - Sélectionnée</span>
            </p>
        </td>
        <td>
            Suisse
        </td>
        <td>
            <a href="<?= base_url()?>storage/13" class="bordered-link">Voir</a>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                <span>Armoire B4</span>
                <span class="lighttext">Administrateur</span>
            </p>
        </td>
        <td>
            Suisse
        </td>
        <td>
            <a href="<?= base_url()?>storage/13" class="bordered-link">Voir</a>
        </td>
    </tr>
    </tbody>
</table>

<?= $this->endSection(); ?>

<?= $this->section('modal'); ?>
<?= view_cell('AddStorageCell'); ?>
<?= $this->endSection(); ?>

<?= $this->section('js_before_content') ?>
<script src="<?= base_url()?>assets/js/modal-min.js"></script>
<?= $this->endSection(); ?>
