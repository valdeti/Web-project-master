<?php
require_once 'personClass.php';

class Admin extends Produkti
{
   

 

    public function getIdprodukti()
    {
        return $this->idprodukti;
    }
    public function getEmri()
    {
        return $this->emri;
    }
    
    public function getImg()
    {
        return $this->img;
    }
    public function getSale()
    {
        return $this->sale;
    }
}
