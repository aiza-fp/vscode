<html>
<body>
<h1>Produktuak</h1>
<ul>
  <?php foreach ($produktuak as $izena): ?>
    <li><?= htmlspecialchars($izena) ?></li>
  <?php endforeach; ?>
</ul>
</body>
</html>
