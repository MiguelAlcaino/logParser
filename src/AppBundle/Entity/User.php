<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="User", indexes={@ORM\Index(name="role", columns={"roleID"}), @ORM\Index(name="email", columns={"contactEmail"})})
 * @ORM\Entity
 */
class User
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
     * @var integer
     *
     * @ORM\Column(name="userType", type="smallint", nullable=true)
     */
    private $usertype;

    /**
     * @var string
     *
     * @ORM\Column(name="roleID", type="string", length=32, nullable=true)
     */
    private $roleid;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=true)
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gender", type="boolean", nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="notifyEmail", type="string", length=128, nullable=true)
     */
    private $notifyemail;

    /**
     * @var string
     *
     * @ORM\Column(name="contactName", type="string", length=64, nullable=true)
     */
    private $contactname;

    /**
     * @var string
     *
     * @ORM\Column(name="contactPhone", type="string", length=32, nullable=true)
     */
    private $contactphone;

    /**
     * @var string
     *
     * @ORM\Column(name="contactEmail", type="string", length=64, nullable=true)
     */
    private $contactemail;

    /**
     * @var string
     *
     * @ORM\Column(name="timeZone", type="string", length=32, nullable=true)
     */
    private $timezone;

    /**
     * @var string
     *
     * @ORM\Column(name="firstLoginPageID", type="string", length=24, nullable=true)
     */
    private $firstloginpageid;

    /**
     * @var string
     *
     * @ORM\Column(name="preferredDeviceID", type="string", length=32, nullable=true)
     */
    private $preferreddeviceid;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxAccessLevel", type="smallint", nullable=true)
     */
    private $maxaccesslevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="passwdChangeTime", type="integer", nullable=true)
     */
    private $passwdchangetime;

    /**
     * @var integer
     *
     * @ORM\Column(name="passwdQueryTime", type="integer", nullable=true)
     */
    private $passwdquerytime;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastLoginTime", type="integer", nullable=true)
     */
    private $lastlogintime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isActive", type="boolean", nullable=true)
     */
    private $isactive;

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

