<?php
require 'variables.php';
include_once 'adminClass.php';
include_once 'simpleUserClass.php';
<<<<<<< HEAD
require_once 'userMapper.php';
session_start();
if (isset($_POST['login-btn'])) {
    $login = new LoginLogic($_POST);
    $login->verifyData();
} else if (isset($_POST['register-btn'])) {
    $register = new RegisterLogic($_POST);
    $register->insertData();
=======
session_start();

if (isset($_POST['login-btn'])) {
    $login = new LoginLogic($_POST);
    $login->verifyData();
>>>>>>> f29da3abc79fee9e3018568a6d187ccc945717c8
} else {
    header("Location:../index.php");
}

class LoginLogic
{
    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['password'];
    }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->username, $this->password)) {
<<<<<<< HEAD
            echo '1';
            header("Location:../index.php");
        } else if ($this->usernameAndPasswordCorrect($this->username, $this->password)) {
            echo '2';
            header('Location:../strategjite.php');
        } else {
            echo '3';
            header("Location:../index.php");
        }
=======
            header("Location:../index.php");
        } else if ($this->usernameAndPasswordCorrect($this->username, $this->password) != null) {
            header('Location:../strategjite.php');
        } else
            header("Location:../index.php");
>>>>>>> f29da3abc79fee9e3018568a6d187ccc945717c8
    }

    private function variablesNotDefinedWell($username, $password)
    {
        if (empty($username) || empty($password)) {
            return true;
        }
        return false;
    }

    private function usernameAndPasswordCorrect($username, $password)
    {
<<<<<<< HEAD
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($username);
        if ($user == null || count($user) == 0) return false;
        else if (password_verify($password, $user['password'])) {
            if ($user['role'] == 1) {
                $obj = new Admin($user['id'], $user['username'], $user['password'], $user['role']);
                $obj->setSession();
            } else {
                $obj = new SimpleUser($user['id'], $user['username'], $user['password'], $user['role'], "");
                $obj->setSession();
            }
            return true;
        } else return false;
=======
        $loggedInUser = null;
        $users = VariablesExample::getUsers();

        foreach ($users as $user) {
            if ($user['username'] == $username && $user['password'] == $password) {
                if ($user['role'] == 1) {
                    $loggedInUser = new Admin($user['id'], $user['username'], $user['password'], $user['role']);
                    break;
                } else {
                    $loggedInUser = new SimpleUser($user['id'], $user['username'], $user['password'], $user['role']);
                    break;
                }
                return true;
            }
        }
        if ($loggedInUser != null) {
            $loggedInUser->setSession();
            $loggedInUser->setCookie();
        }
        return $loggedInUser;
>>>>>>> f29da3abc79fee9e3018568a6d187ccc945717c8
    }
}

class RegisterLogic
{
<<<<<<< HEAD
    private $username = "";
    private $password = "";
    private $userLastName = "";

    public function __construct($formData)
    {
        $this->username = $formData['register-username'];
        $this->password = $formData['register-password'];
        $this->userLastName = $formData['register-lastname'];
    }

    public function insertData()
    {
        $user = new SimpleUser($this->username, $this->password, 25, 0, $this->userLastName);

        $mapper = new UserMapper();
        $mapper->insertUser($user);
        header("Location:../index.php");
    }
}
=======
    public function __construct()
    {
    }

    public function registerUser()
    {
    }
}
>>>>>>> f29da3abc79fee9e3018568a6d187ccc945717c8
