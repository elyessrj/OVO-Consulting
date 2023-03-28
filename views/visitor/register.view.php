<?php
    ob_start();
?>
<!-- s'inscrire -->
    
<section id="formInscrip">
        <h2>Inscription</h2>
        <form action="<?= URL ?>registerValidation" method="POST">
            <fieldset>
                <legend>S'inscrire chez ovo</legend>
                <input type="text" id="fname" name="firstname" placeholder="Votre prénom" required>

                <input type="text" id="lname" name="lastname" placeholder="Votre nom" required>
            
                <input type="email" name="email" id="mail" placeholder="Votre mail" required>
            
                <input type="password" name="pass" id="pass" placeholder="Votre Mot" required>
            
                <button type="submit">S'inscrire</button>
            </fieldset>
        </form>
    </section>
    <hr>
    <!-- <section id="formConnect">
        <h2>Connexion</h2>
        <form action="#" method="post">
            <fieldset>
                <legend>Votre espace client</legend>
                <label>Nom d'utilisateur</label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
                
                <label>Mot de passe</label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                
                <button type="submit">Connexion</button>
            </fieldset>
        </form>

    </section> -->
<?php
$content=ob_get_clean();
require_once "views/template.php";
?>