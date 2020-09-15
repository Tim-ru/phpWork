<?php
    function test($a, $b, $c, $d) {
        
        if (($a != 0) && is_numeric($a)) {
            if ($b != 0 && is_numeric($b)) {
                if ($c != 0 && is_numeric($c)) {
                    if ($d != 0 && is_numeric($d)) {
                        $x = $y - $b / 3 * $a;
                        $p = pow(-$b, 2) / 3 * pow($a, 2) + $c / $a;
                        $q = (2 * pow($b, 3)) / (27 * pow($a, 2)) - ($b * $c) / (3 * pow($a, 2)) + ($d / $a);
                        $Q = pow(($p / 3), 3) + pow(($q / 2), 2);
                        $alpha = pow((-1 * $q / 2), 0.33333333333) + pow($Q, 0.1666666666666667);
                        $beta  = pow((-1 * $q / 2), 0.33333333333) - pow($Q, 0.1666666666666667);

                        $i = (($alpha - $beta) / 2) * sqrt(3);
                        
                        if ($Q > 0) {
                            return [$alpha + $beta, (-($alpha + $beta) / 2) . "-".$i.'i', 
                                                    (-($alpha + $beta) / 2) . "+".$i.'i'];
                        }
                        //'Если корни - NaN: Gопробуйте другие значения, например: 1, -5, 2, 3'
                    }
                    $D = $b * $b - 4 * $a * $c;
                    if ($D > 0 ) {
                        return [( (-$b - sqrt($D) ) / (2 * $a)) ,( (-$b + sqrt($D) ) / (2 * $a))];
                    }
                    if ($D = 0) {
                        return [( (-$b) / (2 * $a) )];
                    }
                    return ['D < '.$D];
                }
                return [ -$b / $a ]; 
            }
            return [$a];
        }
        return [];

    }
?>