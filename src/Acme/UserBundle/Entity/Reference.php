<?php

namespace Acme\UserBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use CiscoSystems\AuditBundle\Model\ReferenceInterface as AuditRefInterface;

/**
 * @ORM\Entity(repositoryClass="Acme\UserBundle\Entity\Reference")
 * @ORM\Table(name="test__reference")
 */
class Reference implements AuditRefInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    public function __toString()
    {
        
    }

    public function getId()
    {
        
    }    //put your code here
}