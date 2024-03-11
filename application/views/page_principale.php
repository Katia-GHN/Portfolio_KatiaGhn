<!DOCTYPE html>
<html lang="en">
    <link href="<?php echo base_url();?>assets/css/custom.css"  rel="stylesheet">

    <!----============== Page Présentation Personnelle =============---->
    <div name="Profil" id="Profil-01"></div>
    <div class="page-content">
        <header class="header">
        <h1> A propos de moi </h1>
        </header>   
    </div>
    <div class="texte-presentation">
        <div class="container ">
        <p> Hello ! Je m’appelle Katia Guerrouahen, développeuse Web junior. Enfin... Prochainement.
            Auparavant, j’ai travaillé en tant que technicienne vidéo en régie de télévision pendant 7ans. 
            Un domaine passionnant qui m'a permis d'acquérir des compétences notamment en informatique, une sensibilité visuelle et bien plus encore.
        </p> 
        <br>
        <p> J'ai eu envie par la suite d'explorer d'autres horizons dans un domaine qui me passionne aussi, celui de la nature.
            Et j'ai ainsi exercé sur Paris en tant que jardinière-animatrice spécialisée en végétalisation du bâti. (murs végétalisés, toitures etc.)
        </p>
        <br>
        <p>Ma curiosité et mes différents projets m'ont motivée à effectuer une reconversion professionnelle dans le Développement Web.
            Aujourd'hui, je suis en train de préparer un BTS Services informatique aux organisations - Solutions Logicielles et Applications Métiers (SLAM).
        </p>
        <br>
        <p> A travers ce portfolio, je présente les différents projets de ma formation, de mon stage chez HÄMYNA ainsi que mes expériences personnelles.</p>
        <p> je vous remercie pour votre visite et à bientôt </p>
        </div>  
    </div>
    <!---------============== Page BTS SIO ============---------------->
    <!-- ancre onglet -->
    <div name="BTS-SIO" id="BTS-02"></div>
    <!-- ....-->
    <div class="page-content">
        <header>
        <h1> Le BTS SIO option SLAM </h1>
        <p> La formation </p>
        </header>
        <br>
        <div class="container">
            <p> BTS SIO option Solutions Logicielles et Applications Métiers propose de former des professionnels au codage d’applications informatiques et à la programmation de solutions logicielles. A l’issue de la formation, les stagiaires accèdent aux compétences de développeur et programmeur informatique. Ils seront capables de participer au développement et au suivi du cycle de vie des applications logicielles.</p>
            <br>
            <a target="_blank" href="https://greta-bretagne.ac-rennes.fr/portail/share/3872635375475683593">
                <button class="btn btn-primary">Site du GRETA-Lannion Formation BTS SIO SLAM</button></a>
        </div>
    </div>
    <!------------------================ PROJETS  =============----------------------->
    <div name="Projet" id="Projet-03"></div>
    <br>
    <div class="page-content">
        <header>
        <h1> Projets </h1>
        <p> Mes projets réalisés lors de ma formation et de mon stage </p>
        </header>   
    </div>
    <div class="container">
    </div>
    <!-------------------======== Veille Informatique  =============------------------>
    <div name="Veille" id="Veille-04"></div>
    <div class="page-content">
        <header>
        <h1> Veille Informatique </h1>
        <p> encore un peu de patience ...</p>
        </header>
        <div class="container">
        <p> Mes différentes recherches</p>
        
        </div>
    </div>
    <!-------------------======== Stage  =============------------------>
    <div name="Stage" id="Stage-05"></div>
    <div class="page-content">
        <header>
        <h1> Stage </h1>
        <p> Période de stage de 10 semaines, voici les différentes taches effectuées</p>
        </header>
        <div class="container">
        <p> Ici les différentes taches</p>
        
        </div>
    </div>

</html>


<script>
    function afficherOnglet(idOnglet) {
    // Masquer tous les contenus d'onglet
    var onglets = document.querySelectorAll('[id^="onglet"]');
    onglets.forEach(function(onglet) {
        onglet.style.display = 'none';
    });

    // Afficher le contenu de l'onglet sélectionné
    document.getElementById(idOnglet).style.display = 'block';
}
</script>