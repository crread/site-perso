<?php ob_start(); ?>
    <div class="container-fluid">
        <form class="row" action="administration/newLanguage" id="formNewLanguage">
            <div class="form-group offset-lg-2 col-lg-8 mt-5">
                <label for="LanguageName">Nom du langage</label>
                <input type="text" class="form-control toSend" id="LanguageName" name="name_language">
            </div>
            <div class="form-group offset-lg-2 col-lg-8 mt-1">
                <label for="languageImg">Image du langage</label>
                <input type="text" class="form-control toSend" id="LanguageImg" name="image_language">
            </div>
            <div class="form-group offset-lg-2 col-lg-8 mt-1">
                <input type="button" id="sendDataFormNewLanguage" class="btn btn-primary" value="Enregister">
            </div>
        </form>
    </div>
<?php 
    $result = ob_get_clean(); 
    return $result;
?>