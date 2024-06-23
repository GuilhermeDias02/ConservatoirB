<ul id="liste1" class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
    <li class="nav-item">
        <a class="nav-link" href="planning.php">Planning</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Autres
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="ajouter_eleve.php">Ajouter élève</a></li>
            <li><a class="dropdown-item" href="#">Voir notes</a></li>
        </ul>
    </li>

    <?php
    if ($_SESSION["compte"] == "prof") {
        echo '
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Prof
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Rentrer notes</a></li>
            </ul>
        </li>';
    }
    ?>

    <?php
    if ($_SESSION["compte"] == "admin") {
        echo '
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Admin
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Créer classe</a></li>
                <li><a class="dropdown-item" href="#">Créer cours</a></li>
                <li><a class="dropdown-item" href="#">Inscriptions</a></li>
            </ul>
        </li>';
    }
    ?>

</ul>