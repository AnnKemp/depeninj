<?php


namespace App\Entity;


class Spacetodash implements Transform
{
    private $namarr=[];
    private $stringwith="";

    public function transform(string $name) : string
    {
        $this->namarr=array($name);
        // make again string with - instead of white spaces
        $this->stringwith=implode("-", $this->namarr);

        return $this->stringwith;
    }
}