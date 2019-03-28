
<?php include("fonctions.connect.php");
?>
<?  session_start(); ?>

<?php
$_SESSION['login']=$_POST['login'];
$_SESSION['passwrd']=$_POST['password'];
$login=$_SESSION['login'] ;
$passwrd=$_SESSION['passwrd'] ;

// Creation et envoi de la requete
$connect_db = mysqli_connect("localhost","root","","gestion_stock");

$query = "SELECT * FROM user WHERE login='$login' and passwrd='$passwrd'";
$result = mysqli_query($connect_db,"select * from user"); 
// Recuperation des resultats
if ( mysqli_num_rows($result)==0)

	{


	  require 'authentification.php';}
	  //else
		 // {  require 'index.html';}
   
   
	  ?>

		
