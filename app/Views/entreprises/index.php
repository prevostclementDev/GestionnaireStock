<?= $this->extend('layout/default-logged'); ?>

<?= $this->section('style'); ?>
    <link rel="stylesheet" href="<?= base_url()?>assets/style/css/entreprises-min.css">
<?= $this->endSection(); ?>

<?= $this->section('interface'); ?>
    <section class="title-container">
        <h1 class="title">Mon entreprise</h1>
        <div class="additionnal lighttext">SynchroStock</div>
    </section>

    <section id="form-entreprise" class="form">
        <label for="">
            <span>Nom :</span>
            <input type="text" value="SynchroStock">
        </label>
        <label for="">
            <span>Pays :</span>
            <input type="text" value="France">
        </label>
        <div class="action-container">
            <input type="submit" value="Enregistrer">
            <input type="submit" value="Supprimer l'entreprise">
        </div>
    </section>
<?= $this->endSection(); ?>