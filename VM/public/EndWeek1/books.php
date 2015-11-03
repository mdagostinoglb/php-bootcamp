
<?php 

class books
{
	public $id;
	public $title;
	public $price;
	public $description;


	public function __construct($n,$a,$c,$d) 
	{
        $this->id = $n;
        $this->title = $a;
        $this->price = $c;
        $this->description = $d;
    }
}
?>
