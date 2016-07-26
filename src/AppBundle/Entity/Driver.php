<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Driver
 *
 * @ORM\Table(name="Driver")
 * @ORM\Entity
 */
class Driver
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
     * @ORM\Column(name="driverID", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $driverid;

    /**
     * @var string
     *
     * @ORM\Column(name="contactPhone", type="string", length=32, nullable=true)
     */
    private $contactphone;

    /**
     * @var string
     *
     * @ORM\Column(name="contactEmail", type="string", length=128, nullable=true)
     */
    private $contactemail;

    /**
     * @var string
     *
     * @ORM\Column(name="licenseType", type="string", length=24, nullable=true)
     */
    private $licensetype;

    /**
     * @var string
     *
     * @ORM\Column(name="licenseNumber", type="string", length=32, nullable=true)
     */
    private $licensenumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="licenseExpire", type="integer", nullable=true)
     */
    private $licenseexpire;

    /**
     * @var string
     *
     * @ORM\Column(name="badgeID", type="string", length=32, nullable=true)
     */
    private $badgeid;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=90, nullable=true)
     */
    private $address;

    /**
     * @var integer
     *
     * @ORM\Column(name="birthdate", type="integer", nullable=true)
     */
    private $birthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="deviceID", type="string", length=32, nullable=true)
     */
    private $deviceid;

    /**
     * @var integer
     *
     * @ORM\Column(name="driverStatus", type="integer", nullable=true)
     */
    private $driverstatus;

    /**
     * @var string
     *
     * @ORM\Column(name="displayName", type="string", length=40, nullable=true)
     */
    private $displayname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=128, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", length=65535, nullable=true)
     */
    private $notes;

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

