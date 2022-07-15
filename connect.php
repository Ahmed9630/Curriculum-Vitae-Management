<?php
$db=mysqli_connect("localhost","root","","test");
if(!$db)
{
   die("connection failed ".mysqli_connect_error());
}

$Fname = $_POST['Fname'];
$CIN = $_POST['CIN'];
$dateB =$_POST['dateB'];
$email = $_POST['email'];
$Domaine = $_POST['Domaine'];
$number = $_POST['number'];
$nivF = $_POST['nivF'];
$nivE = $_POST['nivE'];
//table
$poste1 = $_POST['poste1'];
$societe1 = $_POST['societe1'];
$dateE1 = $_POST['dateE1'];
$dateS1 = $_POST['dateS1'];

$poste2 = $_POST['poste2'];
$societe2 = $_POST['societe2'];
$dateE2 = $_POST['dateE2'];
$dateS2 = $_POST['dateS2'];

$poste3 = $_POST['poste3'];
$societe3 = $_POST['societe3'];
$dateE3 = $_POST['dateE3'];
$dateS3 = $_POST['dateS3'];



$query="INSERT INTO `webp`(`id`, `Fname`, `CIN`, `dateB`, `email`, `Domaine`, `number`, `nivF`, `nivE`, `poste1`, `societe1`, `dateE1`, `dateS1`, `poste2`, `societe2`, `dateE2`, `dateS2`, `poste3`, `societe3`, `dateE3`, `dateS3`) VALUES
(NULL,'$Fname', '$CIN', '$dateB','$email',' $Domaine', '$number', '$nivF','$nivE' , '$poste1', '$societe1','$dateE1', '$dateS1' , '$poste2', '$societe2','$dateE2', '$dateS2'
 , '$poste3', '$societe3','$dateE3', '$dateS3');";
$result=mysqli_query($db,$query);
        echo($result);
        echo"Registration successfully...";




mysqli_close($db);
?>
