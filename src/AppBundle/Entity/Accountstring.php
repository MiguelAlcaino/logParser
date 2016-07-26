<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accountstring
 *
 * @ORM\Table(name="AccountString")
 * @ORM\Entity
 */
class Accountstring
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
     * @ORM\Column(name="stringID", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $stringid;

    /**
     * @var string
     *
     * @ORM\Column(name="singularTitle", type="string", length=64, nullable=true)
     */
    private $singulartitle;

    /**
     * @var string
     *
     * @ORM\Column(name="pluralTitle", type="string", length=64, nullable=true)
     */
    private $pluraltitle;

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

