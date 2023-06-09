<?= $this->extend('layout/default-logged') ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="assets/style/css/dashboard-min.css">
<?= $this->endSection(); ?>

<?= $this->section('interface'); ?>
    <section class="title-container">
        <h1 class="title">Tableau de bord</h1>
        <p class="subtitle">Bienvenu sur votre espace de gestion de stock</p>
    </section>

    <section id="container-dashboard">
        <section id="last-orders" class="dashboard-section on-primary-background wdth-100">
            <div class="top-dashboard-section">
                <div class="titlepart">
                    <h2>Les dernières commandes</h2>
                </div>
                <div class="actionpart">
                    <a href="" class="submit_ui_form">
                        Toutes les commandes
                    </a>
                    <a href="" class="submit_ui_form">
                        Nouvelle commande
                    </a>
                </div>
            </div>
            <div class="content-dashboard-section">
                <div class="line">
                    <div class="name">
                        100x seringues de perfusions
                    </div>
                    <div class="time">
                        demandé le 12/09/2023 par Clément Prévost
                    </div>
                    <div class="action">
                        <a href="" class="submit_ui_form">Voir</a>
                    </div>
                </div>
                <div class="line">
                    <div class="name">
                        100x seringues de perfusions
                    </div>
                    <div class="time">
                        demandé le 12/09/2023 par Clément Prévost
                    </div>
                    <div class="action">
                        <a href="" class="submit_ui_form">Voir</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="last-logs" class=" dashboard-section on-primary-background wdth-100">
            <div class="top-dashboard-section">
                <div class="titlepart">
                    <h2>Les dernières actions</h2>
                </div>
                <div class="actionpart">
                    <a href="" class="submit_ui_form">
                        Toutes les actions
                    </a>
                </div>
            </div>
            <div class="content-dashboard-section">
                <div class="line">
                    <div class="name">
                        Demande de commande
                    </div>
                    <div class="time">
                        fait le 12/09/2023 par Clément Prévost
                    </div>
                    <div class="action">
                        <a href="" class="submit_ui_form">Voir</a>
                    </div>
                </div>
                <div class="line">
                    <div class="name">
                        Ajout d’un utilisateur
                    </div>
                    <div class="time">
                        fait le 12/09/2023 par Clément Prévost
                    </div>
                    <div class="action">
                        <a href="" class="submit_ui_form">Voir</a>
                    </div>
                </div>
            </div>
        </section>
    </section>
<?= $this->endSection(); ?>
