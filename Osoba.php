<?php
class Osoba {
    private $imie;
    private $wiek;
    private static $instancja=null;


    public function __construct($imie, $wiek)
    {
      $this->imie = $imie;
      $this->wiek = $wiek;
    } 
    
    public function pobierzOpis()
    {
       
        return $this->imie.", ".$this->wiek;
        
    }
    public function zmienImie($noweImie)
    {
        $this->imie= $noweImie;
    }
    public static function stworz($imie, $wiek)
    {
       if(!isset(static::$instancja))
       {
        return static::$instancja=new Osoba($imie,$wiek);
    }
        return static::$instancja;
    }
     
     
}
