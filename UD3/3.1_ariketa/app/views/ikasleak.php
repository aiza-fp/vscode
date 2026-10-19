<html>
<body>
<h1>Ikasleak</h1>
<table border="1">
    <tr>
      <td><b>Izena</b></td>
      <td><b>E-mail</b></td>
    </tr>
  <?php foreach ($ikasleak as $ikaslea): ?>
    <tr>
      <td><?= $ikaslea['izena'] ?></td>
      <td><?= $ikaslea['email'] ?></td>
      <td><a href="">Irakasgaiak</a></td>
      <td><a href="index.php?action=update_form&id=<?= $ikaslea['id'] ?>">Aldatu</a></td>
      <td><a href="index.php?action=ezabatu&id=<?= $ikaslea['id'] ?>">Ezabatu</a></td>
    </tr>
  <?php endforeach; ?>
  </table>
  <br>
  <a href="index.php?action=create_form">Ikaslea gehitu</a>
</body>
</html>
