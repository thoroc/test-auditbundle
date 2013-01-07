<?php

namespace Acme\UserBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;

use CiscoSystems\AuditBundle\Model\UserInterface as AuditUserInterface;

/**
 * @ORM\Entity(repositoryClass="Acme\UserBundle\Entity\user")
 * @ORM\Table(name="test__user")
 */
class User implements UserInterface, EquatableInterface, AuditUserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $username;

    /**
     * @ORM\Column(type="string")
     */
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

