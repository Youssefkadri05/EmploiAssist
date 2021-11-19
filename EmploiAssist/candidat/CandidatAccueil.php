<?php require '../admin/connBD.php';?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>	Candidat : Acceuil </title>
		<meta charset="utf-8" >
		<link rel="stylesheet" href="../css/main.css"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="css/main2.css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">

      	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <style type="text/css">#login{display: none;}</style>

        

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
						<a class="deconnexion" href="index.html">Déconnexion <img src="../images/deconnexion.png" class="menu_image"> </a>
					
					</nav>

                     
                     
				
					
                     
					
					
				</div>
			</div>

		<!-- Banner -->
			<section id="banner">
			</section>

      <div class="espace_rectuteur">
      	
      		<div class="menu_recruteur">
      			<div class="menu1"><a class="menu1_ad" href="#">   Espace Recruteur</a></div>
      			<div class="menu2"><a class="menu1_a" href="#"> <img src="../images/home.png" class="menu_image"> Accueil</a></div>
      			
      			<div class="menu3"><a class="menu1_a" href="#"> <img src="../images/offre.png" class="menu_image"> Recruteurs postulés</a></div>
      			<div class="menu4"><a class="menu1_a" href="#"> <img src="../images/messagerie.png" class="menu_image"> Contact</a></div>
      			<div class="menu5"><a class="menu1_a" href="#"> <img src="../images/admin3.png" class="menu_image"> Mon Profile</a></div>
      		
      		</div>

      		<div class="activite_r">
      			<div class="activite_inter_candidat">
      		<div class="candidat_h"> <h1 class="candidat_trouvez">Trouvez votre futur job</h1><h1 class="candidat_parmi"> parmi plusieurs offres d'emploi</h1></div>
          <div class="div_recherche" >
            
             <input type="text" name="mot_a_rechercher"  placeholder="   Recherche..."  class="recherche_input">

            <img class="recherche_image" src="../images/recherche.png" onclick="alert()">
      

          </div>
          
      				              
          </div>
          <h1 class="activite_recruteur_h"></h1>

            <table class="table2">
    <tr class="colonne_bar">
    	<td class="ceuille" align="center">
        Recruteur
      </td>
      <td class="ceuille" align="center">
        Offres d'emploi suggérées pour vous
      </td>
     
     
    </tr>
    
                          <?php

                               
                                  while($MESSAGE = mysqli_fetch_array($result5)) 
                                   {


                                      echo '<tr class="colonne_simple"> <td  class="ceuille" data-title="Age"><img src="'.$MESSAGE["E_LOGO"]. '"></td> <td  class="ceuille" data-title="Age"><h5>'.$MESSAGE["TITRE"]. '</h5>  <h6> Publiée le '.$MESSAGE["DATE_DEBUT"]. ' Par <b> '.$MESSAGE["E_NOM"]. '</b> </h6><P>'.$MESSAGE["O_DETAILS"].'<a href="#" style="color:blue;"> plus des détails </a></P> </td></tr>';
                  
                                     }

                                  ?>
    
  </table>
          </div>
        </div>



  
  



		    <!-- Footer -->
     <!-- footer_start  -->
    <footer>
        	<div class="footer-top" >
		        <div class="container" >
		        	<div class="row" >
		        		<div class="col-md-3 footer-about wow fadeInUp">
		        			<img class="logo-footer" src="../images/logo.png" style="width: 120px" alt="logo-footer" data-at2x="../images/logo.png">
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