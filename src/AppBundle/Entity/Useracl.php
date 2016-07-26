<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Useracl
 *
 * @ORM\Table(name="UserAcl")
 * @ORM\Entity
 */
class Useracl
{
    /**
     * @var string
     *
     * @ORM\Column(name="accountID", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $accountid;

    /**
     * @var string
     *
     * @ORM\Column(name="userID", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="aclID", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $aclid;

    /**
     * @var integer
     *
     * @ORM\Column(name="accessLevel", type="smallint", nullable=true)
     */
    private $accesslevel;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=128, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastUpdateTime", type="integer", nullable=true)
     */
    private $lastupdatetime;

    /**
     * @var integer
     *
     * @ORM\Column(name="creationTime", type="integer", nullable=true)
     */
    private $creationtime;


}

