<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sortu</title>
</head>

<body>
    <form action="index.php">
        <input type="text" name="irakasgaia" placeholder="Irakasgaia" value="">
        <input type="hidden" name="action" value="sortu_irakasgaia">
        <input type="hidden" name="id_ikaslea" value="<?= $id_ikaslea ?>">
        <input type="submit" value="Irakasgai berria sortu">
    </form>
</body>

</html>