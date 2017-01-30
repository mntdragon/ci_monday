<?php
Class Test_model extends CI_model {

public function getNames(){
	$names=array(
	array("fname"=>'Jim',"lname"=>'Jones'),
	array("fname"=>'Lisa',"lname"=>'Jones'),
	array("fname"=>'Ann',"lname"=>'Smith')
	);
	return $names;
}
}