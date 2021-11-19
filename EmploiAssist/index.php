<?php include ('Accueil/server1.php'); ?>

 
<!DOCTYPE HTML>

<html>
	<head>
		<title>EmploiAssist</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/accueil.css"/>
        <link rel="stylesheet" href="css/accueil2.css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
        <style type="text/css">
        	
        #semi_menu{

        border-collapse: separate;
        border-spacing: 5px 10px;
        height: 100px;
	    background-color: transparent;
		box-shadow: inset 0 0 0 1px #000000;
		color: #ffffff !important;
		border-radius: 30px;
		font-size: 22px;
		text-decoration: none;
		background-color: #ACA6A6;
}
        #semi_menu:hover{
        	background-color: #0ED5C9; 
        }
      .Entr h2{
      	  color: black;
      	   width: 500px;
      	    display: inline-block;
      	    padding: 20px;
      	    
      	     box-shadow: inset 0 0 0 1px #000000;
      	     margin-left: 110px;
      	     margin-top: 90px;
      	     border-radius: 20px;
      	     
      }
      .span_Espace
{
	font-size: 30px;
color: #0ED5C9;
font-weight: bold;
background-color: #0ED5C9;
color: white;
width: 500px;


}

      .bg-modal {
	background-color: rgba(0, 0, 0, 0.8);
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	display: none;
	justify-content: center;
	align-items: center;
}

.modal-contents {
	height: 500px;
	width: 1200px;
	background-color: white;
	text-align: center;
	top: 60px;
	padding: 20px;
	position: relative;
	border-radius: 4px;
}



.close {
	position: absolute;
	top: 	35%;
	right: 15px;
	font-size: 42px;
	color: #333;
	cursor: pointer;
	transform: rotate(45deg);
	&:hover {
		color: #666;
	}
}

.table1 {
  
  width: 100%;
  background-color: violet;
  display: table;
  border: solid 1px red ;
}


.colonne_simple {
  display: table-row;
  background: #f6f6f6;
}
.colonne_simple:nth-of-type(even) {
  background: #e9e9e9;
}
.colonne_bar {
  font-weight: 900;
  color: white;
  background: #0ED5C9;
}


.ceuille {
  padding: 6px 12px;
  display: table-cell;
}


    </style>
    
        

	</head>


	<body>

		<!-- Header --> 
			<div id="header" style="height: 20px;">

				<div class="inner" >
                 
					<a href="index.php" class="logo" id="logo">
						<img src="images/logo.png" style="width: 80px;">
						<Strong style="color: #0ED5C9 ; font-size: 25px">Emploi</strong>
						<i style="font-size: 20px">Assist</i>	 
					</a>
					<nav id="nav">
						<a class="buttona" href="index.php" style="font-size: 13px;">Accueil</a>
					<a class="buttona" href="Accueil/Contact.php" style="font-size: 13px;"> Contact </a>
					<a class="buttona" href="Accueil/apropos.php" style="font-size: 13px;">A propos</a>
					<a href="Accueil/Connexion.php" class="buttona" style="font-size: 13px;">Connexion</a> &nbsp;&nbsp;
						
					</nav>

				</div>
			</div>

		<!-- Banner -->
			<section id="banner" style="height: 10px;padding-bottom: 0px;">
				<div class="inner">
                </div> 
			</section>


        <div class="Entr">
        	  
				
							<h2><div class="span_Espace" style="margin-right: 30px;padding: 0;width: 460px;border-top-right-radius: 20px;border-top-left-radius: 20px;">Entreprise</div> poster votre offre maintenant et remplissez tous vos postes&nbsp;&nbsp; vides ! <br>
								<a  href="Accueil/inscriptionEN.php" style="width: 100px;"  target="BLANK"  id="semi_menu">&nbsp;&nbsp;&nbsp;s'inscrire&nbsp;&nbsp;&nbsp;</a>
							</h2>
							<h2><div class="span_Espace" style="margin-right:10px;padding: 0;width: 460px;border-top-right-radius: 20px;border-top-left-radius: 20px;">Candidat</div> déposer votre CV maintenant et  parcourir des milliers d'offres d'emploi !<br>
                            <a href="Accueil/inscriptionCN.php" target="BLANK"  id="semi_menu" >&nbsp;&nbsp;&nbsp;s'inscrire&nbsp;&nbsp;&nbsp;</a>
							</h2>


        </div>
    
		<!-- Three --><!-- inscription -->
			<section id="three" class="wrapper align-center">


                 




				<div class="inner" id="articles" >
					<div class="flex flex-2">
						<article style="margin-bottom: 20px;">
							<div class="image round">
								<img src="images/pic01.jpg" alt="Pic 01" />
							</div>
							<header>
                             
                             <?php
                                  $sql = "SELECT * FROM ENTREPRISE where E_NOM='CIH banque' "; 
                                   $sql2 = "SELECT * FROM OFFRE where ID_ENTREPRISE= 1 ";
                                  $result = mysqli_query($db, $sql);
                                  $result2 = mysqli_query($db, $sql2);

                                  $row = mysqli_fetch_array($result);
                                  $row2 = mysqli_fetch_array($result2);  
                                       
                                        echo '  
                                       
                                       <h3 style="text-decoration: underline overline;">' .$row["E_NOM"].'</h3><h5>Poste : ' .$row2["TITRE"].'</h5>
                                       </header>
							         <p>Détails : '.$row2["O_DETAILS"]. '</p>

                                        ';  
                                    

                                  ?>

							
							<footer >
								<a href="#" class="button" id="cih" onclick="document.getElementById('articles').style.display='none';document.querySelector('.bg-modal').style.display = 'flex';">Consulter</a>
							</footer>
						</article>
                         
						
						<article>
							<div class="image round">
								<img src="images/pic01.jpg" alt="Pic 02" />
							</div>
							<header>
								<?php
                                  $sql = "SELECT * FROM ENTREPRISE where E_NOM='CIH banque' "; 
                                   $sql2 = "SELECT * FROM OFFRE where ID_ENTREPRISE= 1 ";
                                  $result = mysqli_query($db, $sql);
                                  $result2 = mysqli_query($db, $sql2);

                                  $row = mysqli_fetch_array($result);
                                  $row2 = mysqli_fetch_array($result2);  
                                       
                                        echo '  
                                       
                                       <h3 style="text-decoration: underline overline;">' .$row["E_NOM"].'</h3><h5>Poste : ' .$row2["TITRE"].'</h5>
                                       </header>
							         <p>Détails : '.$row2["O_DETAILS"]. '</p>

                                        ';  
                                    

                                  ?>

							
							<footer>
								<a href="#" class="button" id="cih" onclick="document.getElementById('articles').style.display='none';document.querySelector('.bg-modal').style.display = 'flex';">Consulter</a>
							</footer>
						</article>

						<article>
							<div class="image round">
								<img src="images/pic01.jpg" alt="Pic 02" />
							</div>
							<header>
								<?php
                                  $sql = "SELECT * FROM ENTREPRISE where E_NOM='CIH banque' "; 
                                   $sql2 = "SELECT * FROM OFFRE where ID_ENTREPRISE= 1 ";
                                  $result = mysqli_query($db, $sql);
                                  $result2 = mysqli_query($db, $sql2);

                                  $row = mysqli_fetch_array($result);
                                  $row2 = mysqli_fetch_array($result2);  
                                       
                                        echo '  
                                       
                                       <h3 style="text-decoration: underline overline;">' .$row["E_NOM"].'</h3><h5>Poste : ' .$row2["TITRE"].'</h5>
                                       </header>
							         <p>Détails : '.$row2["O_DETAILS"]. '</p>

                                        ';  
                                    

                                  ?>

							
							<footer>
								<a href="#" class="button" id="cih" onclick="document.getElementById('articles').style.display='none';document.querySelector('.bg-modal').style.display = 'flex';">Consulter</a>
							</footer>
						</article>



						<article>
							<div class="image round">
								<img src="images/pic01.jpg" alt="Pic 01" />
							</div>
							<header>
                             
<?php
                                  $sql = "SELECT * FROM ENTREPRISE where E_NOM='CIH banque' "; 
                                   $sql2 = "SELECT * FROM OFFRE where ID_ENTREPRISE= 1 ";
                                  $result = mysqli_query($db, $sql);
                                  $result2 = mysqli_query($db, $sql2);

                                  $row = mysqli_fetch_array($result);
                                  $row2 = mysqli_fetch_array($result2);  
                                       
                                        echo '  
                                       
                                       <h3 style="text-decoration: underline overline;">' .$row["E_NOM"].'</h3><h5>Poste : ' .$row2["TITRE"].'</h5>
                                       </header>
							         <p>Détails : '.$row2["O_DETAILS"]. '</p>

                                        ';  
                                    

                                  ?>

							
							<footer>
								<a href="#" class="button" id="cih" onclick="document.getElementById('articles').style.display='none';document.querySelector('.bg-modal').style.display = 'flex';">Consulter</a>
							</footer>
						</article>
					</div>
				</div>

<!--class d'affichage des offre de l'entreprise-->
				<div class="bg-modal" id="bg-modal">
	              <div class="modal-contents">

		           <a class="close"  onclick="document.getElementById('bg-modal').style.display='none';document.getElementById('articles').style.display='block';">+</a>
		           <div class="image round">
						<img src="images/pic01.jpg" alt="Pic 01" />
					</div>

		           <?php
                                  $sql = "SELECT * FROM ENTREPRISE where E_NOM='CIH banque' "; 
                                   $sql2 = "SELECT * FROM OFFRE where ID_ENTREPRISE= 1 LIMIT 1";
                                  $result = mysqli_query($db, $sql);
                                  $result2 = mysqli_query($db, $sql2);

                                  $row = mysqli_fetch_array($result);
                                  $row2 = mysqli_fetch_array($result2);  
                                       
                                        echo '  
                                       <h3>' .$row["E_NOM"].'<br /></h3>'; 
                                  ?>

                                  <table class="table1">
    <tr class="colonne_bar">
      <td class="ceuille">
        Titre
      </td>
      <td class="ceuille">
        Nombre des postes
      </td>
      <td class="ceuille">
        Détails de l'offre
      </td>
      <td class="ceuille">
        Début le
      </td>
      <td>
        Fin le
      </td>
      <td>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </td>
    </tr>


                 <?php          $sql2 = "SELECT * FROM OFFRE where ID_ENTREPRISE= 1 LIMIT 6";
                                 $result2 = mysqli_query($db, $sql2);
                                 
                                 while($row2 = mysqli_fetch_array($result2))  
                                     {  
                                       echo '
                                              <tr class="colonne_simple"> <td class="ceuille" data-title="Age">' .$row2["TITRE"]. '</td> <td class="ceuille" data-title="Age">' .$row2["NOMBRE_POSTE"]. '</td> <td class="ceuille" data-title="Age">' .$row2["O_DETAILS"]. '</td> <td class="ceuille" data-title="Age">' .$row2["DATE_DEBUT"]. '<td class="ceuille" data-title="Age">' .$row2["DATE_FIN"]. '</td><td><a href="Inscription/inscriptionCN.php"><img src="images/postuler.png" style="width: 80px;height: 30px;"></a></td> </tr>
                                           ';
                                          
                                           $_SESSION['ID_OFFRES']= $row2["ID_OFFRES"];


                                      ; 
                                  }

                                      ?>
           </table>                           

             	</div>
            </div>
			</section>
    
		    <!-- Footer -->
     <!-- footer_start  -->
    <footer>
        	<div class="footer-top" id="fot" style="height: 280px;padding-top: 10px;">
		        <div class="container" >
		        	<div class="row" >
		        		<div class="col-md-3 footer-about wow fadeInUp">
                        <a href="index.php"><img class="logo-footer" src="images/logo.png" style="width: 120px" alt="logo-footer" data-at2x="images/logo.png"></a>
		        			<p>
		        				Nous sommes une jeune entreprise toujours à la recherche d'idées nouvelles et créatives pour vous aider dans votre vie professionnelle.
		        			</p>
		        			
	                    </div>
		        		<div class="col-md-4 offset-md-1 footer-contact wow fadeInDown">
		        			<h3 style="font-size: 18pt;">Contact</h3>
		                	<p><i class="fas fa-map-marker-alt"></i>Rue 15 el Qods Oujda,Moroc</p>
		                	<p><i class="fas fa-phone"></i> Telephone: (212)6 12 34 56 78</p>
		                	<p><i class="fas fa-envelope"></i> Email: <a href="mailto:EmploiAssist@gmail.com">EmploiAssist@gmail.com</a></p>
		                	<p><i class="fab fa-skype"></i> Skype: EmploiAssist_Skype</p>
	                    </div>
	                    <div class="col-md-4 footer-links wow fadeInUp">
	                    	<div class="row">
	                    		<div class="col">
	                    			<h3 style="font-size: 18pt;">Menu</h3>
	                    		</div>
	                    	</div>
	                    	<div class="row">
	                    		<div class="col-md-6">
	                    			<p><a href="index.php">Accueil</a></p>
	                    			<p><a href="Accueil/Connexion.php">Connexion</a></p>
	                    			<p><a href="Accueil/Contact.php">Contact</a></p>
	                    			<p><a href="Accueil/apropos.php">A propos</a></p>
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