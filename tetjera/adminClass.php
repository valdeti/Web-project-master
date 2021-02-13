<?php
require_once 'personClass.php';


class Admin extends Person
{
    public function __construct($username, $password, $age, $role)
    {
        parent::__construct($username, $password, $age, $role); //equivalent to super in java
    }


    public function setSession()
    {

        $_SESSION["role"] = 1;
        $_SESSION['roleName'] = "Administrator";
    }

    public function setCookie()
    {
        setcookie("username", $this->getUsername(), time() + 2 * 24 * 60 * 60);
    }
}
