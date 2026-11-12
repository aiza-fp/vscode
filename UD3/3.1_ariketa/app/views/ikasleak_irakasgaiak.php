<html>
<body>
<h1>Ikasleak</h1>
<table border="1">
    <tr>
      <td><b>Izena</b></td>
      <td><b>Irakasgaiak</b></td>
    </tr>
  <?php foreach ($ikasleak as $ikaslea): ?>
    <tr>
      <td><?= $ikaslea['izena'] ?></td>
      <td></td>
    </tr>
      <?php foreach ($irakasgaiakIkasleko[$ikaslea['id']] as $irakasgaia): ?>
        <tr>
          <td></td>
          <td><?= $irakasgaia['irakasgaia'] ?></td>
        </tr>
      <?php endforeach; ?>
  <?php endforeach; ?>
  </table>
  <br>
  <a href="index.php">Itzuli</a>
</body>
</html>
