<?php
@session_start();
include("dbconnection.php");


//error_reporting(0);

//$pourcentage=$_POST["pourcentage"];
$solde=$_POST["solde"];
$telephone=$_POST["stel"];
$_SESSION["telIns"]=$telephone;
$numcli=rand(0015,1587000);
$email=$_POST["semail"];
$_SESSION["emailIns"]=$email;
$adresse=$_POST["adresse"];
$nom=$_POST["snom"];
$prenom=$_POST["snom"];
$image = $_POST["image"];
///echo $email;
$date_naissance=$_POST["sdate"];
//$profession=$_POST["sprofession"];
$pays=$_POST["spays"];
$ville=$_POST["sville"];
echo "fff";

//exit;
    $query="SELECT * FROM client WHERE  email= '".$email."' or tel='".$telephone."' ";
   /// var_dump($query);
	$qresult=@mysql_query($query);
	
    $num_rows = @mysql_num_rows($qresult); 
	
    
    if($num_rows>0)
    {
        //header('Location:register.php?error=3'); exit(0);
    
        echo"<center><b>CES INFORMATIONS SONT DEJA LIEES A UN DE NOS CLIENTS</b><br>VEUILLEZ REESSAYER EN CLIQUANT <a href='signup.php'>ICI</a> SVP!!!";
		/*
        $sql="INSERT INTO Compte(numCpt,codeSecret,numcli,codBan,codtyp,costat ) VALUES ('','','','','','')";
        mysql_query($sql) or die("Unable to Register. Please contact Administrator");
		//envoie du mail au client
		
		 */ 
		
    }else{
		
	$numeroClient=$numcli;
$codeBanque="AZ";
$codeSecret="abcpqd".rand(14,1245);
$numeroCompte=rand(14,12450).rand(98,125708);
$statut2="0";
$codeType="1";
$dateIns=date("Y-m-d");

//traitement photo
//processus de upload d'image

    $dossier="media/";  //$departement."/".$ville."/".$libzone."/";

    @$fichier = basename($_FILES['image']['name']);
    $nomvideo=$fichier;
    $taille_maxi = 100000000000;
    @$taille = filesize($_FILES['image']['tmp_name']);
    $extensions = array('.png', '.gif', '.jpg', '.jpeg','.JPG','.PNG');
//$extensions = array('.mp4','.MP4');
    @$extension = strrchr($_FILES['image']['name'], '.');
//Début des vérifications de sécurité...
    if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
    {
        $erreur = '<b style="color:yellow;">Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...</b>';
    }
    if($taille>$taille_maxi)
    {
        $erreur = 'Le fichier est trop gros...';
    }
    if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
    {
        //On formate le nom du fichier ici...
        $fichier = strtr($fichier,
            'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
            'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
        $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);

        // GUID
        $guidMedia = time();
        $filename = $guidMedia.$extension;
        

        // copie le fichier dans le dossier media
        if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $filename)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
        {
            $statut="Le fichier ".$fichier." a été envoyée avec succes";
            //insertion dans video
           /// $dateAjout=date("y-m-d H:i");
            ///$url=$_SERVER["SERVER_ADDR"]."/".$dossier.$filename;
			$url="/".$dossier.$filename;

            //persistance des données vers la base de données

//fin traitement photo

$sql="INSERT INTO client VALUES ('$numeroClient','$civilite','$nom','$nom','$telephone','1','0','$email','$adresse','$dateIns','$url','$ville','$pays','$date_naissance')";
        $requete=@mysql_query($sql);// or die("Unable to Register. Please contact Administrator").mysql_error();
		if($requete)
         header("Location: creerCompte1.php?numeroClient=$numeroClient&codeBanque=$codeBanque&codeSecret=$codeSecret&numeroCompte=$numeroCompte&statut=$statut2&codeType=$codeType");
		
			
		
	}else{
      echo "La photo n'a pus etre enregistrée. Veuillez réessayez SVP en cliquant <a href=\"signup.php\"><button  class=\"btn btn-black text-uppercase\">ICI
                                </button></a>. Merci";
  }
	
	}
	
	}
	
	


?>