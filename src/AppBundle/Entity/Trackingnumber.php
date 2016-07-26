<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trackingnumber
 *
 * @ORM\Table(name="TrackingNumber", uniqueConstraints={@ORM\UniqueConstraint(name="number", columns={"number"}), @ORM\UniqueConstraint(name="number_2", columns={"number"}), @ORM\UniqueConstraint(name="number_3", columns={"number"}), @ORM\UniqueConstraint(name="number_4", columns={"number"})})
 * @ORM\Entity
 */
class Trackingnumber
{
    /**
     * @var integer
     *
     * @ORM\Column(name="trackingNumberID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $trackingnumberid;

    /**
     * @var string
     *
     * @ORM\Column(name="deviceID", type="string", length=32, nullable=false)
     */
    private $deviceid;

    /**
     * @var integer
     *
     * @ORM\Column(name="tempUserID", type="integer", nullable=false)
     */
    private $tempuserid;

    /**
     * @var float
     *
     * @ORM\Column(name="startLatitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $startlatitude;

    /**
     * @var float
     *
     * @ORM\Column(name="startLongitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $startlongitude;

    /**
     * @var float
     *
     * @ORM\Column(name="endLatitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $endlatitude;

    /**
     * @var float
     *
     * @ORM\Column(name="endLongitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $endlongitude;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startTime", type="datetime", nullable=true)
     */
    private $starttime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endTime", type="datetime", nullable=true)
     */
    private $endtime;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=255, nullable=false)
     */
    private $number;

    /**
     * @var boolean
     *
     * @ORM\Column(name="on_off", type="boolean", nullable=false)
     */
    private $onOff = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tempPassword", type="string", length=255, nullable=false)
     */
    private $temppassword;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;


}

