<?php
    $str = '12345';
    $result = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        $result += $str[$i];
    }

    print($result);