<?= $this->extend('layout/default-logged'); ?>

<?= $this->section('style'); ?>
    <link rel="stylesheet" href="assets/style/css/lists-min.css">
<?= $this->endSection(); ?>

<?= $this->section('interface'); ?>
    <section class="title-container list-page">
        <img src="assets/imgs/product.svg" alt="" class="logoInterface">
        <h1 class="title"><?= $page_title ?></h1>
        <div class="container-title-action">
            <button class="submit_ui_form">Ajouter</button>
        </div>
    </section>

    <section id="list-table-container">
        <div class="action-part">
            <div class="leftpart">
                <form action="" class="groupaction">
                    <select name="" id="">
                        <option value="">Action groupées</option>
                        <input type="submit" value="Action">
                    </select>
                </form>
                <form action="" class="filter">
                    <button id="filter-modal-opener" class="style-type-select"><span>Filtrer par</span>
                        <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.710051 1.70996L3.30005 4.29996C3.39257 4.39267 3.50245 4.46621 3.62343 4.5164C3.7444 4.56658 3.87408 4.59241 4.00505 4.59241C4.13602 4.59241 4.2657 4.56658 4.38668 4.5164C4.50765 4.46621 4.61754 4.39267 4.71005 4.29996L7.30005 1.70996C7.93005 1.07996 7.48005 -3.75022e-05 6.59005 -3.74633e-05L1.41005 -3.72369e-05C0.520051 -3.7198e-05 0.0800513 1.07996 0.710051 1.70996Z" fill="#231E1E" fill-opacity="0.7"/>
                        </svg>
                    </button>
                    <div id="filter-modal" class="formselector">
                        <select name="" id="">
                            <option value="">Colonne</option>
                        </select>
                        <label for=""><input type="text" name="" id="" placeholder="Valeur rechercher"></label>
                        <input type="submit" value="Filtrer">
                    </div>
                </form>
            </div>
            <div class="rightpart">
                <form action="" class="pagination">
                    <span>3 éléments</span>
                    <button class="prev submit_ui_form">
                        <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 1L1 4.5L5 8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <label>
                        <input type="text" value="1">
                    </label>
                    <span class="container-result-number-input">sur 3</span>
                    <button class="next submit_ui_form">
                        <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 1L1 4.5L5 8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        <div class="container-list">
            <?= $this->renderSection('list'); ?>
        </div>
    </section>
<?= $this->endSection(); ?>

<?= $this->section('js_before_content'); ?>
    <script src="assets/js/list-filter-modal-min.js"></script>
<?= $this->endSection(); ?>