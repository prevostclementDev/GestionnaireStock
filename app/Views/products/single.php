<?= $this->extend('layout/default-logged'); ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="<?= base_url()?>assets/style/css/products-min.css">
<?= $this->endSection(); ?>

<?= $this->section('interface') ?>
<section class="title-container">
    <h1 class="title">Seringue à perfusion</h1>
    <div class="subtitle"><p>Emplacement : Etagère B</p></div>
</section>

<!--<div class="subtitle form"><p>Emplacement :</p>-->
<!--    <form action="">-->
<!--        <label for="">-->
<!--            <input type="text" value="Etagère B">-->
<!--        </label>-->
<!--        <input type="submit" value="Modifier">-->
<!--    </form></div>-->

<section class="details">
    <section class="quantity on-primary-background fit-content">
        <h2>Quantité dans l'entreprôt</h2>

        <form action="" class="quantityForm">
            <label for="">
                <input type="number" value="100">
            </label>
            <input type="submit" value="Mettre à jour">
        </form>
    </section>
    <section class="quantity on-primary-background fit-content">
        <h2>Quantité dans l'entreprôt</h2>
        <p class="error-text">Quantité faible</p>
        <form action="" class="quantityForm">
            <label for="">
                <input type="number" value="100">
            </label>
            <input type="submit" value="Mettre à jour">
        </form>
    </section>
    <section class="quantity on-primary-background fit-content">
        <h2>Quantité dans l'entreprôt</h2>
        <p class="lighttext">Aucun entrepôt selectionné</p>
    </section>
    <section class="quantity on-primary-background fit-content">
        <h2>Quantité dans l'entreprôt</h2>
        <p class="lighttext">Le produit n’est pas dans l’entrepôt</p>
        <button class="submit_ui_form">Lier à l'entrepôt</button>
    </section>
    <section class="seuil on-primary-background fit-content">
        <h2>Seuil de quantité faible</h2>

        <div class="levelRegister">
            <p>Enregistré sur <span>10</span></p>
        </div>
    </section>
    <section class="seuil form on-primary-background fit-content">
        <h2>Seuil de quantité faible</h2>

        <form class="levelRegister" action="" method="">
            <label for=""><span class="lighttext">Enregistré sur </span><input value="5" type="number"></label>
            <input type="submit" value="Modifier">
        </form>
    </section>
</section>
<?= $this->endSection(); ?>
