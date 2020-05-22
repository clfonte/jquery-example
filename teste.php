<?php

    $numero = $_GET["numero"];

    if ( $numero == 1 ) echo "<hr>Você digitou 1";

    else if ( $numero == 2) echo "<hr>Você digitou 2";

    else echo "<hr>Você digitou: " . $numero;