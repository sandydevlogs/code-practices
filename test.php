<?php 
 function isMatch($strs) {
    if (empty($strs)) {
        return "";
    }
    sort($strs);
    $first = $strs[0];
    $last = end($strs);
    $length = min(strlen($first), strlen($last));
    $matching = "";
    for ($i = 0; $i < $length; $i++) {
        if ($first[$i] == $last[$i]) {
            $matching .= $first[$i];
        } else {
            break;
        }
    }
   return $matching;
 }
 $strs = ['flower','flow','flight'];
 echo isMatch($strs);
?>