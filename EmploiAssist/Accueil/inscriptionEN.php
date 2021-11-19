<?php include("server1.php"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription - Entreprise</title>

    <!-- Font Icon -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
 
    <!-- Main css -->
    <link rel="stylesheet" href="../css/inscription.css">
    <link rel="stylesheet" type="text/css" href="../css/inscription2.css">
</head>
<body>

    <div id="header" style="height: 20px;">

                <div class="inner" >
                 
                    <a href="../index.php" class="logo" id="logo">
                        <img src="../images/logo.png" style="width: 80px;">
                        <Strong style="color: #0ED5C9 ; font-size: 25px">Emploi</strong>
                        <i style="font-size: 20px">Assist</i>    
                    </a>
                    <nav id="nav">
                        <a class="buttona" href="../index.php" style="font-size: 13px;">Accueil</a>
                    <a class="buttona" href="Contact.php" style="font-size: 13px;"> Contact </a>
                    <a class="buttona" href="apropos.php" style="font-size: 13px;">A propos</a>
                    <a href="Connexion.php" class="buttona" style="font-size: 13px;">Connexion</a> &nbsp;&nbsp;
                        
                    </nav>

                     <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
                    

                </div>
            </div>

        <!-- Banner -->
            <section id="banner" style="height: 10px;padding-bottom: 0px;">
                
            </section>
    
     <div class="main">
        <div class="container1">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="../images/signup-img1.jpg" style="height: 965px;">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" enctype="multipart/form-data">
                        <h2>Inscription d'entreprise</h2>
                        <?php include('errors.php'); ?>
                        
                            <div class="form-group">
                                <label for="name">Nom d'entreprise :</label>
                                <input type="text" name="E_NOM" value="<?php echo $E_NOM; ?>"  required>
                            </div>
                            <div class="form-group">
                                <label for="Logo">Logo :</label>
                                <input type="file" name="E_LOGO"  required>
                            </div>
                        
                        <div class="form-group">
                            <label for="domaine">Domaine :</label>
                            <input type="text" name="E_DOMAINE" value="<?php echo $E_DOMAINE; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Adresse :</label>
                            <input type="text" name="E_ADRESSE" value="<?php echo $E_ADRESSE ?>"  required>
                        </div>
                        
                            <div class="form-group">
                                <label for="ville">Ville :</label>
                                <input type="text" name="E_VILLE" value="<?php echo $E_VILLE; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="pays">Pays :</label>
                                <input type="text" name="E_PAYS"  value="<?php echo $E_PAYS; ?>" required>
                            </div>
                        
                        <div class="form-group">
                            <label for="birth_date">Description :</label>
                            <input type="text" name="E_DETAILS" value="<?php echo $E_DETAILS;  ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="pincode">Telephone :</label>
                            <input type="tel" maxlength="10" pattern="[0-9]{10}" title="format : 0 suivi par 5 ou 6 ou 7, suivi par 8 chiffres" minlenght="10" name="E_TELEPHONE" value="<?php echo $E_TELEPHONE; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="course">Email :</label>
                            <input type="email" name="E_EMAIL" value="<?php echo $E_EMAIL; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="password1">Mot de passe :</label>
                            <input type="password" name="E_PASSWORD1" required>
                        </div>
                        <div class="form-group">
                            <label for="password2">Confirmer le mot de passe :</label>
                            <input type="password" name="E_PASSWORD2" required>
                        </div>
                        
                        <div class="form-submit">
                            <input type="reset" value="Restorer" class="submit" name="reset" id="reset" >
                            <button type="submit" value="Valider" name="ajouter_EN" class="submit"  id="submit">Créer le compte</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <?php include ('footer.php'); ?>

    

</body>
</html>