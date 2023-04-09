<?php
    ob_start();
?>
    <!-- section banniere bienvenue id: baniereBvn-->
    <section id="baniereBvn">
        <h1>Bienvenue users</h1>
    </section>

    <!-- section profil -->
    <section id="profil">
        <h2>Mon Profil</h2>
        <form action="#" method="get">
            <fieldset>
                <legend>Modifier mon profil</legend>
                <legend>S'inscrire chez ovo</legend>
                <label for="fname">Prénom</label>
                <input type="text" id="fname" name="firstname" placeholder="Votre prénom" required>

                <label for="lname">Prénom</label>
                <input type="text" id="lname" name="lastname" placeholder="Votre nom" required>
            
                <label for="mail"></label>
                <input type="email" name="email" id="mail" placeholder="Votre mail" required>
            
                <button type="submit">Modifier</button>
            </fieldset>
        </form>
    </section>
    <hr>
    <!-- section suivi du projet -->
    <section id="suivi">
        <h2>Suivi du projet</h2>
        <table>
            <tr>
              <th>Projets</th>
              <th>Suivie</th>
            </tr>
            <tr>
              <td>f</td>
              <td>f</td>
            </tr>
            <tr>
              <td>s</td>
              <td>s</td>
            </tr>
            <tr>
                <td>t</td>
                <td>t</td>
              </tr>
          </table>
    </section>
    
<?php
$content=ob_get_clean();
require_once "views/template.php";
?>
