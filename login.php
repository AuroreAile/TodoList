<?php 
    require_once __DIR__."/templates/header.php";
    require_once __DIR__."/lib/pdo.php";
    require_once __DIR__."/lib/user.php";

    //tableau d'erreur
    $errors = [];

    if (isset($_POST['loginUser'])) {// isset : vérifier si une variable a bien été définie
        //echo "formulaire envoyé";
        $user = verifyUserLoginPassword($pdo, $_POST['email'], $_POST['password']);
        //stocker utilisateur

        if($user) {
            //on va le connecter => session
        }
        else {
            //afficher une erreur.
            $errors[] ="Email ou mot de passe incorrect";
        }

    }

?>
    
    <div class="container col-xxl-8 px-3 py-5">
        <h1>Se connecter</h1>

        <?php
            //appeler les erreurs
            foreach ($errors as $error) {?>
            <div class="alert alert-danger" role="alert"> <!-- raccourci echo ?=-->
                <?=$error; ?>
            </div>
            <?php }
        ?>

        <form method="post" action="">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <input type="submit" name="loginUser" value="Connexion" class="btn btn-primary">

        </form>
    </div>

<?php require_once __DIR__."/templates/footer.php" ?>