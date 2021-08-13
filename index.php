<?php
function combineLists($list1, $list2){
    $combined = array_combine($list1, $list2);
    $out = array();

    foreach ($combined as $digit => $result) {
        array_push($out, "$digit, $result");
    }

    return "[".implode(', ', $out)."]";
}
$list1 = ["a","b","c"];
$list2 = [1,2,3];
echo combineLists($list1, $list2);
?>
