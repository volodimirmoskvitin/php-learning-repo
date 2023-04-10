<?php
    $num = 12345;
    $str = (string) $num;
    $result = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        $result += $str[$i];
    }

    print($result);