<?php

class Calculator
{
/* Class to build a calculator */
//    var $firstNumber = 0, $secondNumber = 0, $operator;
//    public function __construct($firstNumber, $secondNumber, $operator)
//    {
//        $this->firstNumber = $firstNumber;
//        $this->secondNumber = $secondNumber;
//        $this->operator = $operator;
//    }
//
//    public function calculate(){
//        if ($this->operator == "add"){
//            $result = $this->firstNumber + $this->secondNumber;
//        }
//        if ($this->operator == "subtract"){
//            $result = $this->firstNumber - $this->secondNumber;
//        }
//        if ($this->operator == "multiply"){
//            $result = $this->firstNumber * $this->secondNumber;
//        }
//        if ($this->operator == "divide"){
//            $result = $this->firstNumber / $this->secondNumber;
//        }
//        return $result;
//    }

    var $expression;
    public function __construct($expression){
        $this->expression = $expression;
    }

    public function calculate(){
        $nodes = explode(" ", $this->expression);
        if ( $nodes[1] == "+"){
            $result = $nodes[0] + $nodes[2];
        }
        if ( $nodes[1] == "-"){
            $result = $nodes[0] - $nodes[2];
        }
        if ( $nodes[1] == "*"){
            $result = $nodes[0] * $nodes[2];
        }
        if ( $nodes[1] == "/"){
            $result = $nodes[0] / $nodes[2];
        }
        return $result;

    }
}