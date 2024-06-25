<div class="row">
    <div class="col-sm-4 mb-3 mb-sm-0 text-center">
        <div class="card bg-primary">
            <div class="card-body">
                <h5 class="card-title">Piano niveau 1</h5>
                <p class="card-text">Des cours de piano pour les débutants</p>
                <?php
                if ($_SESSION['compte'] != "visiteur") {
                    $_SESSION["voir_classe"] = 1;
                    echo '<a href="details_classe.php?classe=1" class="btn btn-primary">Voir</a>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="col-sm-4 mb-3 mb-sm-0 text-center">
        <div class="card bg-primary">
            <div class="card-body">
                <h5 class="card-title">Trompette niveau 4</h5>
                <p class="card-text">Des cours de trompette pour les musiciens confirmés</p>
                <?php
                if ($_SESSION['compte'] != "visiteur") {
                    $_SESSION["voir_classe"] = 2;
                    echo '<a href="details_classe.php?classe=2" class="btn btn-primary">Voir</a>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="col-sm-4 mb-3 mb-sm-0 text-center">
        <div class="card bg-primary">
            <div class="card-body">
                <h5 class="card-title">Violon niveau 2</h5>
                <p class="card-text">Pour les joueurs intermédiaires </p>
                <?php
                if ($_SESSION['compte'] != "visiteur") {
                    $_SESSION["voir_classe"] = 3;
                    echo '<a href="details_classe.php?classe=3" class="btn btn-primary">Voir</a>';
                }
                ?>
            </div>
        </div>
    </div>
</div>