<body bgcolor="#CCCCCC">
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp; </p>
    <p><a href="ajout.html">Retour a la page precedante</a></p>
  </div>

 
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion_stock";
$id  = $_POST["id"] ;
 $nom = $_POST["nom"] ;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 

  $sql = "INSERT  INTO categorie (id,  nom)
            VALUES ( '$id', '$nom') " ;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
