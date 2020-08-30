<?php
    ob_start();
?>
<nav class="navabar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarProject">
        <ul class="navbar-nav mr-auto offset-lg-5">
            <li class="nav-item">
                <a href="#" class="nav-link"><button class="btn btn-primary" id="dashboardProjectAdd">Ajouter un projet</button></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" ><button class="btn btn-primary" id="dashboardProjectsList">Voir tous les projets</button></a>
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