<?php include("server1.php"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>

    <!-- Font Icon -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
    <!-- Main css -->
    <link rel="stylesheet" href="../css/inscription.css">
    <link rel="stylesheet" type="text/css" href="../css/inscription2.css">
</head>
<body>

    <div id="header" style="height: 20px;">

                <div class="inner" >
                 
                    <a href="index.php" class="logo" id="logo">
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
        <div class="container1" style="margin-left:   300px;width: 1000px;">

            <div class="signup-content" >
                
                <div class="signup-form" style="width: 750px;">
                    <form method="POST" class="register-form" id="register-form" >
                        <h2>Contactez-Nous</h2>
                        <?php include('errors.php'); ?>
                        
                            <div class="form-group">
                                <label for="nom">Nom complet :</label>
                                <input type="text" name="NOM_COMPLET"   value="<?php echo $NOM_COMPLET;  ?>"  required>
                            </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email"  name="M_EMAIL"  value="<?php echo $M_EMAIL;  ?>" required>
                        </div>
                           
                        
                        
                            <div class="form-group">
                                <label for="Adresse">Objet :</label>
                                <input type="text" name="OBJET"   value="<?php echo $OBJET;  ?>" >
                            </div>
                            <div class="form-group">
                                <label for="ville">Contenu :</label>
                                <textarea rows="5" cols="70" name="CONTENU"   value="<?php echo $CONTENU;  ?>" required>
                                </textarea> 
                            </div>
                        
    
                        <div class="form-submit" >
                            <input type="reset" value="Restorer" class="submit" name="reset" id="reset" />
                            <button type="submit" value="Valider" name="ajouter_MSS" class="submit"  id="submit">Envoyer le message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <?php include ('footer.php'); ?>

    

</body>
</html>