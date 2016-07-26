<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Account
 *
 * @ORM\Table(name="Account", indexes={@ORM\Index(name="email", columns={"contactEmail"})})
 * @ORM\Entity
 */
class Account
{
    /**
     * @var string
     *
     * @ORM\Column(name="accountID", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $accountid;

    /**
     * @var integer
     *
     * @ORM\Column(name="accountType", type="smallint", nullable=true)
     */
    private $accounttype;

    /**
     * @var string
     *
     * @ORM\Column(name="notifyEmail", type="string", length=128, nullable=true)
     */
    private $notifyemail;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowNotify", type="boolean", nullable=true)
     */
    private $allownotify;

    /**
     * @var boolean
     *
     * @ORM\Column(name="speedUnits", type="boolean", nullable=true)
     */
    private $speedunits;

    /**
     * @var boolean
     *
     * @ORM\Column(name="distanceUnits", type="boolean", nullable=true)
     */
    private $distanceunits;

    /**
     * @var boolean
     *
     * @ORM\Column(name="volumeUnits", type="boolean", nullable=true)
     */
    private $volumeunits;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pressureUnits", type="boolean", nullable=true)
     */
    private $pressureunits;

    /**
     * @var boolean
     *
     * @ORM\Column(name="economyUnits", type="boolean", nullable=true)
     */
    private $economyunits;

    /**
     * @var boolean
     *
     * @ORM\Column(name="temperatureUnits", type="boolean", nullable=true)
     */
    private $temperatureunits;

    /**
     * @var string
     *
     * @ORM\Column(name="currencyUnits", type="string", length=8, nullable=true)
     */
    private $currencyunits;

    /**
     * @var float
     *
     * @ORM\Column(name="fuelCostPerLiter", type="float", precision=10, scale=0, nullable=true)
     */
    private $fuelcostperliter;

    /**
     * @var boolean
     *
     * @ORM\Column(name="latLonFormat", type="boolean", nullable=true)
     */
    private $latlonformat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="geocoderMode", type="boolean", nullable=true)
     */
    private $geocodermode;

    /**
     * @var string
     *
     * @ORM\Column(name="privateLabelName", type="string", length=32, nullable=true)
     */
    private $privatelabelname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isBorderCrossing", type="boolean", nullable=true)
     */
    private $isbordercrossing;

    /**
     * @var integer
     *
     * @ORM\Column(name="retainedEventAge", type="integer", nullable=true)
     */
    private $retainedeventage;

    /**
     * @var integer
     *
     * @ORM\Column(name="maximumDevices", type="integer", nullable=true)
     */
    private $maximumdevices;

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
     * @ORM\Column(name="autoAddDevices", type="boolean", nullable=true)
     */
    private $autoadddevices;

    /**
     * @var string
     *
     * @ORM\Column(name="dcsPropertiesID", type="string", length=32, nullable=true)
     */
    private $dcspropertiesid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="smsEnabled", type="boolean", nullable=true)
     */
    private $smsenabled;

    /**
     * @var string
     *
     * @ORM\Column(name="smsProperties", type="string", length=200, nullable=true)
     */
    private $smsproperties;

    /**
     * @var string
     *
     * @ORM\Column(name="emailProperties", type="string", length=250, nullable=true)
     */
    private $emailproperties;

    /**
     * @var integer
     *
     * @ORM\Column(name="expirationTime", type="integer", nullable=true)
     */
    private $expirationtime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowWebService", type="boolean", nullable=true)
     */
    private $allowwebservice;

    /**
     * @var string
     *
     * @ORM\Column(name="defaultUser", type="string", length=32, nullable=true)
     */
    private $defaultuser;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=true)
     */
    private $password;

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
     * @ORM\Column(name="contactEmail", type="string", length=128, nullable=true)
     */
    private $contactemail;

    /**
     * @var string
     *
     * @ORM\Column(name="timeZone", type="string", length=32, nullable=true)
     */
    private $timezone;

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



    /**
     * Get accountid
     *
     * @return string
     */
    public function getAccountid()
    {
        return $this->accountid;
    }

    /**
     * Set accounttype
     *
     * @param integer $accounttype
     *
     * @return Account
     */
    public function setAccounttype($accounttype)
    {
        $this->accounttype = $accounttype;

        return $this;
    }

    /**
     * Get accounttype
     *
     * @return integer
     */
    public function getAccounttype()
    {
        return $this->accounttype;
    }

    /**
     * Set notifyemail
     *
     * @param string $notifyemail
     *
     * @return Account
     */
    public function setNotifyemail($notifyemail)
    {
        $this->notifyemail = $notifyemail;

        return $this;
    }

    /**
     * Get notifyemail
     *
     * @return string
     */
    public function getNotifyemail()
    {
        return $this->notifyemail;
    }

    /**
     * Set allownotify
     *
     * @param boolean $allownotify
     *
     * @return Account
     */
    public function setAllownotify($allownotify)
    {
        $this->allownotify = $allownotify;

        return $this;
    }

    /**
     * Get allownotify
     *
     * @return boolean
     */
    public function getAllownotify()
    {
        return $this->allownotify;
    }

    /**
     * Set speedunits
     *
     * @param boolean $speedunits
     *
     * @return Account
     */
    public function setSpeedunits($speedunits)
    {
        $this->speedunits = $speedunits;

        return $this;
    }

    /**
     * Get speedunits
     *
     * @return boolean
     */
    public function getSpeedunits()
    {
        return $this->speedunits;
    }

    /**
     * Set distanceunits
     *
     * @param boolean $distanceunits
     *
     * @return Account
     */
    public function setDistanceunits($distanceunits)
    {
        $this->distanceunits = $distanceunits;

        return $this;
    }

    /**
     * Get distanceunits
     *
     * @return boolean
     */
    public function getDistanceunits()
    {
        return $this->distanceunits;
    }

    /**
     * Set volumeunits
     *
     * @param boolean $volumeunits
     *
     * @return Account
     */
    public function setVolumeunits($volumeunits)
    {
        $this->volumeunits = $volumeunits;

        return $this;
    }

    /**
     * Get volumeunits
     *
     * @return boolean
     */
    public function getVolumeunits()
    {
        return $this->volumeunits;
    }

    /**
     * Set pressureunits
     *
     * @param boolean $pressureunits
     *
     * @return Account
     */
    public function setPressureunits($pressureunits)
    {
        $this->pressureunits = $pressureunits;

        return $this;
    }

    /**
     * Get pressureunits
     *
     * @return boolean
     */
    public function getPressureunits()
    {
        return $this->pressureunits;
    }

    /**
     * Set economyunits
     *
     * @param boolean $economyunits
     *
     * @return Account
     */
    public function setEconomyunits($economyunits)
    {
        $this->economyunits = $economyunits;

        return $this;
    }

    /**
     * Get economyunits
     *
     * @return boolean
     */
    public function getEconomyunits()
    {
        return $this->economyunits;
    }

    /**
     * Set temperatureunits
     *
     * @param boolean $temperatureunits
     *
     * @return Account
     */
    public function setTemperatureunits($temperatureunits)
    {
        $this->temperatureunits = $temperatureunits;

        return $this;
    }

    /**
     * Get temperatureunits
     *
     * @return boolean
     */
    public function getTemperatureunits()
    {
        return $this->temperatureunits;
    }

    /**
     * Set currencyunits
     *
     * @param string $currencyunits
     *
     * @return Account
     */
    public function setCurrencyunits($currencyunits)
    {
        $this->currencyunits = $currencyunits;

        return $this;
    }

    /**
     * Get currencyunits
     *
     * @return string
     */
    public function getCurrencyunits()
    {
        return $this->currencyunits;
    }

    /**
     * Set fuelcostperliter
     *
     * @param float $fuelcostperliter
     *
     * @return Account
     */
    public function setFuelcostperliter($fuelcostperliter)
    {
        $this->fuelcostperliter = $fuelcostperliter;

        return $this;
    }

    /**
     * Get fuelcostperliter
     *
     * @return float
     */
    public function getFuelcostperliter()
    {
        return $this->fuelcostperliter;
    }

    /**
     * Set latlonformat
     *
     * @param boolean $latlonformat
     *
     * @return Account
     */
    public function setLatlonformat($latlonformat)
    {
        $this->latlonformat = $latlonformat;

        return $this;
    }

    /**
     * Get latlonformat
     *
     * @return boolean
     */
    public function getLatlonformat()
    {
        return $this->latlonformat;
    }

    /**
     * Set geocodermode
     *
     * @param boolean $geocodermode
     *
     * @return Account
     */
    public function setGeocodermode($geocodermode)
    {
        $this->geocodermode = $geocodermode;

        return $this;
    }

    /**
     * Get geocodermode
     *
     * @return boolean
     */
    public function getGeocodermode()
    {
        return $this->geocodermode;
    }

    /**
     * Set privatelabelname
     *
     * @param string $privatelabelname
     *
     * @return Account
     */
    public function setPrivatelabelname($privatelabelname)
    {
        $this->privatelabelname = $privatelabelname;

        return $this;
    }

    /**
     * Get privatelabelname
     *
     * @return string
     */
    public function getPrivatelabelname()
    {
        return $this->privatelabelname;
    }

    /**
     * Set isbordercrossing
     *
     * @param boolean $isbordercrossing
     *
     * @return Account
     */
    public function setIsbordercrossing($isbordercrossing)
    {
        $this->isbordercrossing = $isbordercrossing;

        return $this;
    }

    /**
     * Get isbordercrossing
     *
     * @return boolean
     */
    public function getIsbordercrossing()
    {
        return $this->isbordercrossing;
    }

    /**
     * Set retainedeventage
     *
     * @param integer $retainedeventage
     *
     * @return Account
     */
    public function setRetainedeventage($retainedeventage)
    {
        $this->retainedeventage = $retainedeventage;

        return $this;
    }

    /**
     * Get retainedeventage
     *
     * @return integer
     */
    public function getRetainedeventage()
    {
        return $this->retainedeventage;
    }

    /**
     * Set maximumdevices
     *
     * @param integer $maximumdevices
     *
     * @return Account
     */
    public function setMaximumdevices($maximumdevices)
    {
        $this->maximumdevices = $maximumdevices;

        return $this;
    }

    /**
     * Get maximumdevices
     *
     * @return integer
     */
    public function getMaximumdevices()
    {
        return $this->maximumdevices;
    }

    /**
     * Set totalpingcount
     *
     * @param integer $totalpingcount
     *
     * @return Account
     */
    public function setTotalpingcount($totalpingcount)
    {
        $this->totalpingcount = $totalpingcount;

        return $this;
    }

    /**
     * Get totalpingcount
     *
     * @return integer
     */
    public function getTotalpingcount()
    {
        return $this->totalpingcount;
    }

    /**
     * Set maxpingcount
     *
     * @param integer $maxpingcount
     *
     * @return Account
     */
    public function setMaxpingcount($maxpingcount)
    {
        $this->maxpingcount = $maxpingcount;

        return $this;
    }

    /**
     * Get maxpingcount
     *
     * @return integer
     */
    public function getMaxpingcount()
    {
        return $this->maxpingcount;
    }

    /**
     * Set autoadddevices
     *
     * @param boolean $autoadddevices
     *
     * @return Account
     */
    public function setAutoadddevices($autoadddevices)
    {
        $this->autoadddevices = $autoadddevices;

        return $this;
    }

    /**
     * Get autoadddevices
     *
     * @return boolean
     */
    public function getAutoadddevices()
    {
        return $this->autoadddevices;
    }

    /**
     * Set dcspropertiesid
     *
     * @param string $dcspropertiesid
     *
     * @return Account
     */
    public function setDcspropertiesid($dcspropertiesid)
    {
        $this->dcspropertiesid = $dcspropertiesid;

        return $this;
    }

    /**
     * Get dcspropertiesid
     *
     * @return string
     */
    public function getDcspropertiesid()
    {
        return $this->dcspropertiesid;
    }

    /**
     * Set smsenabled
     *
     * @param boolean $smsenabled
     *
     * @return Account
     */
    public function setSmsenabled($smsenabled)
    {
        $this->smsenabled = $smsenabled;

        return $this;
    }

    /**
     * Get smsenabled
     *
     * @return boolean
     */
    public function getSmsenabled()
    {
        return $this->smsenabled;
    }

    /**
     * Set smsproperties
     *
     * @param string $smsproperties
     *
     * @return Account
     */
    public function setSmsproperties($smsproperties)
    {
        $this->smsproperties = $smsproperties;

        return $this;
    }

    /**
     * Get smsproperties
     *
     * @return string
     */
    public function getSmsproperties()
    {
        return $this->smsproperties;
    }

    /**
     * Set emailproperties
     *
     * @param string $emailproperties
     *
     * @return Account
     */
    public function setEmailproperties($emailproperties)
    {
        $this->emailproperties = $emailproperties;

        return $this;
    }

    /**
     * Get emailproperties
     *
     * @return string
     */
    public function getEmailproperties()
    {
        return $this->emailproperties;
    }

    /**
     * Set expirationtime
     *
     * @param integer $expirationtime
     *
     * @return Account
     */
    public function setExpirationtime($expirationtime)
    {
        $this->expirationtime = $expirationtime;

        return $this;
    }

    /**
     * Get expirationtime
     *
     * @return integer
     */
    public function getExpirationtime()
    {
        return $this->expirationtime;
    }

    /**
     * Set allowwebservice
     *
     * @param boolean $allowwebservice
     *
     * @return Account
     */
    public function setAllowwebservice($allowwebservice)
    {
        $this->allowwebservice = $allowwebservice;

        return $this;
    }

    /**
     * Get allowwebservice
     *
     * @return boolean
     */
    public function getAllowwebservice()
    {
        return $this->allowwebservice;
    }

    /**
     * Set defaultuser
     *
     * @param string $defaultuser
     *
     * @return Account
     */
    public function setDefaultuser($defaultuser)
    {
        $this->defaultuser = $defaultuser;

        return $this;
    }

    /**
     * Get defaultuser
     *
     * @return string
     */
    public function getDefaultuser()
    {
        return $this->defaultuser;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Account
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set contactname
     *
     * @param string $contactname
     *
     * @return Account
     */
    public function setContactname($contactname)
    {
        $this->contactname = $contactname;

        return $this;
    }

    /**
     * Get contactname
     *
     * @return string
     */
    public function getContactname()
    {
        return $this->contactname;
    }

    /**
     * Set contactphone
     *
     * @param string $contactphone
     *
     * @return Account
     */
    public function setContactphone($contactphone)
    {
        $this->contactphone = $contactphone;

        return $this;
    }

    /**
     * Get contactphone
     *
     * @return string
     */
    public function getContactphone()
    {
        return $this->contactphone;
    }

    /**
     * Set contactemail
     *
     * @param string $contactemail
     *
     * @return Account
     */
    public function setContactemail($contactemail)
    {
        $this->contactemail = $contactemail;

        return $this;
    }

    /**
     * Get contactemail
     *
     * @return string
     */
    public function getContactemail()
    {
        return $this->contactemail;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     *
     * @return Account
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set passwdchangetime
     *
     * @param integer $passwdchangetime
     *
     * @return Account
     */
    public function setPasswdchangetime($passwdchangetime)
    {
        $this->passwdchangetime = $passwdchangetime;

        return $this;
    }

    /**
     * Get passwdchangetime
     *
     * @return integer
     */
    public function getPasswdchangetime()
    {
        return $this->passwdchangetime;
    }

    /**
     * Set passwdquerytime
     *
     * @param integer $passwdquerytime
     *
     * @return Account
     */
    public function setPasswdquerytime($passwdquerytime)
    {
        $this->passwdquerytime = $passwdquerytime;

        return $this;
    }

    /**
     * Get passwdquerytime
     *
     * @return integer
     */
    public function getPasswdquerytime()
    {
        return $this->passwdquerytime;
    }

    /**
     * Set lastlogintime
     *
     * @param integer $lastlogintime
     *
     * @return Account
     */
    public function setLastlogintime($lastlogintime)
    {
        $this->lastlogintime = $lastlogintime;

        return $this;
    }

    /**
     * Get lastlogintime
     *
     * @return integer
     */
    public function getLastlogintime()
    {
        return $this->lastlogintime;
    }

    /**
     * Set isactive
     *
     * @param boolean $isactive
     *
     * @return Account
     */
    public function setIsactive($isactive)
    {
        $this->isactive = $isactive;

        return $this;
    }

    /**
     * Get isactive
     *
     * @return boolean
     */
    public function getIsactive()
    {
        return $this->isactive;
    }

    /**
     * Set displayname
     *
     * @param string $displayname
     *
     * @return Account
     */
    public function setDisplayname($displayname)
    {
        $this->displayname = $displayname;

        return $this;
    }

    /**
     * Get displayname
     *
     * @return string
     */
    public function getDisplayname()
    {
        return $this->displayname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Account
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return Account
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set lastupdatetime
     *
     * @param integer $lastupdatetime
     *
     * @return Account
     */
    public function setLastupdatetime($lastupdatetime)
    {
        $this->lastupdatetime = $lastupdatetime;

        return $this;
    }

    /**
     * Get lastupdatetime
     *
     * @return integer
     */
    public function getLastupdatetime()
    {
        return $this->lastupdatetime;
    }

    /**
     * Set creationtime
     *
     * @param integer $creationtime
     *
     * @return Account
     */
    public function setCreationtime($creationtime)
    {
        $this->creationtime = $creationtime;

        return $this;
    }

    /**
     * Get creationtime
     *
     * @return integer
     */
    public function getCreationtime()
    {
        return $this->creationtime;
    }
}
