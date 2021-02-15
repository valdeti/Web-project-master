<?php

abstract class Person
{
<<<<<<< HEAD
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
=======
    private $username;
    private $password;
    private $age;
    private $role;

    function __construct($username, $password, $age, $role)
    {
        $this->$username = $username;
        $this->$password = $password;
        $this->$age = $age;
        $this->$role = $role;
>>>>>>> f29da3abc79fee9e3018568a6d187ccc945717c8
    }

    abstract protected function setSession();
    abstract protected function setCookie();
<<<<<<< HEAD
=======

    protected function getUsername()
    {
        return $this->username;
    }
>>>>>>> f29da3abc79fee9e3018568a6d187ccc945717c8
}
