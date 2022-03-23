<?php require("inc/header.php"); ?>

<div class="container" id="root">
    <div class="row align-items-center h-100">
        <div class="col-sm-12">
            <?php
            if(isset($_SESSION["authenticated"]) && $_SESSION["authenticated"] == true)
            {
                echo '<h2 class="text-center text-success"> Usuario(a) <b>'.$_SESSION['username'].'</b> autenticado. </h2>';
            }
            else
            {
                echo '<h2 class="text-center text-danger"> Acesso negado.</h2>';
                echo '<p class="text-center"> Faca <a href="/login.php">login</a> para acessar essa area.</p>';
            }
            ?>
        </div>
    </div>
</div>

<?php require("inc/footer.php"); ?>
