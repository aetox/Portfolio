<?php 

      if(isset($_POST['envoyer'])) {
        
        require_once 'recaptcha/autoload.php';
        
        $recaptcha = new \ReCaptcha\ReCaptcha('Clé secrete reCaptcha');
        $resp = $recaptcha->verify($_POST['g-recaptcha-response'],);
        if ($resp->isSuccess()) {
          extract($_POST);
          if(isset($mail) && $mail != "" &&
            isset($object) && $object != "" &&
            isset ($message) && $message != "" ){
             
                $to = "dimitri.kapolas04@gmail.com";
                $subject = "Message provenant de :". $mail;
  
                $message = "
                    <p> Vous reçu un message de <strong> ".$mail."</strong></p>
                    <p> <strong> Object : </strong> ".$object."</p>
                    <p> <strong> Message : </strong> ".$message."</p>
  
                ";
  
                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  
                // More headers
                $headers .= 'From: <'.$mail.'>' . "\r\n";
  
                // envoi du mail
                $send = mail($to,$subject,$message,$headers);
  
                //verification ennvoi mail 
  
                if($send){
                  $_SESSION['succes_message'] = "Message envoyé avec succès !";
                }else {
                  $info = "Une erreur est survenue !";
                }
                
  
  
  
          }else{
            $info = "Veuillez remplir tout les champs !";
          }
          
        } else {
            $errors = $resp->getErrorCodes();
            $info = "Captcha non valide";
          
        }

      }
      
      ?>


<!DOCTYPE html>
<html lang="fr">
  <head>

    <title>Dimitri KAPOLAS</title>

    <meta name="Content-Type" content="UTF-8">
    <meta name="Content-Language" content="fr">
    <meta name="Description" content="Bienvenue sur le portofolio de Dimitri KAPOLAS, cliquez pour en savoir plus.">
    <meta name="Subject" content="Portofolio">
    <meta name="Author" content="Dimitri KAPOLAS">
    <meta name="Identifier-Url" content="www.dimitrikapolas.fr">
    <meta name="Rating" content="general">
    <meta name="Geography" content="Metz,France,57000">
    <meta name="Category" content="engineering">

    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <link rel="stylesheet" href="CSS/project-card.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="icon" href="ASSETS/Dimitri/DK.ico" />
   
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
  </head>

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-HRC7GBDR88"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-HRC7GBDR88');
    </script>

  <header class="en-tete">

      <div id="en-tete" class="load">
        <h1>BONJOUR,</h1>

        <div id="macOsScreen">

          <div id="barre">
            <div id="cercleR"></div>
            <div id="cercleJ"></div>
            <div id="cercleV"></div>
          </div>

          <pre id="typewriter">
            <span class="var-highlight">let</span> alternant = {
                Prenom: <span class="string-highlight">'Dimitri'</span>,
                Nom: <span class="string-highlight">'KAPOLAS'</span>,
                Age: <span class="string-highlight">'23'</span>,
                Competences:[
                            <span class="string-highlight">'Java,Python,Dart,Swift'</span>,
                            <span class="string-highlight">'Javascript,Typescript,HTML,CSS'</span>,
                            <span class="string-highlight">'MySQL,PostgreSQL'</span>,
                            <span class="string-highlight">'Angular,Flutter'</span>,
                            <span class="string-highlight">'API REST, JSON'</span>,
                            <span class="string-highlight">'Git,GitHub'</span>,
                            <span class="string-highlight">'Docker,Virtualisation'</span>,
                            <span class="string-highlight">'VS Code, Xcode, Talend Open Studio'</span>,
                            <span class="string-highlight">'Windows,Mac OS, Linux'</span>];
            }; </pre>

        </div>
        <h2><strong>Scrollez pour en savoir plus !</strong> </h2>
        
      </div>
  
      <span class="material-symbols-outlined">
        keyboard_double_arrow_down
        </span>

    </header>

  <body>

    <div id="content">

      <h1>MES PROJETS</h1>
    
          <div class="project_gallery"></div>
              

      <h1>COMPÉTENCES</h1>

      <div id="skills">
        <div class="group">
            <img src="ASSETS/icons/angular.png" alt="angular">
            <img src="ASSETS/icons/typescript.png" alt="typescript">
            <img src="ASSETS/icons/java.png" alt="java">

      </div>
        <div class="group">
            <img src="ASSETS/icons/flutter.png" alt="flutter">
            <img src="ASSETS/icons/python.png" alt="python">
            <img src="ASSETS/icons/javascript.png" alt="javascript">
        </div>
        <div class="group">
            <img src="ASSETS/icons/swift.png" alt="swift">
            <img src="ASSETS/icons/git.png" alt="GIT">
            <img src="ASSETS/icons/docker.png" alt="docker">
        </div>
    
      </div>

      <h1>PARCOURS</h1>
      <div class="parcours">

  <div class="professionel">
    <h2>Professionnel</h2>
    <div class="dodo">
      <div class="left">
        <img src="ASSETS/OTHER/dodo.png" alt="Logo DODO">
      </div>
      <div class="right">
        <h3>Développeur Back End</h3>
        <div class="content">
          <p>Année : 2023-2024 </p>
          <p>Entreprise : DODO</p>
          <p>Ville : Saint-Avold </p>
          <p>Résumé : Maintenance en condition opérationnelle. Développements de sites web avec JHispter (Angular/Spring Boot). Mise en place et administration d’un wiki pour la DSI. Étude pour l’intégration d’un PIM (Product Information Management).</p>
        </div>
      </div>
    </div>
    <div class="dirisi">
      <div class="left">
        <img src="ASSETS/OTHER/dirisi.svg" alt="Logo DIRISI">
      </div>
      <div class="right">
        <h3>Responsable de projet SIC</h3>
        <div class="content">
          <p>Année : 2021-2023 </p>
          <p>Entreprise : DIRISI</p>
          <p>Ville : Metz </p>
          <p>Résumé : Gestion de projets S.I.C. Création d'architecture réseaux. Mise en place et administration d'une communauté de travail. Configuration et mise en service de commutateurs.</p>
        </div>
      </div>
    </div>
    <div class="kpsdev">
      <div class="left">
        <img src="ASSETS/OTHER/kpsdev.png" alt="Logo KpsDev">
      </div>
      <div class="right">
        <h3>Auto-Entrepreneur</h3>
        <div class="content">
          <p>Année : 2021 </p>
          <p>Entreprise : KPSDEV</p>
          <p>Ville : Metz </p>
          <p>Résumé : Création de devis personnalisés à la spécificité du client. Montage, entretien, réparation de PC. Installation à domicile de la tour et des composants. Développement du site internet.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="SCOLAIRE">
    <h2>Scolaire</h2>
    <div class="master">
      <div class="left">
        <img src="ASSETS/OTHER/Logo_cesi_2022.png" alt="Logo CESI">
      </div>
      <div class="right">
        <h3>Master Manager en architecture et applications logicielles des Systèmes d'Information</h3>
        <div class="content">
          <p>Année : 2024-2026 </p>
          <p>École : CESI</p>
          <p>Ville : Nancy </p>
        </div>
      </div>
    </div>
    <div class="bachelor">
      <div class="left">
        <img src="ASSETS/OTHER/Logo_cesi_2022.png" alt="Logo CESI">
      </div>
      <div class="right">
        <h3>Bachelor Concepteur Développeur d'Application spécialité DEVOPS</h3>
        <div class="content">
          <p>Année : 2023-2024 </p>
          <p>École : CESI</p>
          <p>Ville : Nancy </p>
        </div>
      </div>
    </div>
    <div class="bts">
      <div class="left">
        <img src="ASSETS/OTHER/Logo_cesi_2022.png" alt="Logo CESI">
      </div>
      <div class="right">
        <h3>BTS Technicien Système et Réseaux </h3>
        <div class="content">
          <p>Année : 2021-2023 </p>
          <p>École : CESI</p>
          <p>Ville : Nancy </p>
        </div>
      </div>
    </div>
  </div>
</div>

      <h1>À PROPOS DE MOI</h1>

      <div id="about_me">

        <img src="ASSETS/Dimitri/dimitri.png" alt="Photo Dimitri KAPOLAS">

        <div class="qrCode">

        <p>
        Je m'appelle Dimitri KAPOLAS, un passionné de développement informatique âgé de 23 ans et résidant à Metz. Actuellement, je poursuis mon parcours académique en tant qu'étudiant en Bachelor Concepteur Développeur d'Applications au CESI Nancy. Mon apprentissage se déroule au sein de l'entreprise DODO SAS à Saint-Avold, où j'occupe le rôle de développeur Back-End.
          </p>

        <a href="ASSETS/Dimitri/CV_Kapolas.pdf" download> Télécharger mon CV</a>
        
      </div>



      </div>

      <h1>CONTACT</h1>


      <div id="contact">

            <?php 
            // affiche message d'erreur
                if(isset($info)){ ?>

                  <p class="request_message" style ="color: red">
                  <?=$info?>
                </p>

                  <?php
                }

            ?>

            <?php 
            // affiche message succès
                if(isset($_SESSION['succes_message'])){ ?>

                  <p class="request_message" style ="color:green">
                  <?=$_SESSION['succes_message']?>
                </p>

                  <?php
                }

            ?>


            
        <form method="post" id="demo-form" >
            
          <label for="mail">Mail :</label>
          <input type="mail" name="mail" id="mail" require>

          <label for="object">Object :</label>
          <input type="text" name="object" id="object" require>

          <label for="text"> Votre message :</label>
          <textarea name="message" id="text" cols="30" rows="10" require></textarea>
         
            <!-- CAPTCHA -->

          <div class="g-recaptcha" data-sitekey="6LetwY4jAAAAANlMq4HGDTF_jh4Rr6LwFds4ywUy"></div>
         <button  name="envoyer" > Envoyer</button>
        </form>

        <script>
            function onSubmit(token) {
              document.getElementById("demo-form").submit();
            }
          </script>
 

      </div>


      <h1>RÉSEAUX SOCIAUX</h1>

    </div>
          
    

    <div id="white_block">
        <div class="contact_img">

               <a href="https://www.linkedin.com/in/dimitri-kapolas-195799201/" target="_blank"><img src="ASSETS/CONTACT/Linkedin.png" alt=" Linkedin"></a>
               <a href="https://github.com/aetox" target="_blank"><img src="ASSETS/CONTACT/Github.png" alt=" Github"></a> 

        </div>
    </div>


    <footer>

      <p>DIMITRI KAPOLAS | 2024</p>

    </footer>

        <!-- Models -->
        <script src="JAVASCRIPT/models/project.js"></script>

        <!-- Templates -->
        <script src="JAVASCRIPT/templates/projectCard.js"></script>
    
        <!-- Api -->
        <script src="JAVASCRIPT/api/Api.js"></script>
    
        <!-- Entry point -->
        <script src="JAVASCRIPT/App.js"></script>


        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/greentfrapp/pocoloco@minigl/minigl.js"></script>
        <script src="JAVASCRIPT/functions.js"></script>

  </body>
</html>