<?php
    ob_start();
?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <a href="#" class="col-lg-1 offset-lg-1" ><button id="addProjectContent" class="btn btn-primary">Projets</button></a>
            <a href="#" class="col-lg-1 offset-lg-1" ><button id="addlanguagesContent" class="btn btn-primary">langages</button></a>
            <a href="#" class="col-lg-1 offset-lg-1" ><button id="addOptionsContent" class="btn btn-primary">Options</button></a>
            <a href="./logout" class="offset-lg-3 col-lg-1"><button class="btn btn-primary">Déconnexion</button></a>
        </nav>
    </header>
    <main id="dashboardContainer">
    </main>
    <footer>
    </footer>
<?php
    $content = ob_get_clean();
    $javascript = array();
    $javascript[] = "dashboard";
    $javascript[] = "jquery.richtext.min";
    $css[] = "richtext.min";
    require_once(__DIR__."/head.php");
?>