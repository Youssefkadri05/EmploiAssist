<?php require 'connBD.php';?>


<!DOCTYPE HTML>

<html>
  <head>
    <title>Gérer compte: Recruteur</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/main.css"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
        
        <script type="text/javascript" src="../js/script.js"></script>
        

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       

         <style type="text/css">
          #login{display: none;}
   
          </style>

 <script>
function sous_menu() {
  var x = document.getElementById("demo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

  </head>


  <body>

    <!-- Header --> 
      <div id="header">

        <div class="inner">
                 
          <a href="index.php" class="logo" id="logo">
            <img src="../images/logo.png" style="width: 80px;">
            <Strong style="color: #0ED5C9 ; font-size: 25px">Emploi</strong>
            <i style="font-size: 20px">Assist</i>  
          </a>
          <nav id="nav">
            <a class="deconnexion" href="../index.php">Déconnexion <img src="../images/deconnexion.png" class="menu_image"> </a>
          
          </nav>

                     
                     
        
          
                     
          
          
        </div>
      </div>

    <!-- Banner -->
      <section id="banner">
      </section>

      <div class="espace_admin">
        
          <div class="menu_admin">
            <div class="menu1"><a class="menu1_ad" href="AdminAccueil.php">   Espace Administrateur</a></div>
            <div class="menu2"><a class="menu1_a" href="AdminAccueil.php"> <img src="../images/home.png" class="menu_image"> Accueil</a></div>
            <div class="menu3"><a class="menu1_a" href="#" onclick="sous_menu()"> <img src="../images/offre.png" class="menu_image"> Gérer les comptes <i class="fa fa-caret-down" ></i></a></div>
              <div id="demo" class="demo w3-dropdown-content w3-bar-block w3-card" style="position: absolute; left: 75%; font-weight: bold; width: 20px; color: white; background-color: #0ED5C9;" >
                <a href="GererEntreprise.php" class="w3-bar-item w3-button">Recruteur</a>
                 <a href="GererCandidat.php" class="w3-bar-item w3-button">Candidat</a>
              </div>


            <div class="menu3"><a class="menu1_a" href="GererOFFRES.php" > <img src="../images/offre.png" class="menu_image"  > Gérer les offres </a></div>    



            <div class="menu4"><a class="menu1_a" href="#"> <img src="../images/messagerie.png" class="menu_image"> Messagerie</a></div>
            <div class="menu5"><a class="menu1_a" href="profileAdmin.php"> <img src="../images/admin3.png" class="menu_image"> Profile</a></div>
          
          </div>

        

          

              

          <div class="activite" id="id_activite">
            
  <div class="activite_h"><h1 class="activite_h1" >les informations de l'entreprise</h1></div>


                             <?php

                               
                                  if ($result7->num_rows > 0) {
                                    while ($row  = $result7->fetch_assoc()) {

                                      ?>
    <form method="POST" class="register-form" id="register-form" >
                                             
                        <table class="table_info">
                        
                            <tr class="tr_info"  >
                                
                              <td class="td_info_left"> Nom :</td> <td class="td_info_right"> <?php echo $row["E_NOM"] ;?> </td>
                            </tr >
                            <tr class="tr_info" style=" position: relative; bottom: 0px;">
                                <td class="td_info_left">Domaine :</td>
                                <td class="td_info_right"><?php echo $row["E_DOMAINE"];  ?></td>
                            </tr >
                            <tr class="tr_info">
                                <td class="td_info_left">Adresse :</td>
                                <td class="td_info_right"><?php echo $row["E_ADRESSE"];  ?></td>
                            </tr >
                                                     
                    
                        <tr class="tr_info">
                            <td class="td_info_left">Email :</td>
                            <td class="td_info_right"><?php echo $row["E_VILLE"];  ?></td>
                        </tr >
                        <tr class="tr_info">
                            <td class="td_info_left">Pays :</td>
                            <td class="td_info_right"> <?php echo $row["E_PAYS"];  ?></td>
                        </tr >
                        <tr class="tr_info" >
                            <td class="td_info_left">Téléphone :</td>
                            <td class="td_info_right"><?php echo $row["E_TELEPHONE"];  ?></td>
                        </tr >
                        <tr class="tr_info">
                            <td class="td_info_left">Email :</td>
                            <td class="td_info_right"><?php echo $row["E_EMAIL"];  ?></td>
                        </tr >
                         <tr class="tr_info" >
                            <td class="td_info_left">Details :</td>
                            <td class="td_info_right"><?php echo $row["E_DETAILS"];  ?></td>
                        </tr >
                       
                      
                        
                          <?php 
                                break;    }
                                  }
                                  

                                      ?>
                                  </table>

                    </form>
                     <button style="position: relative; left: 43%; " type="button" value="Valider" name="ajouter_CN" class="submit"  id="submit">Retour</button>
                    <div style="width: 35%;height: 500px; position: relative;  left: 50%; bottom: 450px;">
                      
                      <img src="<?php echo $row["E_LOGO"];  ?>" style="width: 80%;height: 50%; margin-top: 40px;">


                    </div>
                   


  
  </div>
</div>



        <!-- Footer -->
     <!-- footer_start  -->
    <footer>
          <div class="footer-top" >
            <div class="container" >
              <div class="row" >
                <div class="col-md-3 footer-about wow fadeInUp">
                  <img class="logo-footer" src="images/logo.png" style="width: 120px" alt="logo-footer" data-at2x="images/logo.png">
                  <p>
                    Nous sommes une jeune entreprise toujours à la recherche d'idées nouvelles et créatives pour vous aider dans votre vie professionnelle.
                  </p>
                  
                      </div>
                <div class="col-md-4 offset-md-1 footer-contact wow fadeInDown">
                  <h3>Contact</h3>
                      <p><i class="fas fa-map-marker-alt"></i> Oujda,Moroc</p>
                      <p><i class="fas fa-phone"></i> Telephone: (212)6 12 34 56 78</p>
                      <p><i class="fas fa-envelope"></i> Email: <a href="mailto:EmploiAssist@gmail.com">EmploiAssist@gmail.com</a></p>
                      <p><i class="fab fa-skype"></i> Skype: EmploiAssist_Skype</p>
                      </div>
                      <div class="col-md-4 footer-links wow fadeInUp">
                        <div class="row">
                          <div class="col">
                            <h3>Menu</h3>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <p><a href="#">Accueil</a></p>
                            <p><a href="#">Conseils</a></p>
                            <p><a href="#">Contact</a></p>
                            <p><a href="#">A propos</a></p>
                                                      </div>
                          <div class="col-md-6">
                          </div>
                        </div>
                      </div>
                </div>
            </div>
          </div>
          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                  <div class="col-md-6 footer-copyright">
                        &copy; EmpoiAssist.com by KADRI-YOUSSEF ELMRISSANI-KARIM</a>
                      </div>
                  <div class="col-md-6 footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a> 
              <a href="#"><i class="fab fa-twitter"></i></a> 
              <a href="#"><i class="fab fa-google-plus-g"></i></a> 
              <a href="#"><i class="fab fa-instagram"></i></a> 
              <a href="#"><i class="fab fa-pinterest"></i></a>
                      </div>
                </div>
            </div>
          </div>
        </footer>


        
    <!-- footer_end  -->

  

  </body>
</html>