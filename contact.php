<?php
// contact.php

$message = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nom = htmlspecialchars($_POST['nom'] ?? "");
  $email = htmlspecialchars($_POST['email'] ?? "");
  $message_user = htmlspecialchars($_POST['message'] ?? "");

  if ($nom && filter_var($email, FILTER_VALIDATE_EMAIL) && $message_user) {
    // Ici tu pourrais envoyer un email ou stocker en BDD
    $message = "Merci pour votre message, je vous répondrai rapidement.";
  } else {
    $message = "Veuillez remplir tous les champs correctement.";
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Contact - Bradley Landim</title>
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
  <header>
    <h1>Contactez-moi</h1>
    <nav>
      <a href="index.php">Accueil</a>
      <a href="about.php">À propos</a>
      <a href="projects.php">Projets</a>
      <a href="cv.php">CV</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <main>
    <?php if ($message): ?>
      <p><?= $message ?></p>
    <?php endif; ?>
    <form method="post" action="">
      <label>Nom :</label><br>
      <input type="text" name="nom" required><br>
      <label>Email :</label><br>
      <input type="email" name="email" required><br>
      <label>Message :</label><br>
      <textarea name="message" required></textarea><br>
      <button type="submit">Envoyer</button>
    </form>
  </main>

  <footer>
    &copy; 2025 Bradley Landim.
  </footer>
</body>
</html>
