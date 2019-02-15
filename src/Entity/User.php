<?php

declare(strict_types = 1);

namespace App\Entity;

class User
{
    private $firstname;
    private $lastname;
    private $username;

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username): void
    {
        $this->username = $username;
    }
}
