<?php
$a=array("A","Cat","Dog","A","Dog");
$temp = $ar_count = array();
foreach($a as $key =>$value)
{
	if(isset($count[$value]))
		$count[$value]++;
	else
		$count[$value]=1;
}
print_r($count);
$MyArray=array("A","B","B","Dog","A","Dog");
$temp = array();
foreach($MyArray as $key =>$value)
{
 $temp[$value]++; 
}
print_r($temp);
?>