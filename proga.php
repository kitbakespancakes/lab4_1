<?php
$randomnum = array();
$r = rand(1, 10);
$i = 0;
while ( count($randomnum) < $r )
 {
	if (count($randomnum) < ($r / 2)) {$i++;}
	$randomnum[] = $i;
	if (count($randomnum) > ($r / 2)) {$i--;}
 }
print_r($randomnum);
?>