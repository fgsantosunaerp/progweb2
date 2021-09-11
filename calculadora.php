<?php 

$numero1 = $_GET['num1'];
$numero2 = $_GET['num2'];


class MyCalculator{

    private $num1;
    private $num2;
    private $result;

    function __construct($numb1, $numb2){
        $this->num1 = $numb1;
        $this->num2 = $numb2;
    }

    function add(){
        $this->result = $this->num1 + $this->num2;
        echo $this->result;
    }

    function sub(){
        $this->result = $this->num1 - $this->num2;
        echo $this->result;
    }

    function mult(){
        $this->result = $this->num1 * $this->num2;
        echo $this->result;
    }

    function divide(){
        $this->result = $this->num1 / $this->num2;
        echo $this->result;
    }
}

$mycalc = new MyCalculator($numero1, $numero2);
$mycalc->add();     echo "<br>";
$mycalc->sub();     echo "<br>";
$mycalc->mult();    echo "<br>";
$mycalc->divide();  echo "<br>";

?>