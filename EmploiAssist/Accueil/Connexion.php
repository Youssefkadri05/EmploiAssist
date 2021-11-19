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
        <div class="container1" style="margin: 100px;">

            <div class="signup-content">
                <div class="signup-img">
                    <img src="../images/login.png" style="height:  300px;margin-left: 150px;" >
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" >
                        <h2>Connexion</h2>
                        <?php include('errors.php'); ?>
                        
                            
                        <div class="form-group" style="margin-bottom: 2px;">
                            <label for="email">Email :</label>
                            <input type="email" name="Email"  value="<?php echo $C_EMAIL;  ?>" required>
                        </div>
                        <div class="form-group" style="margin-bottom: 2px;">
                            <label for="password1">Mot de passe :</label>
                            <input type="password" name="Password" required>
                        </div>
                        <div class="form-submit">
                            <input type="reset" value="Restorer" class="submit" name="reset" id="reset" />
                            <button type="submit" value="Valider" name="connect" class="submit"  id="submit">Connexion</button>
                            <br><br><a href="inscriptionEN.php" style="color: red;text-decoration: none;font-size: 9pt;">Nouvelle entreprise ?</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="inscriptionCN.php" style="color: red;text-decoration: none;font-size: 9pt;">Nouveau candidat ?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <?php include ('footer.php'); ?>

    

</body>
</html>