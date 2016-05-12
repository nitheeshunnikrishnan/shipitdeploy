<?php
$a=10;
$b='a';
echo $$b;

function addCustomer()
{
	echo 'from Add Customer';
}
$call_function = array('addCustomer');
echo $call_function[0]();
?>