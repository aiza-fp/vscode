<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aldatu</title>
</head>

<body>
    <form action="../app/Router.php">
        <input type="hidden" name="id" value="<?=$ikaslea['id']?>">
        <input type="text" name="izena" placeholder="Izena" value="<?=$ikaslea['izena']?>">
        <input type="text" name="email" placeholder="Email"  value="<?=$ikaslea['email']?>">
        <input type="hidden" name="action" value="eguneratuIkaslea">
        <input type="submit" value="Eguneratu">
    </form>
</body>



</html>