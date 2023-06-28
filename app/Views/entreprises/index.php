<?= $this->extend('layout/default-logged'); ?>

<?= $this->section('style'); ?>
    <link rel="stylesheet" href="<?= base_url()?>assets/style/css/entreprises-min.css">
<?= $this->endSection(); ?>

<?= $this->section('interface'); ?>

    <?php
    if(!empty(validation_errors())) {

        ?>
        <div class="notice error global-notice"><?= validation_list_errors(); ?></div>
        <?php
    }
    ?>

    <section class="title-container">
        <h1 class="title">Mon entreprise</h1>
        <div class="additionnal lighttext"><?= $entreprise['name'] ?></div>
    </section>

    <section id="form-entreprise" class="form">
        <form action="<?= base_url('entreprise') ?>" method="post">
            <?= csrf_field() ?>
            <label for="name">
                <span>Nom :</span>
                <input type="text" name="name" value="<?= $entreprise['name'] ?>">
            </label>
            <label for="country">
                <span>Pays :</span>
                <input type="text" name="country" value="<?= $entreprise['country'] ?>">
            </label>
            <div class="action-container">
                <input type="submit" value="Enregistrer">
                <a class="submit_ui_form" href="<?= base_url('entreprise/delete/'.$entreprise['id']) ?>">Supprimer l'entreprise</a>
            </div>
        </form>
    </section>
<?= $this->endSection(); ?>