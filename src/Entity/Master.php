<?php


namespace App\Entity;


class Master
{
    /**
     * @var Transform
     */

    private $name;
    //$name="dit is een proeftekst"; // hoe moet ik die tekst hier hardcoded insteken?

    public function __construct(Transform $name) {
        
    $this->name=$name;
    //dit is een proeftekst"$name="dit is een proeftekst";

       // if(!isset($name)){ $name="dit is een proeftekst"; }

        $this->thetext = $this->transform; // eigenlijk moet ik die transform functie aanroepen die door
        // beide classen gebruikt wordt en een waarde returnt

        // en dit moet ik nu doorsturen naar de controller om te tonen

    } // here ends the public function

    // hier moet nog een log functie komen // dat moet van de class Logger komen


    // have to make a logger function here to log to the log file ? niet via de controller of moet dit nu toch op de controller?

} // here ends the class