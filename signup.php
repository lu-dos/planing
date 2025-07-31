<?php
session_start();
require 'db.php';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first = $_POST['firstname'] ?? '';
    $last  = $_POST['lastname'] ?? '';
    $password = $_POST['password'] ?? '';
    if($first && $last && $password) {
        try {
            $stmt = $pdo->prepare('INSERT INTO players (firstname, lastname, password) VALUES (?, ?, ?)');
            $stmt->execute([$first, $last, $password]);
            $_SESSION['user_id'] = $pdo->lastInsertId();
            header('Location: index.php');
            exit;
        } catch (PDOException $e) {
            $error = "Erreur lors de l'inscription";
        }
    } else {
        $error = 'Tous les champs sont requis';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Inscription</title>
<link rel="stylesheet" href="style2.css">
</head>
<body>
<h1>Inscription</h1>
<form method="post">
  <label>Prénom <input type="text" name="firstname" required></label><br>
  <label>Nom <input type="text" name="lastname" required></label><br>
  <label>Mot de passe <input type="password" name="password" required></label><br>
  <button type="submit">S'inscrire</button>
</form>
<?php if ($error): ?>
<p style="color:red;"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>
</body>
</html>
