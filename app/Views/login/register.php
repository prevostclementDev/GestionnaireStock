<?= $this->extend('layout/login') ?>

<?= $this->section('formlogin') ?>
<form action="" method="post">
    <?= csrf_field() ?>
    <div class="step_visibility">
        <div class="step1 step_v active">1.</div>
        <div class="step2 step_v">2.</div>
    </div>
    <div class="register step" id="step1">
        <label for="entreprise_name">
            <span>Nom de l'entreprise :</span>
            <input type="text" name="entreprise_name" placeholder="Ex : SynchroStock">
        </label>
        <label for="entreprise_location">
            <span>Pays de l'entreprise :</span>
            <input type="text" name="entreprise_location" placeholder="France, Espagne...">
        </label>
        <div class="submit left">
            <button class="update_step submit_ui_form">Continuer l'inscription</button>
            <a class="bordered-link" href="login/entreprise">Se connecter</a>
        </div>
    </div>
    <div class="register step inactive" id="step2">
        <label for="email">
            <span>Email administrateur :</span>
            <input type="email" name="email" placeholder="Ex : email@domaine.com">
        </label>
        <label for="first_name">
            <span>Nom :</span>
            <input type="text" name="first_name" placeholder="Nom...">
        </label>
        <label for="last_name">
            <span>Prénom :</span>
            <input type="text" name="last_name" placeholder="Prénom...">
        </label>
        <label for="password">
            <span>Mot de passe :</span>
            <input type="password" name="password" placeholder="Mot de passe...">
        </label>
        <div class="submit left">
            <button type="submit">Créer l’espace entreprise</button>
            <a class="bordered-link" href="login/entreprise">Se connecter</a>
        </div>
    </div>
</form>
<?= $this->endSection() ?>

<?= $this->section('js_after_content') ?>
<script src="assets/js/login-min.js"></script>
<?= $this->endSection() ?>
