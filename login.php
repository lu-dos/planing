<?php
session_start();
require 'db.php';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first = $_POST['firstname'] ?? '';
    $last  = $_POST['lastname'] ?? '';
    $password = $_POST['password'] ?? '';
    // Les champs dans la base utilisent les noms complets
    // correspondant au formulaire : firstname, lastname et password.
    // On adapte donc la requête en conséquence pour éviter l'erreur
    // "Unknown column 'first'" lors de l'exécution.
    $stmt = $pdo->prepare('SELECT id FROM players WHERE firstname=? AND lastname=? AND password=?');
    $stmt->execute([$first, $last, $password]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: index.php');
        exit;
    } else {
        $error = 'Identifiants invalides';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Connexion</title>
<link rel="stylesheet" href="style2.css">
</head>
<body>
<h1>Connexion</h1>
<form method="post">
  <label>Prénom <input type="text" name="firstname" required></label><br>
  <label>Nom <input type="text" name="lastname" required></label><br>
  <label>Mot de passe <input type="password" name="password" required></label><br>
  <button type="submit">Se connecter</button>
</form>
<?php if ($error): ?>
<p style="color:red;"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>
</body>
</html>
