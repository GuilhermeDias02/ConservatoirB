<?php include_once "header.php"; ?>

<?php $_SESSION['page'] = "connexion" ?>

<main id="main_connexion">
    <section id="connexion">
        <form action="index.php" method="post" class="container" >
            <div class="mb-3 row">
                <label for="exampleInputEmail1" class="form-label col-xs-6">Adresse email</label>
                <input name="email" type="email" class="form-control col-xs-6" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 row">
                <label for="exampleInputPassword1" class="form-label col-xs-6">Mot de passe</label>
                <input name="mdp" type="password" class="form-control col-xs-6" id="exampleInputPassword1">
            </div>
            <a href="inscription.php">Vous n'avez pas encore de compte ?</a></br>
            </br>
            <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>
    </section>
</main>

<?php include_once "Footer.php"; ?>