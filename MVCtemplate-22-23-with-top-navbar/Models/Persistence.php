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
        setcookie('name', $this->name);
        setcookie('birthday', $this->birthday);
    }
}