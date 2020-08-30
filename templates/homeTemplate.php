<?php
ob_start();
?>
<header><?php require_once(__DIR__.'/header.php') ?></header>
<main class="fullpage">
        <section id="firstScreen" class="section active">
            <p>test</p>
        </section>
        <section id="secondScreen" class="section" style="background-color: green">
            <div class="container-fluid">
                <button><a href='./connexion'>connexion</a></button>
            </div>
                <div class="">
                    <h1 id="titleSectionTwo" class="text-center mb-3">Mes derniers projets réalisés</h1>
                    <div id="myCarousel" class="myCarousel">
                        <div class="carousel-item col-md-4">
                            <div class="card">
                            <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f44242/fff" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card 1</h4>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-4">
                            <div class="card">
                            <img class="card-img-top img-fluid" src="http://placehold.it/800x600/418cf4/fff" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card 2</h4>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-4">
                            <div class="card">
                            <img class="card-img-top img-fluid" src="http://placehold.it/800x600/3ed846/fff" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card 3</h4>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-4">
                            <div class="card">
                            <img class="card-img-top img-fluid" src="http://placehold.it/800x600/42ebf4/fff" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card 4</h4>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-4">
                            <div class="card">
                            <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f49b41/fff" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card 5</h4>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                        <div class="carousel-item col-md-4">
                            <div class="card">
                            <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f4f141/fff" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Card 6</h4>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <section class="section" style="background-color: red">
        <foote><?php require_once(__DIR__.'/footer.php') ?></footer>
    </section>
</main>
<?php
$content = ob_get_clean();
$javascript = array();
$javascript[] = "homeJavascript";
$javascript[] = "jquery.onepage-scroll.min";
$css = array();
$css[] = "homeCss";
$css[] = "onepage-scroll";
require_once(__DIR__.'/head.php');
?>