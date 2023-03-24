<?php
    ob_start();
?>
<section id="sect_portfolio">
        <h2>galerie de portfolio</h2>
        <!-- 6 projets realiser par OVO-->
        <div class="projects">
            <div class="project">
                <figure class="project_img">
                    <a href="<?= URL.'contact' ?>"><img src="./image/projet-x-clusif.png" alt="projet x-clusif"></a>                
                </figure>
                <div class="project_content">
                    <h3>projet x-clusif</h3>
                    <button><a href="<?= URL.'contact' ?>">NOUS CONTACTER</a></button>   
                </div>
            </div>
            <div class="project">
                <figure class="project_img">
                    <a href="https://www.bmw.am/en/index.html"><img src="./image/projet-bmw.png" alt="projet-bmw"></a>
                </figure>
                <div class="project_content">
                    <h3>projet BMW</h3>
                    <button><a href="<?= URL.'contact' ?>">NOUS CONTACTER</a></button>
                </div>
            </div>
            <div class="project">
                <figure class="project_img">
                    <a href="https://jobjob-app.com/"><img src="./image/projet-jobjob-1.png" alt="projet-jobjob"></a>
                </figure>
                <div class="project_content">
                    <h3>projet jobjob</h3>
                    <button><a href="<?= URL.'contact' ?>">NOUS CONTACTER</a></button>
                </div>
            </div>
            <div class="project">
                <figure class="project_img">
                    <a href="http://www.antiquitedufutur.com/"><img src="./image/projet-antiquitedufutur.png" alt="projet-antiquitedufutur"></a>
                </figure>
                <div class="project_content">
                    <h3>projet antiquité du futur</h3>
                    <button><a href="<?= URL.'contact' ?>">NOUS CONTACTER</a></button>
                </div>
            </div>
            <div class="project">
                <figure class="project_img">
                    <a href="https://la-java.fr/"><img src="./image/logo-lajava.png" alt="projet-lajava"></a>
                </figure>
                <div class="project_content">
                    <h3>projet la java</h3>
                    <button><a href="<?= URL.'contact' ?>">NOUS CONTACTER</a></button>
                </div>
            </div>
            <div class="project">
                <figure class="project_img">
                    <a href="https://lve-app.com/"><img src="./image/projet-lve-1.png" alt="projet-lve"></a>
                </figure>
                <div class="project_content">
                    <h3>projet l've</h3>
                    <button><a href="<?= URL.'contact' ?>">NOUS CONTACTER</a></button>
                </div>
            </div>
        </div>
        
    </section>
    <hr>
    <!-- entreprises partenaires -->
    <section id="reference">
        <h2>nos références</h2>
        <div id="nosRef">
            <figure class="logoRef">
                <img src="./image/logo-BMW.png" alt="logo BMW">
            </figure>
            <figure class="logoRef">
                <img src="./image/logo-jobjob.png" alt="logo jobjob">
            </figure>
            <figure class="logoRef">
                <img src="./image/logo-lajava.png" alt="logo lajava">
            </figure>
            <figure class="logoRef">
                <img src="./image/logo-lve.png" alt="logo l've">
            </figure>
            <figure class="logoRef">
                <img src="./image/logo-lvepro.png" alt="logo l've pro">
            </figure>
            <figure class="logoRef">
                <img src="./image/logo-xclusif.png" alt="logo x-clusif">
            </figure>
            
        </div>
    </section>
<?php
$content=ob_get_clean();
require_once "views/template.php";
?>