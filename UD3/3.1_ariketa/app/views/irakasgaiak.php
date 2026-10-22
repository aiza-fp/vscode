<html>
<body>
<h1>Irakasgaiak</h1>
<table border="1">
    <tr>
      <td><b>Irakasgaiak</b></td>
    </tr>
  <?php foreach ($irakasgaiak as $irakasgaia): ?>
    <tr>
      <td><?= $irakasgaia['irakasgaia'] ?></td>
      <td><a href="index.php?action=update_form_irakasgaia&id_irakasgaia=<?= $irakasgaia['id'] ?>">Aldatu</a></td>
      <td><a href="index.php?action=ezabatu_irakasgaia&id_ikaslea=<?= $id_ikaslea ?>&id_irakasgaia=<?= $irakasgaia['id'] ?>">Ezabatu</a></td>
    </tr>
  <?php endforeach; ?>
  </table>
  <br>
  <a href="index.php?action=create_form_irakasgaia&id_ikaslea=<?= $id_ikaslea ?>">Irakasgaia gehitu</a>
  <br>
  <a href="index.php">Itzuli</a>
</body>
</html>
