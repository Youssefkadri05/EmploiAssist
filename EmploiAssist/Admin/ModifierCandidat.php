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
      			
  


                             <?php

                               
                                  if ($result8->num_rows > 0) {
                                    while ($row  = $result8->fetch_assoc()) {

                                      ?>
    <form method="POST" class="register-form" id="register-form" >
                            <?php include('errors.php'); ?>      
                        
                            <div >
                                <label for="nom">Nom :</label>
                                <input type="text" name="C_NOM"  value="<?php echo $row["C_NOM"] ;?>"  required class="input_profile" >
                            </div>
                            <div style=" position: relative; bottom: 60px; left: 500px;">
                                <label for="prenom">Prénom :</label>
                                <input type="text" name="C_PRENOM"  value="<?php echo $row["C_PRENOM"];  ?>" required class="input_profile" >
                            </div>
                        
                        
                            <div style="position: relative;bottom: 40px;">
                                <label for="DATE_NAISSANCE">Date de naissance :</label>
                                <input type="date" name="C_DATE_NAISSANCE" value="<?php echo $row["C_DATE_NAISSANCE"];  ?>" class="input_profile" required>
                            </div>
                           <div class="form-radio" style="margin-bottom: 2px; position: relative; bottom: 100px; left: 500px; ">
                            <label for="C_SEXE"  class="radio-label">Sexe :</label>
                            <div class="form-radio-item">
                                <input type="radio" value="Homme" name="C_SEXE" id="male" checked>
                                <label for="male">Homme</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" value="Femme" name="C_SEXE" id="female">
                                <label for="female">Femme</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        
                        
                            <div style="position: relative; bottom: 100px; ">
                                <label for="Adresse">Adresse :</label>
                                <input type="text" name="C_ADRESSE"  value="<?php echo $row["C_ADRESSE"];  ?>" required class="input_profile" >
                            </div>
                            <div style="position: relative;bottom: 165PX; left: 500px;">
                                <label for="ville">Ville :</label>
                                <input type="text" name="C_VILLE"  value="<?php echo $row["C_VILLE"];  ?>"  required class="input_profile" >
                            </div>
                        
    
                        <div style="position: relative;bottom: 135px;  " >
                            <label for="Telephone">Telephone :</label>
                            <input type="tel" maxlength="10" pattern="[0-9]{10}" title="0-(5,6,7)-12345678" minlenght="10"  value="<?php echo $row["C_TELEPHONE"];  ?>" name="C_TELEPHONE" required class="input_profile" >
                        </div>
                        <div style="position: relative;bottom: 200px; left: 500px; ">
                            <label for="email">Email :</label>
                            <input type="email" name="C_EMAIL"  value="<?php echo $row["C_EMAIL"];  ?>" required class="input_profile" >
                        </div>
                        <div style="position: relative;bottom: 180px;">
                            <label for="password1">Mot de passe :</label>
                            <input type="password" name="C_PASSWORD1" required style=" height: 30px; border: solid 1px #0ED5C9; background-color: white;color: black;" >
                        </div>
                        <div style="position: relative;bottom: 240px; left: 500px;" >
                            <label for="password2">Confirmer le mot de passe :</label>
                            <input type="password" name="C_PASSWORD2" required style=" height: 30px; border: solid 1px #0ED5C9; background-color: white; color: black" >
                        </div>
                        <div style="position: relative; bottom: 190px;left: 290px;" >
                            <input type="reset" value="Annuler" class="submit" name="reset" id="reset" style=" background-color: red; color: white;" />
                            <button type="submit" value="Valider" name="modifier_CN" class="submit"  id="submit">Modiffier</button>
                        </div>
                          <?php 
                                break;    }
                                  }
                                  

                                      ?>
                    </form>
  
  </div>
</div>



		    <!-- Footer -->
     <!-- footer_start  -->
    <footer>
        	<div class="footer-top" >
		        <div class="container" >
		        	<div class="row" >
		        		<div class="col-md-3 footer-about wow fadeInUp">
		        			<img class="logo-footer" src="../images/logo.png" style="width: 120px" alt="logo-footer" data-at2x="images/logo.png">
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