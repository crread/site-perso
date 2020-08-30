<?php
    ob_start();
?>
    <header></header>
    <main id="loginSignupId">
        <div class="container">
            <div class="row">
                <form class="offset-lg-4 col-lg-4" action="./?path=login" method="post">
                    <div class="form-group">
                        <label for="nameFormLogin">nom d'utilisateur</label>
                        <input type="text" class="form-control" name="_nameFormLogin" id="nameFormLogin" placeholder="name" value="<?php if(isset($this->viewData["_nameFormLogin"]) && !empty($this->viewData["_nameFormLogin"])) echo $this->viewData["_nameFormLogin"]; ?>">
                        <?php 
                            if(isset($this->viewData["errors"]["user_login_form"]) && !empty($this->viewData["errors"]["user_login_form"])){ 
                                foreach($this->viewData["errors"]["user_login_form"] as $key => $value){
                                    if($key != "result"){
                            ?>
                                        <div class="invalid-feedback user_error"><?php echo $value ?></div>
                            <?php            
                                    }        
                                }
                            }
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="passwordFormLogin">Mot de passe</label>
                        <input type="password" class="form-control" name="_passwordFormLogin" id="passwordFormLogin" placeholder="password" value="<?php if(isset($this->viewData["_passwordFormLogin"]) && !empty($this->viewData["_passwordFormLogin"])) echo $this->viewData["_passwordFormLogin"]; ?>">
                        <?php 
                            if(isset($this->viewData["errors"]["password_login_form"]) && !empty($this->viewData["errors"]["password_login_form"])){ 
                                foreach($this->viewData["errors"]["password_login_form"] as $key => $value){
                                    if($key != "result"){
                            ?>
                                        <div class="invalid-feedback password_error"><?php echo $value ?></div>
                            <?php            
                                    }        
                                }
                            }
                        ?>
                    </div>
                    <button type="submit" class="btn btn-primary" >envoyer</button>
                </form>
            </div>
        </div>
    </main>
    <footer></footer>
    
<?php
    $content = ob_get_clean();
    $javascript = array();
    $javascript[] = "loginSignup";
    require_once(__DIR__."/head.php");
?>