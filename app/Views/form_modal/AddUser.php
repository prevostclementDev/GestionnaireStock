<section class="popupform" id="add-user">
    <div class="content-popup">
        <h2>Ajouter un utilisateur</h2>
        <form action="<?= base_url('users') ?>" method="POST">
            <?= csrf_field() ?>
            <label for="">
                <input type="email" name="email" placeholder="Email...">
            </label>
            <label for="">
                <input type="text" name="first_name" placeholder="Nom...">
            </label>
            <label for="">
                <input type="text" name="last_name" placeholder="Prénom...">
            </label>
            <label for="">
                <input type="password" name="password" placeholder="Mot de passe...">
            </label>
            <input type="submit" value="Ajouter">
        </form>
    </div>
</section>
