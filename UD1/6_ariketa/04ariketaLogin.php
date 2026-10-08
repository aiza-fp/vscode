<html>
    <head>
    </head>
    <body>
        <h1>Ariketa 601 - Login</h1>
        <form action="04ariketaLoginFrogatu.php" method="post">
			Erabiltzailea: <input type="text" name="erabiltzailea"><br><br>
			Pasahitza: <input type="password" name="pasahitza"><br><br>	
			<input value="Bidali" type="submit">
		</form>

        <?php
            if(isset($_GET['mezua'])) {
                $mezua = $_GET['mezua'];
                if ($mezua == 'OK') {
                    echo '<div style="color:green">Erabiltzaile eta pasahitza zuzenak dira</div><br>';
                } else {
                    echo '<div style="color:red">Erabiltzaile edo/eta pasahitza EZ dira zuzenak</div><br>';
                }
            } 
        ?>

    </body>
</html>