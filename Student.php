<?php

class Student extends Osoba{
    
    private $rok;
   
     public function  pobierzOpis(){
        
        return parent::pobierzOpis().$this->rok;
        
    }
public function ustawRok($rok){
    $this->rok =$rok;
    
    
}
    
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

