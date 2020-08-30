<?php
    ob_start();
?>
    <div class="container-fluid">
        <form class="row" action="administration/newProject" id="formNewProject">
            <div class="form-group offset-lg-2 col-lg-8 mt-5">
                <label for="projectName">Nom du projet</label>
                <input type="text" class="form-control toSend" id="projectName" name="name_project">
            </div>
            <div class="form-group offset-lg-2 col-lg-8 mt-1">
                <label for="projectImage">Image du projet</label>
                <input type="text" class="form-control toSend" name="image_project" id="projectImage" >
            </div>
            <div class="form-group offset-lg-2 col-lg-8 mt-1">
                <label for="projectDescriptionCard">Déscription du projet sur la carte</label>
                <textarea class="form-control toSend" id="projectDescriptionCard" rows="3" maxlength="250" name="small_description_project"></textarea>
            </div>
            <div class="form-group offset-lg-2 col-lg-8 mt-1">
                <label for="projectDescription">Déscription du projet</label>
                <textarea id="projectDescription" class="form-control toSend" name="full_description_project"></textarea>
            </div>
            <div class="form-group offset-lg-2 col-lg-8 mt-1">
                <label for="projectYoutubeLink">Lien youtube</label>
                <input type="text" class="form-control toSend" name="youtube_link_project" id="projectYoutubeLink">
            </div>
            <div class="form-group offset-lg-2 col-lg-8 mt-1">
                <label for="projectGithublink">Lien Github</label>
                <input type="text" class="form-control toSend" name="github_link_project" id="projectGithubLink">
            </div>
            <div class="form-group offset-lg-2 col-lg-8 mt-1">
                <input type="button" id="sendDataFormNewProject" class="btn btn-primary" value="Enregister">
            </div>
        </form>
    </div>
<?php
    $content = ob_get_clean();
    return $content;
?>