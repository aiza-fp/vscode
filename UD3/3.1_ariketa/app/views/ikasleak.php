<html>
<body>
<h1>Ikasleak</h1>
<table>
  <?php foreach ($ikasleak as $ikaslea): ?>
    <tr>
      <td><?= $ikaslea['izena'] ?></td>
      <td><?= $ikaslea['email'] ?></td>
    </tr>
  <?php endforeach; ?>
  </table>
</body>
</html>
