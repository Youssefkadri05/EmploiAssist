<?php require 'connBD.php';

?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>EmploiAssist</title>
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
      			<div class="menu2"><a class="menu1_a" href="AdminAccueil.php"> <img src="../images/home.png" class="menu_image" onclick="document.getElementById('message_g').style.display='none';document.getElementById('activite_m').style.display='block';"> Accueil</a></div>
      			<div class="menu3"><a class="menu1_a" href="#" onclick="sous_menu()"> <img src="../images/offre.png" class="menu_image"> Gérer les comptes <i class="fa fa-caret-down" ></i></a></div>
              <div id="demo" class="demo w3-dropdown-content w3-bar-block w3-card" style="position: absolute; left: 75%; font-weight: bold; width: 20px; color: white; background-color: #0ED5C9;" >
                <a href="GererEntreprise.php" class="w3-bar-item w3-button">Recruteur</a>
                 <a href="GererCandidat.php" class="w3-bar-item w3-button">Candidat</a>
              </div>


      			<div class="menu3"><a class="menu1_a" href="GererOFFRES.php" > <img src="../images/offre.png" class="menu_image"  > Gérer les offres </a></div>    



      			<div class="menu4"><a class="menu1_a" href="#" onclick="document.getElementById('message_g').style.display='block';document.getElementById('activite_m').style.display='none';"> <img src="../images/messagerie.png" class="menu_image"> Messagerie</a></div>
      			<div class="menu5"><a class="menu1_a" href="profileAdmin.php"> <img src="../images/admin3.png" class="menu_image"> Profile</a></div>
      		
      		</div>
     <div id="activite_m">
          <div class="activite_hidden" id="id_activite_hidden" >
          <div class="activite_h"><h1 class="activite_h1" >Messages reçus</h1></div>
           <div class="activite_message">
             <table class="table1">
        <tr class="colonne_bar">
          <td class="ceuille">
        Email
        </td>
        <td class="ceuille">
        Date
        </td>
        <td class="ceuille">
        Object
        </td>
         <td class="ceuille">
        Message
        </td>
       </tr>

    
  
          <?php

                                 $je=1000;
                                  while($MESSAGE1_1 = mysqli_fetch_array($result1_1))  
                                     {  
                                        
                                        $je+=1;
                                        
                                        
                                        
                                      echo '<tr class="colonne_simple" > 
                                              <td class="ceuille" data-title="Age" >' .$MESSAGE1_1["M_EMAIL"]. '</td>
                                              <td class="ceuille" data-title="Age">' .$MESSAGE1_1["DATE_MESSAGE"]. '</td>
                                              <td class="ceuille" data-title="Age">' .$MESSAGE1_1["OBJET"]. '</td> 
                                              <td class="ceuille"  title="lire plus ">'.substr($MESSAGE1_1["CONTENU"],0,10).'<b id="dots'.$je.'" style="color:blue;">...</b><span id="more'.$je.'" style="display:none;">'.substr($MESSAGE1_1["CONTENU"],10).'</span>
                                                  <span style="color:blue;" onclick="myFunction('.$je.')" id="myBtn'.$je.'">Lire plus</span>
                                               
                                              </td > 
                                            </tr>'


                                      ; 
                                      
                                     }
                                  ?>
                                       
                              
      
    
    
       </table>
        <img src="../images/retour.png" class="images_plus" onclick="affiche_message_moins()">



        </div>
       </div>


          <div class="activite_hidden" id="id_activite_entreprise_hidden" >
          <div class="activite_h"><h1 class="activite_h1" >Entreprises inscrites</h1></div>
           <div class="activite_message">
       <table class="table1" id="table2">
       <tr class="colonne_bar">
       <td class="ceuille">
          Logo
       </td>
       <td class="ceuille">
        Date d'inscription
       </td>
       <td class="ceuille">
        Nom d'entreprise
       </td>
       <td class="ceuille">
        Ville
       </td>
       </tr>
    
    
  
         
                             <?php

                               
                                  while($ENTREPRISE = mysqli_fetch_array($result2_1))  
                                     {  
                                        

                                      echo '<tr class="colonne_simple"> <td class="ceuille" data-title="Age"> <img class="menu_image" src="../images/'.$ENTREPRISE["E_LOGO"].'"></td> <td class="ceuille" data-title="Age">' .$ENTREPRISE["E_DATE_INSCRIPTION"]. '</td> <td class="ceuille" data-title="Age">' .$ENTREPRISE["E_NOM"]. '</td> <td class="ceuille"  >' .$ENTREPRISE["E_VILLE"]. '</td> </tr>'


                                      ; 
                                      
                                     }

                                  ?>
                                       
                              
      
    
    
  </table>
  <img src="../images/retour.png" class="images_plus" onclick="affiche_entreprise_moins()">



</div>
</div>

                   <div class="activite_hidden" id="id_activite_candidats_hidden" >
          <div class="activite_h"><h1 class="activite_h1" >Candidats inscrits</h1></div>
           <div class="activite_message">
     <table class="table1" id="table2">
    <tr class="colonne_bar">
      <td class="ceuille">
        Nom 
      </td>
      <td class="ceuille">
        Date d'inscription
      </td>
      <td class="ceuille">
        Diplôme
      </td>
      <td class="ceuille">
        Email
      </td>
    </tr>
    
    
  
         
                             <?php

                               
                                  while($C = mysqli_fetch_array($result3_1))  
                                     {  
                                        

                                      echo '<tr class="colonne_simple"> <td class="ceuille" data-title="Age">' .$C["C_NOM"].' '.$C["C_PRENOM"]. '</td> <td class="ceuille" data-title="Age">' .$C["C_DATE_INSCRIPTION"]. '</td> <td class="ceuille" data-title="Age">' .$C["DIPLOME"].'</td> <td class="ceuille" data-title="Age">' .$C["C_EMAIL"]. '</td> </tr>'


                                      ; 
                                      
                                     }

                                  ?>
                                       
                              
      
    
    
  </table>
 <img src="../images/retour.png" class="images_plus" onclick="affiche_candidats_moins()">


</div>
</div> 

      		<div class="activite" id="id_activite">
      			<div class="activite_h"><h1 class="activite_h1" >Messages reçus</h1></div>
      			



            <div class="activite_message">
      				



  <table class="table1">
    <tr class="colonne_bar">
      <td class="ceuille">
        Email
      </td>
      <td class="ceuille">
        Date
      </td>
      <td class="ceuille">
        Object
      </td>
      <td class="ceuille">
        Message
      </td>
    </tr>

    
  
          <?php

                                 $i=0;
                                  while($MESSAGE = mysqli_fetch_array($result1))  
                                     {  
                                        
                                        $i+=1;
                                        
                                        
                                        
                                      echo '<tr class="colonne_simple" > 
                                              <td class="ceuille" data-title="Age" >' .$MESSAGE["M_EMAIL"]. '</td>
                                              <td class="ceuille" data-title="Age">' .$MESSAGE["DATE_MESSAGE"]. '</td>
                                              <td class="ceuille" data-title="Age">' .$MESSAGE["OBJET"]. '</td> 
                                              <td class="ceuille"  title="lire plus ">'.substr($MESSAGE["CONTENU"],0,10).'<b id="dots'.$i.'" style="color:blue;">...</b><span id="more'.$i.'" style="display:none;">'.substr($MESSAGE["CONTENU"],10).'</span>
                                                  <span style="color:blue;" onclick="myFunction('.$i.')" id="myBtn'.$i.'">Lire plus</span>
                                               
                                              </td > 
                                            </tr>'


                                      ; 
                                      
                                     }
                                  ?>
                                       
                              
      
    
    
  </table>
  <img src="../images/p.png" class="images_plus" onclick="affiche_message()">
  <div class="activite_h"><h1 class="activite_h1" >Entreprises inscrites</h1></div>
  
   <table class="table1" id="table2">
    <tr class="colonne_bar">
      <td class="ceuille">
        Logo
      </td>
      <td class="ceuille">
        Date d'inscription
      </td>
      <td class="ceuille">
        Nom d'entreprise
      </td>
      <td class="ceuille">
        Ville
      </td>
    </tr>
    
    
  
         
                             <?php

                               
                                  while($ENTREPRISE = mysqli_fetch_array($result2))  
                                     {  
                                        

                                      echo '<tr class="colonne_simple"> <td class="ceuille" data-title="Age"> <img class="menu_image" src="../images/'.$ENTREPRISE["E_LOGO"].'"></td> <td class="ceuille" data-title="Age">' .$ENTREPRISE["E_DATE_INSCRIPTION"]. '</td> <td class="ceuille" data-title="Age">' .$ENTREPRISE["E_NOM"]. '</td> <td class="ceuille"  >' .$ENTREPRISE["E_VILLE"]. '</td> </tr>'


                                      ; 
                                      
                                     }

                                  ?>
                                       
                              
      
    
    
  </table>
   <img src="../images/p.png" class="images_plus" onclick="affiche_entreprise()">

  <div class="activite_h"><h1 class="activite_h1" >Candidats inscrits</h1></div>
    <table class="table1" id="table2">
    <tr class="colonne_bar">
      <td class="ceuille">
        Nom 
      </td>
      <td class="ceuille">
        Date d'inscription
      </td>
      <td class="ceuille">
        Diplôme
      </td>
      <td class="ceuille">
        Email
      </td>
    </tr>
    
    
  
         
                             <?php

                               
                                  while($C = mysqli_fetch_array($result3))  
                                     {  
                                        

                                      echo '<tr class="colonne_simple"> <td class="ceuille" data-title="Age">' .$C["C_NOM"].' '.$C["C_PRENOM"]. '</td> <td class="ceuille" data-title="Age">' .$C["C_DATE_INSCRIPTION"]. '</td> <td class="ceuille" data-title="Age">' .$C["DIPLOME"].'</td> <td class="ceuille" data-title="Age">' .$C["C_EMAIL"]. '</td> </tr>'


                                      ; 
                                      
                                     }

                                  ?>
                                       
                              
      
    
    
       </table>
       <img src="../images/p.png" class="images_plus" onclick="affiche_candidats()">
       </div>


  
 
    
    </div>

  </div>

  <div id="message_g" class="affiche_message" style="display: none;">
       <div class="activite_h"><h1 class="activite_h1" style="margin-left: 100px;" >Messages reçus</h1></div>
            



    <div class="activite_message">
              



  <table class="table1" style="width: 1045px;margin-left: 265px;">
    <tr class="colonne_bar">
      <td class="ceuille">
        Email
      </td>
      <td class="ceuille">
        Date
      </td>
      <td class="ceuille">
        Object
      </td>
      <td class="ceuille">
        Message
      </td>
      <td style="width: 50px;">
        &nbsp;
      </td>
      
    </tr>


      <script type="text/javascript">
        function myFunction1(i) {


  var dots = document.getElementById("dots"+i);
  var moreText = document.getElementById("more"+i);
  var btnText= document.getElementById("myBtn"+i);

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Lire plus"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Lire moins"; 
    moreText.style.display = "inline";
  }
  
}
      </script>
    
  
          <?php
                                $query10 = "SELECT * FROM message order by date_message desc ";  
                                $result10 = mysqli_query($connect, $query10);

                                 
                                 $je=1000;
                                  while($MESSAGE1_1 = mysqli_fetch_array($result10))  
                                     {  
                                        
                                        $je+=1;
                                        
                                        
                                        
                                      echo '<tr class="colonne_simple" > 
                                              <td class="ceuille" data-title="Age" >' .$MESSAGE1_1["M_EMAIL"]. '</td>
                                              <td class="ceuille" data-title="Age">' .$MESSAGE1_1["DATE_MESSAGE"]. '</td>
                                              <td class="ceuille" data-title="Age">' .$MESSAGE1_1["OBJET"]. '</td> 
                                              <td class="ceuille"  title="lire plus ">'.substr($MESSAGE1_1["CONTENU"],0,10).'<b id="dots'.$je.'" style="color:blue;">...</b><span id="more'.$je.'" style="display:none;">'.substr($MESSAGE1_1["CONTENU"],10).'</span>
                                                  <span style="color:blue;" onclick="myFunction1('.$je.')" id="myBtn'.$je.'">Lire plus</span>
                                               
                                              </td > 
                                              <form method="post">

                                              <td><button type="submit" value="'.$MESSAGE1_1["ID_MESSAGE"].'" name="supp_ms"><img src="../images/supprimer.jpg" style="width: 30px;height: 20px;"></button></td>
                                                 
                                              </form>
                                            </tr>'


                                      ; 
                                      
                                     }


                                  ?>

                                       
                              
      
    
    
  </table>
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