<?= $this->extend('layout/default-logged'); ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="<?= base_url()?>assets/style/css/replenishment-order-min.css">
<?= $this->endSection(); ?>

<?= $this->section('interface'); ?>

<section class="title-container">
    <h1 class="title">100x seringue</h1>
    <div class="notice success">
        Recu
    </div>
</section>

<section class="interface-replenishment">
    <div class="section-replenishment created-at-container">
        <div class="created-at on-primary-background fit-content">
            Créée le 10/06/23
        </div>
    </div>
    <div class="section-replenishment about on-primary-background fit-content">
        <ul class="about-list">
            <li>
                fait par <a href="" class="bordered-link boldtext">Prévost Clément</a>
            </li>
            <li class="bottom-separation">
                Lieu de stockage : <a href="" class="bordered-link boldtext">Armoire B4</a>
            </li>
            <li>
                Quantité à envoyer : <span class="boldtext">300</span>
            </li>
            <li>
                Produit : <a href="" class="bordered-link boldtext">Seringue</a>
            </li>
        </ul>
    </div>
    <div class="section-replenishment about on-primary-background fit-content">
        <p><span class="boldtext">Information client :</span> TRB Chemedica </p>
    </div>
    <div class="section-replenishment about on-primary-background fit-content">
        <ul class="about-list">
            <li>
                Prix de la commande : <span class="boldtext">2000 euros</span>
            </li>
            <li>
                <form action="">
                    <label for="">
                        <select name="" id="">
                            <option value="">Status</option>
                        </select>
                    </label>
                    <input type="submit" value="Changer">
                </form>
            </li>
        </ul>
    </div>
    <div class="section-replenishment action-container">
        <div class="action">
            <form action="">
                <input type="submit" value="Supprimer">
            </form>
        </div>
    </div>
    <div class="section-replenishment note on-primary-background wdth-100">
        <div class="title-container">
            <h2>Note de commande</h2>
            <button class="submit_ui_form" id="addnote-opener">Ajouter</button>
        </div>
        <div class="container-note">
            <div class="note-user">
                <p class="text lighttext">Il faudrai ajuster la commande à 500 éléments pour tenir la période ?</p>
                <p class="about-text">De : <a href="" class="bordered-link">Prévost Clément</a> le 12/09/2023</p>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>

<?= $this->section('modal'); ?>
<?= view_cell('AddNoteCell'); ?>
<?= $this->endSection(); ?>

<?= $this->section('js_after_content'); ?>
<script src="<?= base_url()?>assets/js/modal-min.js"></script>
<?= $this->endSection(); ?>
