<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Property
 *
 * @ORM\Table(name="Property")
 * @ORM\Entity
 */
class Property
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
     * @ORM\Column(name="deviceID", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $deviceid;

    /**
     * @var integer
     *
     * @ORM\Column(name="propKey", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $propkey;

    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp", type="integer", nullable=true)
     */
    private $timestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="binaryValue", type="blob", length=65535, nullable=true)
     */
    private $binaryvalue;


}

