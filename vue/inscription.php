<?php include "header.php"; ?>

<?php $_SESSION['page'] = "inscription" ?>

<main id="main_inscription">
    <section id="inscription">
        <form action="connexion.php" method="post" class="container">
            <div class="mb-3 row">
                <label for="nom" class="form-label col-xs-6">Nom</label>
                <input name="nom" type="text" class="form-control col-xs-6" id="nom">
            </div>
            <div class="mb-3 row">
                <label for="prenom" class="form-label col-xs-6">Prénom</label>
                <input name="prenom" type="text" class="form-control col-xs-6" id="prenom">
            </div>
            <div class="mb-3 row">
                <label for="telephone" class="form-label col-xs-6">Téléphone</label>
                <input name="telephone" type="text" class="form-control col-xs-6" id="telephone">
            </div>
            <div class="mb-3 row">
                <label for="adresse" class="form-label col-xs-6">Adresse</label>
                <input name="adresse" type="text" class="form-control col-xs-6" id="adresse">
            </div>
            <div class="mb-3 row">
                <label for="email" class="form-label col-xs-6">Adresse email</label>
                <input name="email" type="email" class="form-control col-xs-6" id="email"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3 row">
                <label for="exampleInputPassword1" class="form-label col-xs-6">Mot de passe</label>
                <input name="mdp" type="password" class="form-control col-xs-6" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </section>
</main>

<?php include "Footer.php"; ?>