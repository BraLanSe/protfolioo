<?php
// projects.php

// Exemple tableau de projets (tu peux le remplacer par une base de données plus tard)
$projects = [
  [
    "titre" => "Application Web d'Annotation de Messages",
    "description" => "Application pour annoter des messages avec des émotions, réalisée en PHP et JavaScript.",
    "type" => "Projet scolaire",
  ],
  [
    "titre" => "Application de Messagerie Temps Réel",
    "description" => "Système de messagerie avec WebSocket, annotations d’émotions et interface AJAX.",
    "type" => "Projet personnel",
  ],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Mes Projets - Bradley Landim</title>
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
  <header>
    <h1>Mes projets</h1>
    <nav>
      <a href="index.php">Accueil</a>
      <a href="about.php">À propos</a>
      <a href="projects.php">Projets</a>
      <a href="cv.php">CV</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <main>
    <?php foreach ($projects as $proj): ?>
      <article>
        <h2><?= htmlspecialchars($proj['titre']) ?></h2>
        <p><strong>Type :</strong> <?= htmlspecialchars($proj['type']) ?></p>
        <p><?= htmlspecialchars($proj['description']) ?></p>
      </article>
    <?php endforeach; ?>
  </main>

  <footer>
    &copy; 2025 Bradley Landim.
  </footer>
</body>
</html>
