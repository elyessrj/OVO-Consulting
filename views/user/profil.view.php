<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte</title>
    <!-- pour avoir les icones font awesomes -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="shortcut icon" href="../image/ovo_logo.png" type="image/x-icon">
    <script src="../script.js"></script>
</head>
<body>
    <!-- header -->
    <header>
        <!-- menu hamburger -->
        <div class="con">
            <input type="checkbox" id="check" data-valeur="change">
            <label for="check">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>
        <nav>
            <!-- menu desktop normal -->
            <ul id="nav">
                <li><a href="<?= URL.'accueil' ?>">Accueil</a></li>
                <li><a href="<?= URL.'portfolio' ?>">Portfolio</a></li>
                <li><a href="<?= URL.'expertise' ?>">Expertise</a></li>
                <li><a href="<?= URL.'contact' ?>">Contact</a></li>
            </ul>

        </nav>
        <figure>
            <a href="<?= URL.'accueil' ?>"><img src="../image/ovo_logo.png" alt="ovo_logo"></a>
        </figure>
        <div id="btnHead">
                <button><a href="<?= URL.'account/profil' ?>">Mon Compte</a></button>
                <button><a href="<?= URL.'account/logout' ?>">Déconnexion</a></button>
        </div>
        
    </header>
    <!-- section banniere bienvenue id: baniereBvn-->
    <section id="baniereBvn">
        <h2>Bienvenue <?= $data['prenom'] ?></h2>
    </section>

    <!-- section profil -->
    <section id="profil">
        <h2>Mon Profil</h2>
        <form action="<?= URL ?>registerValidation" method="POST">
            <fieldset>
                <legend>Modifier mon profil</legend>
                <br>
                <label for="fname">Prénom</label>
                <input type="text" id="fname" name="firstname" placeholder="Votre prénom" required>
                <br>
                <label for="lname">Nom</label>
                <input type="text" id="lname" name="lastname" placeholder="Votre nom" required>
                <br>
                <label for="mail">Mail</label>
                <input type="email" name="email" id="mail" placeholder="Votre mail" required>
                <br>
                <button type="submit">Modifier</button>
            </fieldset>
        </form>
    </section>
    <hr>
    <!-- section suivi du projet -->
    <section id="suivi">
        <h2>Suivi du projet</h2>
        <table>
            <thead>
                <th>Projets</th>
                <th>Suivie</th>
            </thead>
            <tbody>
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
            </tbody>
          </table>
    </section>
    <!-- footer -->
    <footer>
        <div class="footList">
            <ul>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
            </ul>
        </div>
        <div class="copyr">
            <p>&copy  2023. All rights reserved.</p>
        </div>
        <!-- reseau sociaux -->
        <div class="rSoc">
            <ul>
                <li><a href="https://www.instagram.com/?hl=fr"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/company/ovo-consulting-75/"><i class="fa-brands fa-linkedin-in"></i></a></li>
            </ul>
        </div>
    </footer>
</body>
</html>