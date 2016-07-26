<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statuscode
 *
 * @ORM\Table(name="StatusCode")
 * @ORM\Entity
 */
class Statuscode
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
     * @ORM\Column(name="statusCode", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $statuscode;

    /**
     * @var string
     *
     * @ORM\Column(name="statusName", type="string", length=18, nullable=true)
     */
    private $statusname;

    /**
     * @var string
     *
     * @ORM\Column(name="foregroundColor", type="string", length=10, nullable=true)
     */
    private $foregroundcolor;

    /**
     * @var string
     *
     * @ORM\Column(name="backgroundColor", type="string", length=10, nullable=true)
     */
    private $backgroundcolor;

    /**
     * @var string
     *
     * @ORM\Column(name="iconSelector", type="string", length=128, nullable=true)
     */
    private $iconselector;

    /**
     * @var string
     *
     * @ORM\Column(name="iconName", type="string", length=24, nullable=true)
     */
    private $iconname;

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

