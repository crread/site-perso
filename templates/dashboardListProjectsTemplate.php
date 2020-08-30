<?php
    ob_start();
?>
    <div class="container mt-3">
        <ul id="listProject" class="list-group list-group-flush offset-lg-1 col-lg-10">
            <?php foreach($this->templateArray as $object){ ?>
                <li id="<?php echo $object->getId()?>" class="list-group-item list-group-item-action"><?php echo $object->getName() ?> </li>
            <?php } ?>
        </ul>
    </div>
<?php
    $content = ob_get_clean();
    return $content;
?>