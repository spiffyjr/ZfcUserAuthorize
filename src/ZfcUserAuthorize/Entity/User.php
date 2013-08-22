<?php

namespace ZfcUserAuthorize\Entity;

use SpiffyAuthorize\Identity\IdentityInterface;
use ZfcUser\Entity\UserInterface;

class User implements IdentityInterface, UserInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var UserRole[]
     */
    protected $roles;

    /**
     * @param int $id
     * @return \ZfcUser\Entity\UserInterface
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $email
     * @return \ZfcUser\Entity\UserInterface
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $password
     * @return \ZfcUser\Entity\UserInterface
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param \ZfcUserAuthorize\Entity\UserRole[] $roles
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
        return $this;
    }

    /**
     * @return \ZfcUserAuthorize\Entity\UserRole[]
     */
    public function getRoles()
    {
        return $this->roles;
    }
}
