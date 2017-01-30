<?php
//print_r($customers);
foreach ($customers as $row) {
	echo $row['fname'].' '.$row['lname'].'<br>';
}
?>