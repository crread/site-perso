<?php ob_start(); ?>
    <h1> test liste des langues</h1>
<?php
    $content = ob_get_clean();
    return $content;
?>