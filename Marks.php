<?php
class Marks
{
    private $name;
	private $php;
	private $java;
	private $total;
	
	public function __construct($name,$no1,$no2)
	{
	   $this->name=$name;
	   $this->php=$no1;
	   $this->java=$no2;
	   $this->$total=$this->php+$this->java;
	}
	function add1()
        {
			 return $this->total;
        }
        function writeName()
        {
         	echo $this->name;
        }
}




?>
