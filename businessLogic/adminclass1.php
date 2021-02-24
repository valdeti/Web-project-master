<?php
require_once 'personClass.php';

class Admin extends Produkti
{
    public function __construct($idprodukti, $emri, $pershkrimi, $img)
    {
        parent::__construct($idprodukti, $emri, $pershkrimi, $img); //equivalent to super in java
    }


    // public function setSession()
    // {

    //     $_SESSION["role"] = 1;
    //     $_SESSION['roleName'] = "Administrator";
    // }

    // public function setCookie()
    // {
    //     setcookie("idprodukti", $this->getidprodukti(), time() + 2 * 24 * 60 * 60);
    // }

    public function getIdprodukti()
    {
        return $this->idprodukti;
    }
    public function getEmri()
    {
        return $this->emri;
    }
    public function getPershkrimi()
    {
        return $this->pershkrimi;
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
