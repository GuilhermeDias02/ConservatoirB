<nav class="navbar" navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <?php
        if ($_SESSION['compte'] != "visiteur") {
            echo '
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            ';
        }
        ?>

        <a class="navbar-brand" href="index.php">
            <img class="logo" src="assets/images/logo.png" alt="logo piano" />
        </a>

        <div class="abc">
            <?php
            if ($_SESSION['compte'] != "visiteur") {
                include "vue/recherche.php";
            }
            ?>
        </div>

        <div class="abc">
            <?php
            if ($_SESSION['compte'] != "visiteur") {
                include "vue/raccourcis.php";
            }
            ?>
        </div>

        <?php
        if ($_SESSION['compte'] == "visiteur") {
            echo '<a href="connexion.php">se connecter</a>';
        } else {
            echo "<a href='profil.php'>{$_SESSION['nom']}<br/>{$_SESSION['prenom']}</a>";
        }
        ?>

        <?php
        if ($_SESSION['compte'] != "visiteur") {
            echo '<div class="collapse navbar-collapse" id="navbarScroll">';
            include "vue/recherche.php";
            include "vue/raccourcis.php";
            echo '</div>';
        }
        ?>

    </div>
</nav>