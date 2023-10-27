<?php
class Persistence
{
    var $name, $birthday;

    public function __construct($name, $birthday)
    {
       $this->name = $name;
       $this->birthday = $birthday;
    }

    public function createCookie(){
        var_dump($this->name);
        var_dump($this->name);        var_dump($this->name);        var_dump($this->name);
        setcookie('name', $this->name);
        setcookie('birthday', $this->birthday);
    }
}