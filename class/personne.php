<?php


class personne
{
    private $name;
    private $firstname;
    private $age;

    /**
     * personne constructor.
     * @param $name
     * @param $firstname
     * @param $age
     */
    public function __construct($name="sam", $firstname="bm", $age="20")
    {
        $this->name = $name;
        $this->firstname = $firstname;
        $this->age = $age;
    }


    public function __toString()
    {
        return "i'm ". $this->firstname. " ". $this->name;
    }

}