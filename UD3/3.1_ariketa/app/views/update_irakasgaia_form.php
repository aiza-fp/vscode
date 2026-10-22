<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aldatu irakasgaiaren izena</title>
</head>

<body>
    <form action="index.php">
        <input type="hidden" name="id_irakasgaia" value="<?=$irakasgaia['id']?>">
        <input type="hidden" name="id_ikaslea" value="<?=$irakasgaia['ikasle_id']?>">
        <input type="text" name="irakasgaia" placeholder="Irakasgaia" value="<?=$irakasgaia['irakasgaia']?>">
        <input type="hidden" name="action" value="eguneratu_irakasgaia">
        <input type="submit" value="Eguneratu">
    </form>
</body>



</html>