<?php
include ('connexionBD.php');
session_start();
$errors = array();

//Ajouter une entreprise
   $E_NOM = "";
   $E_EMAIL = "";
   $E_VILLE = "";
   $E_PAYS = "";
   $E_ADRESSE = "";
   $E_PASSWORD1 = "";
   $E_PASSWORD2 = "";
   $E_TELEPHONE = "";
   $E_DOMAINE = "";
   $E_DETAILS = "";
   $E_LOGO = "";
if (isset($_POST['ajouter_EN']))
{
   $E_NOM = mysqli_real_escape_string($db, $_POST['E_NOM']);
   $E_EMAIL = mysqli_real_escape_string($db, $_POST['E_EMAIL']);
   $E_VILLE = mysqli_real_escape_string($db, $_POST['E_VILLE']);
   $E_PAYS = mysqli_real_escape_string($db, $_POST['E_PAYS']);
   $E_ADRESSE = mysqli_real_escape_string($db, $_POST['E_ADRESSE']);
   $E_PASSWORD1 = mysqli_real_escape_string($db, $_POST['E_PASSWORD1']);
   $E_PASSWORD2 = mysqli_real_escape_string($db, $_POST['E_PASSWORD2']);
   $E_TELEPHONE = mysqli_real_escape_string($db, $_POST['E_TELEPHONE']);
   $E_DOMAINE = mysqli_real_escape_string($db, $_POST['E_DOMAINE']);
   $E_DETAILS = mysqli_real_escape_string($db, $_POST['E_DETAILS']);

   
//Validation
if($E_PASSWORD1 != $E_PASSWORD2 ){
   array_push($errors, "Erreur à la confirmation de mot de passe !");
    }
//verifier si il exist le mème nom d'utilisateur (ou l'email) exister sur la base de donnees
$user_verifier1 = "SELECT * FROM ENTREPRISE WHERE E_EMAIL = '$E_EMAIL' LIMIT 1 ";
$results1= mysqli_query($db, $user_verifier1);
$user1 = mysqli_fetch_assoc($results1);

if ($user1){
	
	if($user1['E_EMAIL']=== $E_EMAIL){array_push($errors,"Ce email déjat utiliser par un auter utilisateur");}
}

$user_verifier2 = "SELECT * FROM CANDIDATS WHERE C_EMAIL = '$E_EMAIL' LIMIT 1 ";
$results2= mysqli_query($db, $user_verifier2);
$user2 = mysqli_fetch_assoc($results2);

if ($user2){
   
   if($user2['C_EMAIL']=== $E_EMAIL){array_push($errors,"Ce email déjat utiliser par un auter utilisateur");}
}

//crier le compte (pas d'ereur)
if(count($errors)==0){
   $target_dir = "../images/ENlogo/";
   $target_file = $target_dir . basename($_FILES["E_LOGO"][$E_NOM]);
   move_uploaded_file($_FILES["E_LOGO"]["tmp_name"], $target_file);
   $target_dir = "../images/ENlogo/".$E_NOM.".jpg";
	$E_PASSWORD1 =md5($E_PASSWORD2);//md5 crypter le mot de passe 
	$query = "INSERT INTO ENTREPRISE (E_NOM,E_ADRESSE,E_VILLE,E_PAYS,E_TELEPHONE,E_EMAIL,E_PASSWORD,E_LOGO,E_DETAILS,E_DOMAINE) VALUES ('$E_NOM','$E_ADRESSE','$E_VILLE','$E_PAYS','$E_TELEPHONE','$E_EMAIL','$E_PASSWORD1','$target_dir','$E_DETAILS','$E_DOMAINE')";

	mysqli_query($db,$query);
	$_SESSION['E_NOM']= $E_NOM;
   echo "<script type='text/javascript'>
      alert('Compte créer avec succès !');
   </script>";

	header('Refresh: 0; url=../index.php');
}
}

$C_NOM = "";
$C_EMAIL = "";
$C_VILLE = "";
$C_DATE_NAISSANCE = "";
$C_ADRESSE = "";
$C_PASSWORD1 = "";
$C_PASSWORD2 = "";
$C_TELEPHONE = "";
$C_PRENOM = "";
$C_SEXE = "";

 

if (isset($_POST['ajouter_CN']))
{
   $C_NOM = mysqli_real_escape_string($db, $_POST['C_NOM']);
   $C_EMAIL = mysqli_real_escape_string($db, $_POST['C_EMAIL']);
   $C_VILLE = mysqli_real_escape_string($db, $_POST['C_VILLE']);
   $C_DATE_NAISSANCE = mysqli_real_escape_string($db, $_POST['C_DATE_NAISSANCE']);
   $C_ADRESSE = mysqli_real_escape_string($db, $_POST['C_ADRESSE']);
   $C_PASSWORD1 = mysqli_real_escape_string($db, $_POST['C_PASSWORD1']);
   $C_PASSWORD2 = mysqli_real_escape_string($db, $_POST['C_PASSWORD2']);
   $C_TELEPHONE = mysqli_real_escape_string($db, $_POST['C_TELEPHONE']);
   $C_PRENOM = mysqli_real_escape_string($db, $_POST['C_PRENOM']);
   $C_SEXE = mysqli_real_escape_string($db, $_POST['C_SEXE']);
   

   
//Validation
if($C_PASSWORD1 != $C_PASSWORD2 ){
   array_push($errors, "Erreur à la confirmation de mot de passe !");
    }
//verifier si il exist le mème nom d'utilisateur (ou l'email) exister sur la base de donnees
$user_verifier1 = "SELECT * FROM ENTREPRISE WHERE E_EMAIL = '$C_EMAIL' LIMIT 1 ";
$results1= mysqli_query($db, $user_verifier1);
$user1 = mysqli_fetch_assoc($results1);

if ($user1){
   
   if($user1['E_EMAIL']=== $C_EMAIL){array_push($errors,"Ce email déjat utiliser par un auter utilisateur");}
}

$user_verifier2 = "SELECT * FROM CANDIDATS WHERE C_EMAIL = '$C_EMAIL' LIMIT 1 ";
$results2= mysqli_query($db, $user_verifier2);
$user2 = mysqli_fetch_assoc($results2);

if ($user2){
   
   if($user2['C_EMAIL']=== $C_EMAIL){array_push($errors,"Ce email déjat utiliser par un auter utilisateur");}
}


//crier le compte (pas d'ereur)
if(count($errors)==0){
   $C_PASSWORD1 =md5($C_PASSWORD2);//md5 crypter le mot de passe 
   $query = "INSERT INTO CANDIDATS (C_PASSWORD,C_EMAIL,C_NOM,C_PRENOM,C_DATE_NAISSANCE,C_SEXE,C_ADRESSE,C_TELEPHONE,C_VILLE) VALUES ('$C_PASSWORD1','$C_EMAIL','$C_NOM','$C_PRENOM','$C_DATE_NAISSANCE','$C_SEXE','$C_ADRESSE','$C_TELEPHONE','$C_VILLE')";

   mysqli_query($db,$query);
   $_SESSION['C_EMAIL']= $C_EMAIL;
   echo "<script type='text/javascript'>
      alert('Compte créer avec succès !');
   </script>";

   header('Refresh: 0; url=../candidat/CandidatAccueil.php');
}
}

$M_EMAIL="";
$NOM_COMPLET="";
$OBJET="";
$CONTENU="";

if(isset($_POST['ajouter_MSS']))
{
   $NOM_COMPLET = mysqli_real_escape_string($db, $_POST['NOM_COMPLET']);
   $M_EMAIL = mysqli_real_escape_string($db, $_POST['M_EMAIL']);
   $OBJET = mysqli_real_escape_string($db, $_POST['OBJET']);
   $CONTENU = mysqli_real_escape_string($db, $_POST['CONTENU']);
   $DATE_MESSAGE = date('Y:m:d');
   if(count($errors)==0){
      $query = "INSERT INTO MESSAGE (NOM_COMPLET,OBJET,CONTENU,DATE_MESSAGE,M_EMAIL) VALUES ('$NOM_COMPLET','$OBJET','$CONTENU','$DATE_MESSAGE','$M_EMAIL')";
      mysqli_query($db,$query);
      echo "<script type='text/javascript'>
      alert('Message envoyé avec succès !');
   </script>";
      header('Refresh: 0; url=../index.php');
   }

}
 $EMAIL = "";
$PASSWORD= "";
if(isset($_POST['connect'])){

   $EMAIL = mysqli_real_escape_string($db, $_POST['Email']);
   $PASSWORD = mysqli_real_escape_string($db, $_POST['Password']);

   if(count($errors)== 0)
   {

      //$PASSWORD = md5($PASSWORD);
      $query_adminstrateur = "SELECT * FROM administrateur WHERE EMAIL='$EMAIL' AND PASSWORD='$PASSWORD'";
      $result_administrateur = mysqli_query($db, $query_adminstrateur);

      $query_entreprise = "SELECT * FROM entreprise WHERE E_EMAIL='$EMAIL' AND E_PASSWORD='$PASSWORD'";
      $result_entreprise = mysqli_query($db, $query_entreprise);

      $query_candidats = "SELECT * FROM candidats WHERE C_EMAIL='$EMAIL' AND C_PASSWORD='$PASSWORD'";
      $result_candidats = mysqli_query($db, $query_candidats);

      if(mysqli_num_rows($result_administrateur)==1) {

         $_SESSION['Email']= $EMAIL;
         $_SESSION['success']= "Connection   ...";
         header('location: ../Admin/AdminAccueil.php'); 
      }

      else if(mysqli_num_rows($result_entreprise)==1) {

         $_SESSION['Email']= $EMAIL;
         $_SESSION['success']= "Connection   ...";
         header('location: ../Recruteur/RecruteurAccueil.php'); 
      }
      else if(mysqli_num_rows($result_candidats)==1) {

         $_SESSION['Email']= $EMAIL;
         $_SESSION['success']= "Connection   ...";
         header('location: ../Candidat/CandidatAccueil.php'); 
      }

   
      else{array_push($errors,"Email ou mot de passe est incorrect");}
   }
}

 
 