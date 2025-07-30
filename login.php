<?php
session_start();
require 'db.php';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first = $_POST['firstname'] ?? '';
    $last  = $_POST['lastname'] ?? '';
    $password = $_POST['password'] ?? '';
    $stmt = $pdo->prepare('SELECT id FROM players WHERE first=? AND last=? AND pw=?');
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
