<?php
function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a > $b) ? -1 : 1;    //遞增排序用<   ;遞減排序用>
}

$a = array(3, 2, 5, 6, 1);
usort($a, "cmp");       //cmp是自己做的function
foreach ($a as $key => $value) {
    echo "$key: $value <br />";
}

?>