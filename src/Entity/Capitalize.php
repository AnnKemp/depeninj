<?php


namespace App\Entity;


class Capitalize implements Transform
{
   // private $len;
    //private $capt;
    //private $captstring;

    public function transform(string $name) : string
    {

        return $name; // just for testing!

      /*  $this->len = strlen($name);
          $this->capt=array($name);

        for($i = 0; $i < $this->len; ++$i) {
            if($i % 2 == 0){
                $this->capt[$i]=strtoupper($this->capt[$i]);

            } // ends the if
        } // ends the for
        $this->captstring = implode(",", $this->capt);
        return $this->captstring;*/

    } // ends the construct
} // ends the class