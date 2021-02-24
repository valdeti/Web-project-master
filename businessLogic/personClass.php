<?php

abstract class Person
{
    protected $username;
    protected $password;
    protected $age;
    protected $role;

    function __construct($username, $password, $age, $role)
    {
        $this->username = $username;
        $this->password = $password;
        $this->age = $age;
        $this->role = $role;
    }

    abstract protected function setSession();
    abstract protected function setCookie();
}

abstract class Produkti
{
    protected $idprodukti;
    protected $emri;
    protected $pershkrimi;
    protected $img;

    function __construct($idprodukti, $emri, $pershkrimi, $img)
    {
        $this->idprodukti = $idprodukti;
        $this->emri = $emri;
        $this->pershkrimi = $pershkrimi;
        $this->img = $img;
    }

    abstract protected function setSession();
    abstract protected function setCookie();
}
