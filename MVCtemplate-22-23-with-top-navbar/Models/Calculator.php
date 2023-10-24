<?php

class Calculator
{
/* Class to build a calculator */
    var $firstNumber = 0, $secondNumber = 0, $operator;
    public function __construct($firstNumber, $secondNumber, $operator)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
        $this->operator = $operator;
    }

    public function calculate(){
        if ($this->operator == "add"){
            $result = $this->firstNumber + $this->secondNumber;
        }
        if ($this->operator == "subtract"){
            $result = $this->firstNumber - $this->secondNumber;
        }
        if ($this->operator == "multiply"){
            $result = $this->firstNumber * $this->secondNumber;
        }
        if ($this->operator == "divide"){
            $result = $this->firstNumber / $this->secondNumber;
        }
        return $result;
    }
}