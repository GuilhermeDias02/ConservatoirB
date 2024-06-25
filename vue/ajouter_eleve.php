<?php include_once "header.php"; ?>

<?php include_once "navbar.php"; ?>

<?php $_SESSION['page'] = "ajout_eleve" ?>

<main id="main_inscription">
    <section id="inscription">
        <form action="verif_ajout_eleve.php" method="post" class="container">
            <div class="mb-3 row">
                <label for="nom" class="form-label col-xs-6">Nom</label>
                <input name="nom" type="text" class="form-control col-xs-6" id="nom">
            </div>
            <div class="mb-3 row">
                <label for="prenom" class="form-label col-xs-6">Prénom</label>
                <input name="prenom" type="text" class="form-control col-xs-6" id="prenom">
            </div>
            <div class="mb-3 row">
                <label for="date_naissance" class="form-label col-xs-6">Date de naissance</label>
                <input name="date_naissance" type="date" class="form-control col-xs-6" id="date_naissance">
            </div>
            <div class="form-check form-switch">
                <label class="form-check-label" for="soi_meme">Soi même</label>
                <input name="soi_meme" class="form-check-input" type="checkbox" role="switch" id="soi_meme">
            </div>
            <button type="submit" class="btn btn-primary">Inscrire élève</button>
        </form>
    </section>
</main>

<?php include_once "Footer.php"; ?>