<?= $this->extend('layout/list') ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="assets/style/css/storages-min.css">
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
            <a href="" class="bordered-link">Voir</a>
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
            <a href="" class="bordered-link">Voir</a>
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
            <a href="" class="bordered-link">Voir</a>
        </td>
    </tr>
    </tbody>
</table>

<?= $this->endSection(); ?>
