 <?php

session_start();
//connexion a la base de donnes
$connect =mysqli_connect('localhost','root','','emploiassist') or die("connection à la base de donnèes est imposible");

			$errors = array();

if (isset($_POST['supp_ms']))
                                      {
                                         $supp_ms = mysqli_real_escape_string($connect, $_POST['supp_ms']);
                                        $query = "DELETE FROM message WHERE ID_MESSAGE = '$supp_ms' ";

                                       mysqli_query($connect,$query); 
                                       header('Refresh: 0; url=Admin.php');

                                     }  


								//requet de page administrateur
	$query1 = "SELECT * FROM message order by date_message desc limit 3 ";  
	$result1 = mysqli_query($connect, $query1);
	
	$query1_1 = "SELECT * FROM message order by date_message desc ";  
	$result1_1 = mysqli_query($connect, $query1_1);
	
	$query2 = "SELECT * FROM entreprise order by E_DATE_INSCRIPTION desc limit 1 ";
	$result2 = mysqli_query($connect, $query2);

	$query2_1 = "SELECT * FROM entreprise order by E_DATE_INSCRIPTION desc  ";
	$result2_1 = mysqli_query($connect, $query2_1);
	
	$query3 = "SELECT * FROM profile_candidat,candidats where candidats.ID_c=profile_candidat.ID_c order by candidats.C_DATE_INSCRIPTION desc limit 1 ";
    $result3 = mysqli_query($connect, $query3);

    $query3_1 = "SELECT * FROM profile_candidat,candidats where candidats.ID_c=profile_candidat.ID_c order by candidats.C_DATE_INSCRIPTION desc  ";
    $result3_1 = mysqli_query($connect, $query3_1);
    
	
	
	
                                
    //requet du page recurteur
    $query4 = "SELECT * FROM offre order by date_fin desc limit 4 ";  
    $result4 = mysqli_query($connect, $query4);


     //requet du page candidat
    $query5 = "SELECT * FROM offre ,profile_candidat,entreprise where  O_DETAILS LIKE concat('%',profile_candidat.diplome,'%') and offre.id_entreprise=entreprise.id_entreprise order by date_fin desc limit 4 ";  
    $result5 = mysqli_query($connect, $query5);
     

    //requet du candidat
	//$query5 = "SELECT * FROM offre,entreprise WHERE ( O_DETAILS  LIKE '%$HTTP_POST_VARS["mot_a_rechercher"]%' or TITRE  LIKE '%$mot_a_rechercher%' or E_DETAILS  LIKE '%$mot_a_rechercher%'   OR E_DEMAINE  LIKE '%$mot_a_rechercher%' OR E_NOM  LIKE '%$mot_a_rechercher%' ) and offre.ID_ENTREPRISE=entreprise.ID_ENTREPRISE ";  
    //$result5 = mysqli_query($connect, $query5);

    //requet gerer les compte entreprises
     

    $query7 = "SELECT * FROM entreprise order by E_DATE_INSCRIPTION desc  ";
	$result7 = $connect->query($query7) ;

	$query8 = "SELECT * FROM candidats ";
	$result8 = $connect->query($query8) ;

	$query9 = "SELECT * FROM administrateur";
	$result9 = $connect->query($query9) ;
	//$query6 = " DELETE FROM  entreprise where ID_ENTREPRISE='".$_GET['yy']."'";  
    ///$result6 = mysqli_query($connect, $query6);
    //header("location:gerere.php");

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

 

if (isset($_POST['modifier_CN']))
{
   $C_NOM = mysqli_real_escape_string($connect, $_POST['C_NOM']);
   $C_EMAIL = mysqli_real_escape_string($connect, $_POST['C_EMAIL']);
   $C_VILLE = mysqli_real_escape_string($connect, $_POST['C_VILLE']);
   $C_DATE_NAISSANCE = mysqli_real_escape_string($connect, $_POST['C_DATE_NAISSANCE']);
   $C_ADRESSE = mysqli_real_escape_string($connect, $_POST['C_ADRESSE']);
   $C_PASSWORD1 = mysqli_real_escape_string($connect, $_POST['C_PASSWORD1']);
   $C_PASSWORD2 = mysqli_real_escape_string($connect, $_POST['C_PASSWORD2']);
   $C_TELEPHONE = mysqli_real_escape_string($connect, $_POST['C_TELEPHONE']);
   $C_PRENOM = mysqli_real_escape_string($connect, $_POST['C_PRENOM']);
   $C_SEXE = mysqli_real_escape_string($connect, $_POST['C_SEXE']);
   

   
//Validation
if($C_PASSWORD1 != $C_PASSWORD2 ){
   array_push($errors, "Erreur à la confirmation de mot de passe !");
    }

    if(count($errors)==0){
    	echo "$C_SEXE $C_PRENOM $C_TELEPHONE $C_PASSWORD2 $C_PASSWORD1 $C_ADRESSE $C_DATE_NAISSANCE $C_VILLE $C_EMAIL $C_NOM";
   //md5 crypter le mot de passe 
   $querya = "INSERT INTO CANDIDATS (ID_C,C_PASSWORD,C_EMAIL,C_NOM,C_PRENOM,C_DATE_NAISSANCE,C_SEXE,C_ADRESSE,C_TELEPHONE,C_VILLE) VALUES (22,'$C_PASSWORD1','$C_EMAIL','$C_NOM','$C_PRENOM','$C_DATE_NAISSANCE','$C_SEXE','$C_ADRESSE','$C_TELEPHONE','$C_VILLE')";}
   mysqli_query($connect,$querya);
}
    

                                  
?>