<?php

    echo 'POST bidez jasotako datuak balidatzen<br>';

    // Pasahitz hizkutu hau ez dago inon gordeta, erabiltzaileak bakarrik ezagutzen du:
    $pasahitza = 'pasahitzSekretua';  
     //Hau da datu basean gordeta duguna eta berreskuratuko genukeena, pasahitzaren hash-a:
    $hash= password_hash($pasahitza, PASSWORD_BCRYPT);

    //Erabiltzaileak bidali dituen datuak jaso:
    $user = $_POST["erabiltzailea"];
    $password = $_POST["pasahitza"];

    $mezua = 'EZ_OK';
    // Jasotako pasahitza datu basean gordeta geneukan hash-arekin konparatzen dugu.
    if (password_verify($password, $hash)) {
        //echo '<div style="color:green">La contraseña es válida</div><br>';
        $mezua = 'OK';
    }
    //Orri zehat bat kargatu parametroak pasatuz:
    header("Location:04ariketaLogin.php?mezua=" . $mezua);
?>