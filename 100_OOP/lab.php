<?php

class CAnimal
{

    public $Weight = 0;

    public function __construct($weightValue = 1)
    {
        $this->Weight = $weightValue;
    }

    public function __destruct()
    {
        echo "destroy<br>";
    }
    public function makeNoise()
    {
        echo "Animal:...<br>";
    }
}

class CSobaka extends CAnimal
{
    public $Price = 0;
    public function __construct($priceValue = 0, $weightValue = 0)
    {
        parent::__construct($weightValue);
        $this->Price = $priceValue;
    }

    public function makeNoise()
    {
        parent::makeNoise();
        echo "я одинокая собака.";
    }
}
// $obj = new CAnimal();
// $obj2 = $obj;
// echo "flag 1<br>";
// $obj = null;
// echo "flag 2<br>";
// $obj2 = null;
// echo "flag 3<br>";

$obj = new CSobaka(5, 10);
echo $obj->Price, "<br>";
echo $obj->Weight, "<br>";
$obj->makeNoise();

?>
<HTML></HTML>
