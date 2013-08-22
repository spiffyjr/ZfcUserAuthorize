<?php

namespace ZfcUserAuthorize\Entity;

use SpiffyAuthorize\Role\RoleInterface;

class UserRole implements RoleInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var UserResource[]
     */
    protected $resources;

    /**
     * @var UserRole
     */
    protected $parent;

    /**
     * @var UserRole[]
     */
    protected $children;

    /**
     * @var \ZfcUser\Entity\UserInterface[]
     */
    protected $users;

    /**
     * @param \ZfcUserAuthorize\Entity\UserRole[] $children
     * @return $this
     */
    public function setChildren($children)
    {
        $this->children = $children;
        return $this;
    }

    /**
     * @return \ZfcUserAuthorize\Entity\UserRole[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param int $id
     * @return $this
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
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param \ZfcUserAuthorize\Entity\UserRole $parent
     * @return $this
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return \ZfcUserAuthorize\Entity\UserRole
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param \ZfcUserAuthorize\Entity\UserResource[] $resources
     * @return $this
     */
    public function setResources($resources)
    {
        $this->resources = $resources;
        return $this;
    }

    /**
     * @return \ZfcUserAuthorize\Entity\UserResource[]
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @param \ZfcUser\Entity\UserInterface[] $users
     * @return $this
     */
    public function setUsers($users)
    {
        $this->users = $users;
        return $this;
    }

    /**
     * @return \ZfcUser\Entity\UserInterface[]
     */
    public function getUsers()
    {
        return $this->users;
    }
}
