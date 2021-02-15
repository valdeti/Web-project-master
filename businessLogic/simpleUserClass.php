<?php
<<<<<<< HEAD
include_once 'personClass.php';

class SimpleUser extends Person
{
    private $lastname;
    public function __construct($username,  $password, $age, $role, $lastname)
    {
        parent::__construct($username, $password, $age, $role);
        $this->lastname = $lastname;
=======
require_once 'personClass.php';

class SimpleUser extends Person
{
    public function __construct($username, $password, $age, $role)
    {
        parent::__construct($username, $password, $age, $role);
>>>>>>> f29da3abc79fee9e3018568a6d187ccc945717c8
    }

    public function setSession()
    {
        $_SESSION["role"] = "0";
        $_SESSION['roleName'] = "SimpleUser";
    }

    public function setCookie()
    {
        setcookie("username", $this->getUsername(), time() + 2 * 24 * 60 * 60);
    }
<<<<<<< HEAD

    public function getLastname()
    {
        return $this->lastname;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getRole()
    {
        return $this->role;
    }
=======
>>>>>>> f29da3abc79fee9e3018568a6d187ccc945717c8
}
