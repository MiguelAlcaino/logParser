<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transport
 *
 * @ORM\Table(name="Transport", indexes={@ORM\Index(name="device", columns={"assocAccountID", "assocDeviceID"}), @ORM\Index(name="altIndex", columns={"uniqueID"})})
 * @ORM\Entity
 */
class Transport
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
     * @ORM\Column(name="transportID", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $transportid;

    /**
     * @var string
     *
     * @ORM\Column(name="assocAccountID", type="string", length=32, nullable=true)
     */
    private $assocaccountid;

    /**
     * @var string
     *
     * @ORM\Column(name="assocDeviceID", type="string", length=32, nullable=true)
     */
    private $assocdeviceid;

    /**
     * @var string
     *
     * @ORM\Column(name="uniqueID", type="string", length=40, nullable=true)
     */
    private $uniqueid;

    /**
     * @var string
     *
     * @ORM\Column(name="deviceCode", type="string", length=24, nullable=true)
     */
    private $devicecode;

    /**
     * @var string
     *
     * @ORM\Column(name="deviceType", type="string", length=24, nullable=true)
     */
    private $devicetype;

    /**
     * @var string
     *
     * @ORM\Column(name="serialNumber", type="string", length=24, nullable=true)
     */
    private $serialnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="simPhoneNumber", type="string", length=24, nullable=true)
     */
    private $simphonenumber;

    /**
     * @var string
     *
     * @ORM\Column(name="smsEmail", type="string", length=64, nullable=true)
     */
    private $smsemail;

    /**
     * @var string
     *
     * @ORM\Column(name="imeiNumber", type="string", length=24, nullable=true)
     */
    private $imeinumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastInputState", type="integer", nullable=true)
     */
    private $lastinputstate;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastOutputState", type="integer", nullable=true)
     */
    private $lastoutputstate;

    /**
     * @var integer
     *
     * @ORM\Column(name="ignitionIndex", type="smallint", nullable=true)
     */
    private $ignitionindex;

    /**
     * @var string
     *
     * @ORM\Column(name="codeVersion", type="string", length=32, nullable=true)
     */
    private $codeversion;

    /**
     * @var string
     *
     * @ORM\Column(name="featureSet", type="string", length=64, nullable=true)
     */
    private $featureset;

    /**
     * @var string
     *
     * @ORM\Column(name="ipAddressValid", type="string", length=128, nullable=true)
     */
    private $ipaddressvalid;

    /**
     * @var string
     *
     * @ORM\Column(name="ipAddressCurrent", type="string", length=32, nullable=true)
     */
    private $ipaddresscurrent;

    /**
     * @var integer
     *
     * @ORM\Column(name="remotePortCurrent", type="smallint", nullable=true)
     */
    private $remoteportcurrent;

    /**
     * @var integer
     *
     * @ORM\Column(name="listenPortCurrent", type="smallint", nullable=true)
     */
    private $listenportcurrent;

    /**
     * @var string
     *
     * @ORM\Column(name="pendingPingCommand", type="text", length=65535, nullable=true)
     */
    private $pendingpingcommand;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastPingTime", type="integer", nullable=true)
     */
    private $lastpingtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalPingCount", type="smallint", nullable=true)
     */
    private $totalpingcount;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxPingCount", type="smallint", nullable=true)
     */
    private $maxpingcount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="expectAck", type="boolean", nullable=true)
     */
    private $expectack;

    /**
     * @var string
     *
     * @ORM\Column(name="lastAckCommand", type="text", length=65535, nullable=true)
     */
    private $lastackcommand;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastAckTime", type="integer", nullable=true)
     */
    private $lastacktime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="supportsDMTP", type="boolean", nullable=true)
     */
    private $supportsdmtp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="supportedEncodings", type="boolean", nullable=true)
     */
    private $supportedencodings;

    /**
     * @var integer
     *
     * @ORM\Column(name="unitLimitInterval", type="smallint", nullable=true)
     */
    private $unitlimitinterval;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxAllowedEvents", type="smallint", nullable=true)
     */
    private $maxallowedevents;

    /**
     * @var string
     *
     * @ORM\Column(name="totalProfileMask", type="blob", length=65535, nullable=true)
     */
    private $totalprofilemask;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalMaxConn", type="smallint", nullable=true)
     */
    private $totalmaxconn;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalMaxConnPerMin", type="smallint", nullable=true)
     */
    private $totalmaxconnpermin;

    /**
     * @var string
     *
     * @ORM\Column(name="duplexProfileMask", type="blob", length=65535, nullable=true)
     */
    private $duplexprofilemask;

    /**
     * @var integer
     *
     * @ORM\Column(name="duplexMaxConn", type="smallint", nullable=true)
     */
    private $duplexmaxconn;

    /**
     * @var integer
     *
     * @ORM\Column(name="duplexMaxConnPerMin", type="smallint", nullable=true)
     */
    private $duplexmaxconnpermin;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastTotalConnectTime", type="integer", nullable=true)
     */
    private $lasttotalconnecttime;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastDuplexConnectTime", type="integer", nullable=true)
     */
    private $lastduplexconnecttime;

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

