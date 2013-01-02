<?php

namespace Acme\UserBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;

use CiscoSystems\AuditBundle\Model\UserInterface as AuditUserInterface;

class User implements UserInterface, EquatableInterface, AuditUserInterface
{
    protected $id;
    protected $username;
    protected $roles;

    public function getId()
    {
        return $this->id;
    }

    public function setId( $id )
    {
        $this->id = $id;
    }

    public function __toString()
    {
        return $this->name;        
    }

    public function eraseCredentials()
    {
        
    }

    public function getPassword()
    {
        
    }

    public function getRoles()
    {
        
    }

    public function getSalt()
    {
        
    }

    public function getUsername()
    {
        return $this->name;        
    }

    public function isEqualTo( UserInterface $user )
    {
        
    }
}

