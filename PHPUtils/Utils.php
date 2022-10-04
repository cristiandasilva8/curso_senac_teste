<?php

class Utils {

    public $romanMap = array(
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000
    );

    public function romanToInt(string $symbol): int {
        $returnValue = 0;
        $nextN = 0;

        for($i=0; $i<strlen($symbol); $i++) {
            $n = $this->romanMap[$symbol[$i]];
            if ($i < strlen($symbol)-1) $nextN = $this->romanMap[$symbol[$i+1]];
            if ($n >= $nextN) $returnValue += $n; else $returnValue -= $n;
        }
        return $returnValue;
    }
}

