<?php
/*
Ondorengo baldintzetan oinarrituta kalkulatu zenbat ordaindu beharko den dei batengatik. Deiak beti izango dira zenbaki osoak.
●	3 minututik beherako deiak 10 zentimoko balioa daukate.
●	Minutu gehigarri bakoitzak 5 zentimo balioko ditu.
*/
    $minutuak = 8;
    $kostua = 0;

    if ($minutuak <= 3) {
        $kostua = 10;
    } else {
        $kostua = 10 + ($minutuak - 3) * 5;
    }

    echo 'Minutuak = ', $minutuak, '<br>';
    echo 'Kostua = ', $kostua, ' zentimo<br>';
?>