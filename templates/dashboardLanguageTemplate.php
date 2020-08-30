<?php
    ob_start();
?>
<nav class="navabar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarLanguage">
        <ul class="navbar-nav mr-auto offset-lg-5">
            <li class="nav-item">
                <a href="#" class="nav-link"><button class="btn btn-primary" id="dashboardLanguageAdd">Ajouter un langage de programmation</button></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" ><button class="btn btn-primary" id="dashboardLanguagesList">Voir tous les langages de programmation</button></a>
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