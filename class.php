<?php
class test
{
public $str;
	public function seter($str)
	{
		$this->str= $str;
	}
	public function printer()
	{
		echo $this->str;
	}
}
$obj = new test();
$obj->seter(10);
$obj->printer();
