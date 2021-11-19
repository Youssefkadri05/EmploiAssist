<?php include("server1.php"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription - Candidat</title>

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
                    <a href="connexion.php" class="buttona" style="font-size: 13px;">Connexion</a> &nbsp;&nbsp;
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
                    <img src="../images/signup-img.jpg" style="height:  860px;" >
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" enctype="multipart/form-data">
                        <h2>Inscription de candidat</h2>
                        <?php include('errors.php'); ?>
                        
                            <div class="form-group" style="margin-bottom: 2px;">
                                <label for="nom">Nom :</label>
                                <input type="text" name="C_NOM"  value="<?php echo $C_NOM;  ?>"  required>
                            </div>
                            <div class="form-group" style="margin-bottom: 2px;">
                                <label for="prenom">Prénom :</label>
                                <input type="text" name="C_PRENOM"  value="<?php echo $C_PRENOM;  ?>" required>
                            </div>
                        
                        
                            <div class="form-group" style="margin-bottom: 2px;">
                                <label for="DATE_NAISSANCE">Date de naissance :</label>
                                <input type="date" name="C_DATE_NAISSANCE" value="<?php echo $C_DATE_NAISSANCE;  ?>"  required>
                            </div>
                           <div class="form-radio" style="margin-bottom: 2px;">
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
                        
                        
                            <div class="form-group" style="margin-bottom: 2px;">
                                <label for="Adresse">Adresse :</label>
                                <input type="text" name="C_ADRESSE"  value="<?php echo $C_ADRESSE;  ?>" required>
                            </div>
                            <div class="form-group" style="margin-bottom: 2px;">
                                <label for="ville">Ville :</label>
                                <input type="text" name="C_VILLE"  value="<?php echo $C_VILLE;  ?>"  required>
                            </div>
                        
    
                        <div class="form-group" style="margin-bottom: 2px;">
                            <label for="Telephone">Telephone :</label>
                            <input type="tel" maxlength="10" pattern="[0-9]{10}" title="format : 0 suivi par 5 ou 6 ou 7, suivi par 8 chiffres" minlenght="10"  value="<?php echo $C_TELEPHONE;  ?>" name="C_TELEPHONE" required>
                        </div>
                        <div class="form-group" style="margin-bottom: 2px;">
                            <label for="email">Email :</label>
                            <input type="email" name="C_EMAIL"  value="<?php echo $C_EMAIL;  ?>" required>
                        </div>
                        <div class="form-group" style="margin-bottom: 2px;">
                            <label for="password1">Mot de passe :</label>
                            <input type="password" name="C_PASSWORD1" required>
                        </div>
                        <div class="form-group" style="margin-bottom: 2px;">
                            <label for="password2">Confirmer le mot de passe :</label>
                            <input type="password" name="C_PASSWORD2" required>
                        </div>
                        <div class="form-submit">
                            <input type="reset" value="Restorer" class="submit" name="reset" id="reset" />
                            <button type="submit" value="Valider" name="ajouter_CN" class="submit"  id="submit">Créer le compte</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <?php include ('footer.php'); ?>

    

</body>
</html>