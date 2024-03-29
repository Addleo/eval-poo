<?php 

abstract class Character{

    protected string $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName() : string{
        return $this->name;
    }

}