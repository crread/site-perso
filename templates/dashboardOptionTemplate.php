<?php
    ob_start();
?>
<nav class="navabar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarOption">
        <ul class="navbar-nav mr-auto offset-lg-5">
            <li class="nav-item">
                <a href="#" class="nav-link"><button class="btn btn-primary" id="dashboardOptionAdd">Ajouter une option</button></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" ><button class="btn btn-primary" id="dashboardOptionsList">Voir toutes les options</button></a>
            </li>
        </ul>
    </div>
</nav>
<div id="dashboardProjectContent">
</div>
<?php
    $content = ob_get_clean();
    return $content;
?>