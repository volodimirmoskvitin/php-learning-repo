<?php
    $num = 12345;
    $str = (string) $num;
    $result = '';
    for ($i = 1; $i <= strlen($str); $i++) {
        $result .= $str[-$i];
    }

    print($result);