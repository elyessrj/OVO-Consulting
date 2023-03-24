<?php
    ob_start();
?>
    <!-- formulaire de connexion -->
    <section id="formConnect">
        <h2>Connexion</h2>
        <form action="<?= URL ?>loginValidation" method="POST" >
            <fieldset>
                <legend>Votre espace client</legend>
                <label for="mail" >Email de connexion :</label>
                <input type="email" name="mail" id="mail" required>
                
                <label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" id="mdp" placeholder="Entrer le mot de passe" required>
                
                <button type="submit" name="connexion">Connexion</button>
            </fieldset>
        </form>

    </section>
<?php
$content=ob_get_clean();
require_once "views/template.php";
?>