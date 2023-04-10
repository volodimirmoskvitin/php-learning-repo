<?php
    $str = 'abcde';
    
    function reverseString($str) {
        $reverseStr = '';
        for ($i = mb_strlen($str) - 1; $i >= 0; $i--) {
            $reverseStr .= $str[$i];
        }
        return $reverseStr;
    }
    
    print(reverseString($str));