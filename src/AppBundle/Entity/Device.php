<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Device
 *
 * @ORM\Table(name="Device", indexes={@ORM\Index(name="altIndex", columns={"uniqueID"})})
 * @ORM\Entity
 */
class Device
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
     * @var string
     *
     * @ORM\Column(name="groupID", type="string", length=32, nullable=true)
     */
    private $groupid;

    /**
     * @var string
     *
     * @ORM\Column(name="equipmentType", type="string", length=40, nullable=true)
     */
    private $equipmenttype;

    /**
     * @var string
     *
     * @ORM\Column(name="equipmentStatus", type="string", length=24, nullable=true)
     */
    private $equipmentstatus;

    /**
     * @var string
     *
     * @ORM\Column(name="vehicleMake", type="string", length=40, nullable=true)
     */
    private $vehiclemake;

    /**
     * @var string
     *
     * @ORM\Column(name="vehicleModel", type="string", length=40, nullable=true)
     */
    private $vehiclemodel;

    /**
     * @var string
     *
     * @ORM\Column(name="vehicleID", type="string", length=24, nullable=true)
     */
    private $vehicleid;

    /**
     * @var string
     *
     * @ORM\Column(name="licensePlate", type="string", length=24, nullable=true)
     */
    private $licenseplate;

    /**
     * @var integer
     *
     * @ORM\Column(name="licenseExpire", type="integer", nullable=true)
     */
    private $licenseexpire;

    /**
     * @var integer
     *
     * @ORM\Column(name="insuranceExpire", type="integer", nullable=true)
     */
    private $insuranceexpire;

    /**
     * @var string
     *
     * @ORM\Column(name="driverID", type="string", length=32, nullable=true)
     */
    private $driverid;

    /**
     * @var integer
     *
     * @ORM\Column(name="driverStatus", type="integer", nullable=true)
     */
    private $driverstatus;

    /**
     * @var float
     *
     * @ORM\Column(name="fuelCapacity", type="float", precision=10, scale=0, nullable=true)
     */
    private $fuelcapacity;

    /**
     * @var float
     *
     * @ORM\Column(name="fuelEconomy", type="float", precision=10, scale=0, nullable=true)
     */
    private $fueleconomy;

    /**
     * @var float
     *
     * @ORM\Column(name="fuelRatePerHour", type="float", precision=10, scale=0, nullable=true)
     */
    private $fuelrateperhour;

    /**
     * @var float
     *
     * @ORM\Column(name="fuelCostPerLiter", type="float", precision=10, scale=0, nullable=true)
     */
    private $fuelcostperliter;

    /**
     * @var float
     *
     * @ORM\Column(name="speedLimitKPH", type="float", precision=10, scale=0, nullable=true)
     */
    private $speedlimitkph;

    /**
     * @var float
     *
     * @ORM\Column(name="planDistanceKM", type="float", precision=10, scale=0, nullable=true)
     */
    private $plandistancekm;

    /**
     * @var integer
     *
     * @ORM\Column(name="installTime", type="integer", nullable=true)
     */
    private $installtime;

    /**
     * @var integer
     *
     * @ORM\Column(name="resetTime", type="integer", nullable=true)
     */
    private $resettime;

    /**
     * @var integer
     *
     * @ORM\Column(name="expirationTime", type="integer", nullable=true)
     */
    private $expirationtime;

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
     * @ORM\Column(name="pushpinID", type="string", length=32, nullable=true)
     */
    private $pushpinid;

    /**
     * @var string
     *
     * @ORM\Column(name="displayColor", type="string", length=16, nullable=true)
     */
    private $displaycolor;

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
     * @ORM\Column(name="simID", type="string", length=24, nullable=true)
     */
    private $simid;

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
     * @var string
     *
     * @ORM\Column(name="dataKey", type="text", length=65535, nullable=true)
     */
    private $datakey;

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
     * @var integer
     *
     * @ORM\Column(name="commandStateMask", type="integer", nullable=true)
     */
    private $commandstatemask;

    /**
     * @var boolean
     *
     * @ORM\Column(name="expectAck", type="boolean", nullable=true)
     */
    private $expectack;

    /**
     * @var integer
     *
     * @ORM\Column(name="expectAckCode", type="integer", nullable=true)
     */
    private $expectackcode;

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
     * @var string
     *
     * @ORM\Column(name="dcsPropertiesID", type="string", length=32, nullable=true)
     */
    private $dcspropertiesid;

    /**
     * @var integer
     *
     * @ORM\Column(name="dcsConfigMask", type="integer", nullable=true)
     */
    private $dcsconfigmask;

    /**
     * @var string
     *
     * @ORM\Column(name="dcsConfigString", type="string", length=80, nullable=true)
     */
    private $dcsconfigstring;

    /**
     * @var string
     *
     * @ORM\Column(name="dcsCommandHost", type="string", length=32, nullable=true)
     */
    private $dcscommandhost;

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
     * @var string
     *
     * @ORM\Column(name="lastTcpSessionID", type="string", length=32, nullable=true)
     */
    private $lasttcpsessionid;

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
     * @ORM\Column(name="statusCodeState", type="integer", nullable=true)
     */
    private $statuscodestate;

    /**
     * @var float
     *
     * @ORM\Column(name="lastBatteryLevel", type="float", precision=10, scale=0, nullable=true)
     */
    private $lastbatterylevel;

    /**
     * @var float
     *
     * @ORM\Column(name="lastFuelLevel", type="float", precision=10, scale=0, nullable=true)
     */
    private $lastfuellevel;

    /**
     * @var float
     *
     * @ORM\Column(name="lastFuelTotal", type="float", precision=10, scale=0, nullable=true)
     */
    private $lastfueltotal;

    /**
     * @var float
     *
     * @ORM\Column(name="lastOilLevel", type="float", precision=10, scale=0, nullable=true)
     */
    private $lastoillevel;

    /**
     * @var float
     *
     * @ORM\Column(name="lastValidLatitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $lastvalidlatitude;

    /**
     * @var float
     *
     * @ORM\Column(name="lastValidLongitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $lastvalidlongitude;

    /**
     * @var float
     *
     * @ORM\Column(name="lastValidHeading", type="float", precision=10, scale=0, nullable=true)
     */
    private $lastvalidheading;

    /**
     * @var float
     *
     * @ORM\Column(name="lastValidSpeedKPH", type="float", precision=10, scale=0, nullable=true)
     */
    private $lastvalidspeedkph;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastGPSTimestamp", type="integer", nullable=true)
     */
    private $lastgpstimestamp;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastEventTimestamp", type="integer", nullable=true)
     */
    private $lasteventtimestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="lastCellServingInfo", type="string", length=100, nullable=true)
     */
    private $lastcellservinginfo;

    /**
     * @var float
     *
     * @ORM\Column(name="lastDistanceKM", type="float", precision=10, scale=0, nullable=true)
     */
    private $lastdistancekm;

    /**
     * @var float
     *
     * @ORM\Column(name="lastOdometerKM", type="float", precision=10, scale=0, nullable=true)
     */
    private $lastodometerkm;

    /**
     * @var float
     *
     * @ORM\Column(name="odometerOffsetKM", type="float", precision=10, scale=0, nullable=true)
     */
    private $odometeroffsetkm;

    /**
     * @var float
     *
     * @ORM\Column(name="lastEngineOnHours", type="float", precision=10, scale=0, nullable=true)
     */
    private $lastengineonhours;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastEngineOnTime", type="integer", nullable=true)
     */
    private $lastengineontime;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastEngineOffTime", type="integer", nullable=true)
     */
    private $lastengineofftime;

    /**
     * @var float
     *
     * @ORM\Column(name="lastEngineHours", type="float", precision=10, scale=0, nullable=true)
     */
    private $lastenginehours;

    /**
     * @var float
     *
     * @ORM\Column(name="engineHoursOffset", type="float", precision=10, scale=0, nullable=true)
     */
    private $enginehoursoffset;

    /**
     * @var float
     *
     * @ORM\Column(name="lastIgnitionOnHours", type="float", precision=10, scale=0, nullable=true)
     */
    private $lastignitiononhours;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastIgnitionOnTime", type="integer", nullable=true)
     */
    private $lastignitionontime;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastIgnitionOffTime", type="integer", nullable=true)
     */
    private $lastignitionofftime;

    /**
     * @var float
     *
     * @ORM\Column(name="lastIgnitionHours", type="float", precision=10, scale=0, nullable=true)
     */
    private $lastignitionhours;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastStopTime", type="integer", nullable=true)
     */
    private $laststoptime;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastStartTime", type="integer", nullable=true)
     */
    private $laststarttime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lastMalfunctionLamp", type="boolean", nullable=true)
     */
    private $lastmalfunctionlamp;

    /**
     * @var string
     *
     * @ORM\Column(name="lastFaultCode", type="string", length=96, nullable=true)
     */
    private $lastfaultcode;

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
     * Set accountid
     *
     * @param string $accountid
     *
     * @return Device
     */
    public function setAccountid($accountid)
    {
        $this->accountid = $accountid;

        return $this;
    }

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
     * Set deviceid
     *
     * @param string $deviceid
     *
     * @return Device
     */
    public function setDeviceid($deviceid)
    {
        $this->deviceid = $deviceid;

        return $this;
    }

    /**
     * Get deviceid
     *
     * @return string
     */
    public function getDeviceid()
    {
        return $this->deviceid;
    }

    /**
     * Set groupid
     *
     * @param string $groupid
     *
     * @return Device
     */
    public function setGroupid($groupid)
    {
        $this->groupid = $groupid;

        return $this;
    }

    /**
     * Get groupid
     *
     * @return string
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set equipmenttype
     *
     * @param string $equipmenttype
     *
     * @return Device
     */
    public function setEquipmenttype($equipmenttype)
    {
        $this->equipmenttype = $equipmenttype;

        return $this;
    }

    /**
     * Get equipmenttype
     *
     * @return string
     */
    public function getEquipmenttype()
    {
        return $this->equipmenttype;
    }

    /**
     * Set equipmentstatus
     *
     * @param string $equipmentstatus
     *
     * @return Device
     */
    public function setEquipmentstatus($equipmentstatus)
    {
        $this->equipmentstatus = $equipmentstatus;

        return $this;
    }

    /**
     * Get equipmentstatus
     *
     * @return string
     */
    public function getEquipmentstatus()
    {
        return $this->equipmentstatus;
    }

    /**
     * Set vehiclemake
     *
     * @param string $vehiclemake
     *
     * @return Device
     */
    public function setVehiclemake($vehiclemake)
    {
        $this->vehiclemake = $vehiclemake;

        return $this;
    }

    /**
     * Get vehiclemake
     *
     * @return string
     */
    public function getVehiclemake()
    {
        return $this->vehiclemake;
    }

    /**
     * Set vehiclemodel
     *
     * @param string $vehiclemodel
     *
     * @return Device
     */
    public function setVehiclemodel($vehiclemodel)
    {
        $this->vehiclemodel = $vehiclemodel;

        return $this;
    }

    /**
     * Get vehiclemodel
     *
     * @return string
     */
    public function getVehiclemodel()
    {
        return $this->vehiclemodel;
    }

    /**
     * Set vehicleid
     *
     * @param string $vehicleid
     *
     * @return Device
     */
    public function setVehicleid($vehicleid)
    {
        $this->vehicleid = $vehicleid;

        return $this;
    }

    /**
     * Get vehicleid
     *
     * @return string
     */
    public function getVehicleid()
    {
        return $this->vehicleid;
    }

    /**
     * Set licenseplate
     *
     * @param string $licenseplate
     *
     * @return Device
     */
    public function setLicenseplate($licenseplate)
    {
        $this->licenseplate = $licenseplate;

        return $this;
    }

    /**
     * Get licenseplate
     *
     * @return string
     */
    public function getLicenseplate()
    {
        return $this->licenseplate;
    }

    /**
     * Set licenseexpire
     *
     * @param integer $licenseexpire
     *
     * @return Device
     */
    public function setLicenseexpire($licenseexpire)
    {
        $this->licenseexpire = $licenseexpire;

        return $this;
    }

    /**
     * Get licenseexpire
     *
     * @return integer
     */
    public function getLicenseexpire()
    {
        return $this->licenseexpire;
    }

    /**
     * Set insuranceexpire
     *
     * @param integer $insuranceexpire
     *
     * @return Device
     */
    public function setInsuranceexpire($insuranceexpire)
    {
        $this->insuranceexpire = $insuranceexpire;

        return $this;
    }

    /**
     * Get insuranceexpire
     *
     * @return integer
     */
    public function getInsuranceexpire()
    {
        return $this->insuranceexpire;
    }

    /**
     * Set driverid
     *
     * @param string $driverid
     *
     * @return Device
     */
    public function setDriverid($driverid)
    {
        $this->driverid = $driverid;

        return $this;
    }

    /**
     * Get driverid
     *
     * @return string
     */
    public function getDriverid()
    {
        return $this->driverid;
    }

    /**
     * Set driverstatus
     *
     * @param integer $driverstatus
     *
     * @return Device
     */
    public function setDriverstatus($driverstatus)
    {
        $this->driverstatus = $driverstatus;

        return $this;
    }

    /**
     * Get driverstatus
     *
     * @return integer
     */
    public function getDriverstatus()
    {
        return $this->driverstatus;
    }

    /**
     * Set fuelcapacity
     *
     * @param float $fuelcapacity
     *
     * @return Device
     */
    public function setFuelcapacity($fuelcapacity)
    {
        $this->fuelcapacity = $fuelcapacity;

        return $this;
    }

    /**
     * Get fuelcapacity
     *
     * @return float
     */
    public function getFuelcapacity()
    {
        return $this->fuelcapacity;
    }

    /**
     * Set fueleconomy
     *
     * @param float $fueleconomy
     *
     * @return Device
     */
    public function setFueleconomy($fueleconomy)
    {
        $this->fueleconomy = $fueleconomy;

        return $this;
    }

    /**
     * Get fueleconomy
     *
     * @return float
     */
    public function getFueleconomy()
    {
        return $this->fueleconomy;
    }

    /**
     * Set fuelrateperhour
     *
     * @param float $fuelrateperhour
     *
     * @return Device
     */
    public function setFuelrateperhour($fuelrateperhour)
    {
        $this->fuelrateperhour = $fuelrateperhour;

        return $this;
    }

    /**
     * Get fuelrateperhour
     *
     * @return float
     */
    public function getFuelrateperhour()
    {
        return $this->fuelrateperhour;
    }

    /**
     * Set fuelcostperliter
     *
     * @param float $fuelcostperliter
     *
     * @return Device
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
     * Set speedlimitkph
     *
     * @param float $speedlimitkph
     *
     * @return Device
     */
    public function setSpeedlimitkph($speedlimitkph)
    {
        $this->speedlimitkph = $speedlimitkph;

        return $this;
    }

    /**
     * Get speedlimitkph
     *
     * @return float
     */
    public function getSpeedlimitkph()
    {
        return $this->speedlimitkph;
    }

    /**
     * Set plandistancekm
     *
     * @param float $plandistancekm
     *
     * @return Device
     */
    public function setPlandistancekm($plandistancekm)
    {
        $this->plandistancekm = $plandistancekm;

        return $this;
    }

    /**
     * Get plandistancekm
     *
     * @return float
     */
    public function getPlandistancekm()
    {
        return $this->plandistancekm;
    }

    /**
     * Set installtime
     *
     * @param integer $installtime
     *
     * @return Device
     */
    public function setInstalltime($installtime)
    {
        $this->installtime = $installtime;

        return $this;
    }

    /**
     * Get installtime
     *
     * @return integer
     */
    public function getInstalltime()
    {
        return $this->installtime;
    }

    /**
     * Set resettime
     *
     * @param integer $resettime
     *
     * @return Device
     */
    public function setResettime($resettime)
    {
        $this->resettime = $resettime;

        return $this;
    }

    /**
     * Get resettime
     *
     * @return integer
     */
    public function getResettime()
    {
        return $this->resettime;
    }

    /**
     * Set expirationtime
     *
     * @param integer $expirationtime
     *
     * @return Device
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
     * Set uniqueid
     *
     * @param string $uniqueid
     *
     * @return Device
     */
    public function setUniqueid($uniqueid)
    {
        $this->uniqueid = $uniqueid;

        return $this;
    }

    /**
     * Get uniqueid
     *
     * @return string
     */
    public function getUniqueid()
    {
        return $this->uniqueid;
    }

    /**
     * Set devicecode
     *
     * @param string $devicecode
     *
     * @return Device
     */
    public function setDevicecode($devicecode)
    {
        $this->devicecode = $devicecode;

        return $this;
    }

    /**
     * Get devicecode
     *
     * @return string
     */
    public function getDevicecode()
    {
        return $this->devicecode;
    }

    /**
     * Set devicetype
     *
     * @param string $devicetype
     *
     * @return Device
     */
    public function setDevicetype($devicetype)
    {
        $this->devicetype = $devicetype;

        return $this;
    }

    /**
     * Get devicetype
     *
     * @return string
     */
    public function getDevicetype()
    {
        return $this->devicetype;
    }

    /**
     * Set pushpinid
     *
     * @param string $pushpinid
     *
     * @return Device
     */
    public function setPushpinid($pushpinid)
    {
        $this->pushpinid = $pushpinid;

        return $this;
    }

    /**
     * Get pushpinid
     *
     * @return string
     */
    public function getPushpinid()
    {
        return $this->pushpinid;
    }

    /**
     * Set displaycolor
     *
     * @param string $displaycolor
     *
     * @return Device
     */
    public function setDisplaycolor($displaycolor)
    {
        $this->displaycolor = $displaycolor;

        return $this;
    }

    /**
     * Get displaycolor
     *
     * @return string
     */
    public function getDisplaycolor()
    {
        return $this->displaycolor;
    }

    /**
     * Set serialnumber
     *
     * @param string $serialnumber
     *
     * @return Device
     */
    public function setSerialnumber($serialnumber)
    {
        $this->serialnumber = $serialnumber;

        return $this;
    }

    /**
     * Get serialnumber
     *
     * @return string
     */
    public function getSerialnumber()
    {
        return $this->serialnumber;
    }

    /**
     * Set simphonenumber
     *
     * @param string $simphonenumber
     *
     * @return Device
     */
    public function setSimphonenumber($simphonenumber)
    {
        $this->simphonenumber = $simphonenumber;

        return $this;
    }

    /**
     * Get simphonenumber
     *
     * @return string
     */
    public function getSimphonenumber()
    {
        return $this->simphonenumber;
    }

    /**
     * Set simid
     *
     * @param string $simid
     *
     * @return Device
     */
    public function setSimid($simid)
    {
        $this->simid = $simid;

        return $this;
    }

    /**
     * Get simid
     *
     * @return string
     */
    public function getSimid()
    {
        return $this->simid;
    }

    /**
     * Set smsemail
     *
     * @param string $smsemail
     *
     * @return Device
     */
    public function setSmsemail($smsemail)
    {
        $this->smsemail = $smsemail;

        return $this;
    }

    /**
     * Get smsemail
     *
     * @return string
     */
    public function getSmsemail()
    {
        return $this->smsemail;
    }

    /**
     * Set imeinumber
     *
     * @param string $imeinumber
     *
     * @return Device
     */
    public function setImeinumber($imeinumber)
    {
        $this->imeinumber = $imeinumber;

        return $this;
    }

    /**
     * Get imeinumber
     *
     * @return string
     */
    public function getImeinumber()
    {
        return $this->imeinumber;
    }

    /**
     * Set datakey
     *
     * @param string $datakey
     *
     * @return Device
     */
    public function setDatakey($datakey)
    {
        $this->datakey = $datakey;

        return $this;
    }

    /**
     * Get datakey
     *
     * @return string
     */
    public function getDatakey()
    {
        return $this->datakey;
    }

    /**
     * Set ignitionindex
     *
     * @param integer $ignitionindex
     *
     * @return Device
     */
    public function setIgnitionindex($ignitionindex)
    {
        $this->ignitionindex = $ignitionindex;

        return $this;
    }

    /**
     * Get ignitionindex
     *
     * @return integer
     */
    public function getIgnitionindex()
    {
        return $this->ignitionindex;
    }

    /**
     * Set codeversion
     *
     * @param string $codeversion
     *
     * @return Device
     */
    public function setCodeversion($codeversion)
    {
        $this->codeversion = $codeversion;

        return $this;
    }

    /**
     * Get codeversion
     *
     * @return string
     */
    public function getCodeversion()
    {
        return $this->codeversion;
    }

    /**
     * Set featureset
     *
     * @param string $featureset
     *
     * @return Device
     */
    public function setFeatureset($featureset)
    {
        $this->featureset = $featureset;

        return $this;
    }

    /**
     * Get featureset
     *
     * @return string
     */
    public function getFeatureset()
    {
        return $this->featureset;
    }

    /**
     * Set ipaddressvalid
     *
     * @param string $ipaddressvalid
     *
     * @return Device
     */
    public function setIpaddressvalid($ipaddressvalid)
    {
        $this->ipaddressvalid = $ipaddressvalid;

        return $this;
    }

    /**
     * Get ipaddressvalid
     *
     * @return string
     */
    public function getIpaddressvalid()
    {
        return $this->ipaddressvalid;
    }

    /**
     * Set lasttotalconnecttime
     *
     * @param integer $lasttotalconnecttime
     *
     * @return Device
     */
    public function setLasttotalconnecttime($lasttotalconnecttime)
    {
        $this->lasttotalconnecttime = $lasttotalconnecttime;

        return $this;
    }

    /**
     * Get lasttotalconnecttime
     *
     * @return integer
     */
    public function getLasttotalconnecttime()
    {
        return $this->lasttotalconnecttime;
    }

    /**
     * Set lastduplexconnecttime
     *
     * @param integer $lastduplexconnecttime
     *
     * @return Device
     */
    public function setLastduplexconnecttime($lastduplexconnecttime)
    {
        $this->lastduplexconnecttime = $lastduplexconnecttime;

        return $this;
    }

    /**
     * Get lastduplexconnecttime
     *
     * @return integer
     */
    public function getLastduplexconnecttime()
    {
        return $this->lastduplexconnecttime;
    }

    /**
     * Set pendingpingcommand
     *
     * @param string $pendingpingcommand
     *
     * @return Device
     */
    public function setPendingpingcommand($pendingpingcommand)
    {
        $this->pendingpingcommand = $pendingpingcommand;

        return $this;
    }

    /**
     * Get pendingpingcommand
     *
     * @return string
     */
    public function getPendingpingcommand()
    {
        return $this->pendingpingcommand;
    }

    /**
     * Set lastpingtime
     *
     * @param integer $lastpingtime
     *
     * @return Device
     */
    public function setLastpingtime($lastpingtime)
    {
        $this->lastpingtime = $lastpingtime;

        return $this;
    }

    /**
     * Get lastpingtime
     *
     * @return integer
     */
    public function getLastpingtime()
    {
        return $this->lastpingtime;
    }

    /**
     * Set totalpingcount
     *
     * @param integer $totalpingcount
     *
     * @return Device
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
     * @return Device
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
     * Set commandstatemask
     *
     * @param integer $commandstatemask
     *
     * @return Device
     */
    public function setCommandstatemask($commandstatemask)
    {
        $this->commandstatemask = $commandstatemask;

        return $this;
    }

    /**
     * Get commandstatemask
     *
     * @return integer
     */
    public function getCommandstatemask()
    {
        return $this->commandstatemask;
    }

    /**
     * Set expectack
     *
     * @param boolean $expectack
     *
     * @return Device
     */
    public function setExpectack($expectack)
    {
        $this->expectack = $expectack;

        return $this;
    }

    /**
     * Get expectack
     *
     * @return boolean
     */
    public function getExpectack()
    {
        return $this->expectack;
    }

    /**
     * Set expectackcode
     *
     * @param integer $expectackcode
     *
     * @return Device
     */
    public function setExpectackcode($expectackcode)
    {
        $this->expectackcode = $expectackcode;

        return $this;
    }

    /**
     * Get expectackcode
     *
     * @return integer
     */
    public function getExpectackcode()
    {
        return $this->expectackcode;
    }

    /**
     * Set lastackcommand
     *
     * @param string $lastackcommand
     *
     * @return Device
     */
    public function setLastackcommand($lastackcommand)
    {
        $this->lastackcommand = $lastackcommand;

        return $this;
    }

    /**
     * Get lastackcommand
     *
     * @return string
     */
    public function getLastackcommand()
    {
        return $this->lastackcommand;
    }

    /**
     * Set lastacktime
     *
     * @param integer $lastacktime
     *
     * @return Device
     */
    public function setLastacktime($lastacktime)
    {
        $this->lastacktime = $lastacktime;

        return $this;
    }

    /**
     * Get lastacktime
     *
     * @return integer
     */
    public function getLastacktime()
    {
        return $this->lastacktime;
    }

    /**
     * Set dcspropertiesid
     *
     * @param string $dcspropertiesid
     *
     * @return Device
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
     * Set dcsconfigmask
     *
     * @param integer $dcsconfigmask
     *
     * @return Device
     */
    public function setDcsconfigmask($dcsconfigmask)
    {
        $this->dcsconfigmask = $dcsconfigmask;

        return $this;
    }

    /**
     * Get dcsconfigmask
     *
     * @return integer
     */
    public function getDcsconfigmask()
    {
        return $this->dcsconfigmask;
    }

    /**
     * Set dcsconfigstring
     *
     * @param string $dcsconfigstring
     *
     * @return Device
     */
    public function setDcsconfigstring($dcsconfigstring)
    {
        $this->dcsconfigstring = $dcsconfigstring;

        return $this;
    }

    /**
     * Get dcsconfigstring
     *
     * @return string
     */
    public function getDcsconfigstring()
    {
        return $this->dcsconfigstring;
    }

    /**
     * Set dcscommandhost
     *
     * @param string $dcscommandhost
     *
     * @return Device
     */
    public function setDcscommandhost($dcscommandhost)
    {
        $this->dcscommandhost = $dcscommandhost;

        return $this;
    }

    /**
     * Get dcscommandhost
     *
     * @return string
     */
    public function getDcscommandhost()
    {
        return $this->dcscommandhost;
    }

    /**
     * Set supportsdmtp
     *
     * @param boolean $supportsdmtp
     *
     * @return Device
     */
    public function setSupportsdmtp($supportsdmtp)
    {
        $this->supportsdmtp = $supportsdmtp;

        return $this;
    }

    /**
     * Get supportsdmtp
     *
     * @return boolean
     */
    public function getSupportsdmtp()
    {
        return $this->supportsdmtp;
    }

    /**
     * Set supportedencodings
     *
     * @param boolean $supportedencodings
     *
     * @return Device
     */
    public function setSupportedencodings($supportedencodings)
    {
        $this->supportedencodings = $supportedencodings;

        return $this;
    }

    /**
     * Get supportedencodings
     *
     * @return boolean
     */
    public function getSupportedencodings()
    {
        return $this->supportedencodings;
    }

    /**
     * Set unitlimitinterval
     *
     * @param integer $unitlimitinterval
     *
     * @return Device
     */
    public function setUnitlimitinterval($unitlimitinterval)
    {
        $this->unitlimitinterval = $unitlimitinterval;

        return $this;
    }

    /**
     * Get unitlimitinterval
     *
     * @return integer
     */
    public function getUnitlimitinterval()
    {
        return $this->unitlimitinterval;
    }

    /**
     * Set maxallowedevents
     *
     * @param integer $maxallowedevents
     *
     * @return Device
     */
    public function setMaxallowedevents($maxallowedevents)
    {
        $this->maxallowedevents = $maxallowedevents;

        return $this;
    }

    /**
     * Get maxallowedevents
     *
     * @return integer
     */
    public function getMaxallowedevents()
    {
        return $this->maxallowedevents;
    }

    /**
     * Set totalprofilemask
     *
     * @param string $totalprofilemask
     *
     * @return Device
     */
    public function setTotalprofilemask($totalprofilemask)
    {
        $this->totalprofilemask = $totalprofilemask;

        return $this;
    }

    /**
     * Get totalprofilemask
     *
     * @return string
     */
    public function getTotalprofilemask()
    {
        return $this->totalprofilemask;
    }

    /**
     * Set totalmaxconn
     *
     * @param integer $totalmaxconn
     *
     * @return Device
     */
    public function setTotalmaxconn($totalmaxconn)
    {
        $this->totalmaxconn = $totalmaxconn;

        return $this;
    }

    /**
     * Get totalmaxconn
     *
     * @return integer
     */
    public function getTotalmaxconn()
    {
        return $this->totalmaxconn;
    }

    /**
     * Set totalmaxconnpermin
     *
     * @param integer $totalmaxconnpermin
     *
     * @return Device
     */
    public function setTotalmaxconnpermin($totalmaxconnpermin)
    {
        $this->totalmaxconnpermin = $totalmaxconnpermin;

        return $this;
    }

    /**
     * Get totalmaxconnpermin
     *
     * @return integer
     */
    public function getTotalmaxconnpermin()
    {
        return $this->totalmaxconnpermin;
    }

    /**
     * Set duplexprofilemask
     *
     * @param string $duplexprofilemask
     *
     * @return Device
     */
    public function setDuplexprofilemask($duplexprofilemask)
    {
        $this->duplexprofilemask = $duplexprofilemask;

        return $this;
    }

    /**
     * Get duplexprofilemask
     *
     * @return string
     */
    public function getDuplexprofilemask()
    {
        return $this->duplexprofilemask;
    }

    /**
     * Set duplexmaxconn
     *
     * @param integer $duplexmaxconn
     *
     * @return Device
     */
    public function setDuplexmaxconn($duplexmaxconn)
    {
        $this->duplexmaxconn = $duplexmaxconn;

        return $this;
    }

    /**
     * Get duplexmaxconn
     *
     * @return integer
     */
    public function getDuplexmaxconn()
    {
        return $this->duplexmaxconn;
    }

    /**
     * Set duplexmaxconnpermin
     *
     * @param integer $duplexmaxconnpermin
     *
     * @return Device
     */
    public function setDuplexmaxconnpermin($duplexmaxconnpermin)
    {
        $this->duplexmaxconnpermin = $duplexmaxconnpermin;

        return $this;
    }

    /**
     * Get duplexmaxconnpermin
     *
     * @return integer
     */
    public function getDuplexmaxconnpermin()
    {
        return $this->duplexmaxconnpermin;
    }

    /**
     * Set lasttcpsessionid
     *
     * @param string $lasttcpsessionid
     *
     * @return Device
     */
    public function setLasttcpsessionid($lasttcpsessionid)
    {
        $this->lasttcpsessionid = $lasttcpsessionid;

        return $this;
    }

    /**
     * Get lasttcpsessionid
     *
     * @return string
     */
    public function getLasttcpsessionid()
    {
        return $this->lasttcpsessionid;
    }

    /**
     * Set ipaddresscurrent
     *
     * @param string $ipaddresscurrent
     *
     * @return Device
     */
    public function setIpaddresscurrent($ipaddresscurrent)
    {
        $this->ipaddresscurrent = $ipaddresscurrent;

        return $this;
    }

    /**
     * Get ipaddresscurrent
     *
     * @return string
     */
    public function getIpaddresscurrent()
    {
        return $this->ipaddresscurrent;
    }

    /**
     * Set remoteportcurrent
     *
     * @param integer $remoteportcurrent
     *
     * @return Device
     */
    public function setRemoteportcurrent($remoteportcurrent)
    {
        $this->remoteportcurrent = $remoteportcurrent;

        return $this;
    }

    /**
     * Get remoteportcurrent
     *
     * @return integer
     */
    public function getRemoteportcurrent()
    {
        return $this->remoteportcurrent;
    }

    /**
     * Set listenportcurrent
     *
     * @param integer $listenportcurrent
     *
     * @return Device
     */
    public function setListenportcurrent($listenportcurrent)
    {
        $this->listenportcurrent = $listenportcurrent;

        return $this;
    }

    /**
     * Get listenportcurrent
     *
     * @return integer
     */
    public function getListenportcurrent()
    {
        return $this->listenportcurrent;
    }

    /**
     * Set lastinputstate
     *
     * @param integer $lastinputstate
     *
     * @return Device
     */
    public function setLastinputstate($lastinputstate)
    {
        $this->lastinputstate = $lastinputstate;

        return $this;
    }

    /**
     * Get lastinputstate
     *
     * @return integer
     */
    public function getLastinputstate()
    {
        return $this->lastinputstate;
    }

    /**
     * Set lastoutputstate
     *
     * @param integer $lastoutputstate
     *
     * @return Device
     */
    public function setLastoutputstate($lastoutputstate)
    {
        $this->lastoutputstate = $lastoutputstate;

        return $this;
    }

    /**
     * Get lastoutputstate
     *
     * @return integer
     */
    public function getLastoutputstate()
    {
        return $this->lastoutputstate;
    }

    /**
     * Set statuscodestate
     *
     * @param integer $statuscodestate
     *
     * @return Device
     */
    public function setStatuscodestate($statuscodestate)
    {
        $this->statuscodestate = $statuscodestate;

        return $this;
    }

    /**
     * Get statuscodestate
     *
     * @return integer
     */
    public function getStatuscodestate()
    {
        return $this->statuscodestate;
    }

    /**
     * Set lastbatterylevel
     *
     * @param float $lastbatterylevel
     *
     * @return Device
     */
    public function setLastbatterylevel($lastbatterylevel)
    {
        $this->lastbatterylevel = $lastbatterylevel;

        return $this;
    }

    /**
     * Get lastbatterylevel
     *
     * @return float
     */
    public function getLastbatterylevel()
    {
        return $this->lastbatterylevel;
    }

    /**
     * Set lastfuellevel
     *
     * @param float $lastfuellevel
     *
     * @return Device
     */
    public function setLastfuellevel($lastfuellevel)
    {
        $this->lastfuellevel = $lastfuellevel;

        return $this;
    }

    /**
     * Get lastfuellevel
     *
     * @return float
     */
    public function getLastfuellevel()
    {
        return $this->lastfuellevel;
    }

    /**
     * Set lastfueltotal
     *
     * @param float $lastfueltotal
     *
     * @return Device
     */
    public function setLastfueltotal($lastfueltotal)
    {
        $this->lastfueltotal = $lastfueltotal;

        return $this;
    }

    /**
     * Get lastfueltotal
     *
     * @return float
     */
    public function getLastfueltotal()
    {
        return $this->lastfueltotal;
    }

    /**
     * Set lastoillevel
     *
     * @param float $lastoillevel
     *
     * @return Device
     */
    public function setLastoillevel($lastoillevel)
    {
        $this->lastoillevel = $lastoillevel;

        return $this;
    }

    /**
     * Get lastoillevel
     *
     * @return float
     */
    public function getLastoillevel()
    {
        return $this->lastoillevel;
    }

    /**
     * Set lastvalidlatitude
     *
     * @param float $lastvalidlatitude
     *
     * @return Device
     */
    public function setLastvalidlatitude($lastvalidlatitude)
    {
        $this->lastvalidlatitude = $lastvalidlatitude;

        return $this;
    }

    /**
     * Get lastvalidlatitude
     *
     * @return float
     */
    public function getLastvalidlatitude()
    {
        return $this->lastvalidlatitude;
    }

    /**
     * Set lastvalidlongitude
     *
     * @param float $lastvalidlongitude
     *
     * @return Device
     */
    public function setLastvalidlongitude($lastvalidlongitude)
    {
        $this->lastvalidlongitude = $lastvalidlongitude;

        return $this;
    }

    /**
     * Get lastvalidlongitude
     *
     * @return float
     */
    public function getLastvalidlongitude()
    {
        return $this->lastvalidlongitude;
    }

    /**
     * Set lastvalidheading
     *
     * @param float $lastvalidheading
     *
     * @return Device
     */
    public function setLastvalidheading($lastvalidheading)
    {
        $this->lastvalidheading = $lastvalidheading;

        return $this;
    }

    /**
     * Get lastvalidheading
     *
     * @return float
     */
    public function getLastvalidheading()
    {
        return $this->lastvalidheading;
    }

    /**
     * Set lastvalidspeedkph
     *
     * @param float $lastvalidspeedkph
     *
     * @return Device
     */
    public function setLastvalidspeedkph($lastvalidspeedkph)
    {
        $this->lastvalidspeedkph = $lastvalidspeedkph;

        return $this;
    }

    /**
     * Get lastvalidspeedkph
     *
     * @return float
     */
    public function getLastvalidspeedkph()
    {
        return $this->lastvalidspeedkph;
    }

    /**
     * Set lastgpstimestamp
     *
     * @param integer $lastgpstimestamp
     *
     * @return Device
     */
    public function setLastgpstimestamp($lastgpstimestamp)
    {
        $this->lastgpstimestamp = $lastgpstimestamp;

        return $this;
    }

    /**
     * Get lastgpstimestamp
     *
     * @return integer
     */
    public function getLastgpstimestamp()
    {
        return $this->lastgpstimestamp;
    }

    /**
     * Set lasteventtimestamp
     *
     * @param integer $lasteventtimestamp
     *
     * @return Device
     */
    public function setLasteventtimestamp($lasteventtimestamp)
    {
        $this->lasteventtimestamp = $lasteventtimestamp;

        return $this;
    }

    /**
     * Get lasteventtimestamp
     *
     * @return integer
     */
    public function getLasteventtimestamp()
    {
        return $this->lasteventtimestamp;
    }

    /**
     * Set lastcellservinginfo
     *
     * @param string $lastcellservinginfo
     *
     * @return Device
     */
    public function setLastcellservinginfo($lastcellservinginfo)
    {
        $this->lastcellservinginfo = $lastcellservinginfo;

        return $this;
    }

    /**
     * Get lastcellservinginfo
     *
     * @return string
     */
    public function getLastcellservinginfo()
    {
        return $this->lastcellservinginfo;
    }

    /**
     * Set lastdistancekm
     *
     * @param float $lastdistancekm
     *
     * @return Device
     */
    public function setLastdistancekm($lastdistancekm)
    {
        $this->lastdistancekm = $lastdistancekm;

        return $this;
    }

    /**
     * Get lastdistancekm
     *
     * @return float
     */
    public function getLastdistancekm()
    {
        return $this->lastdistancekm;
    }

    /**
     * Set lastodometerkm
     *
     * @param float $lastodometerkm
     *
     * @return Device
     */
    public function setLastodometerkm($lastodometerkm)
    {
        $this->lastodometerkm = $lastodometerkm;

        return $this;
    }

    /**
     * Get lastodometerkm
     *
     * @return float
     */
    public function getLastodometerkm()
    {
        return $this->lastodometerkm;
    }

    /**
     * Set odometeroffsetkm
     *
     * @param float $odometeroffsetkm
     *
     * @return Device
     */
    public function setOdometeroffsetkm($odometeroffsetkm)
    {
        $this->odometeroffsetkm = $odometeroffsetkm;

        return $this;
    }

    /**
     * Get odometeroffsetkm
     *
     * @return float
     */
    public function getOdometeroffsetkm()
    {
        return $this->odometeroffsetkm;
    }

    /**
     * Set lastengineonhours
     *
     * @param float $lastengineonhours
     *
     * @return Device
     */
    public function setLastengineonhours($lastengineonhours)
    {
        $this->lastengineonhours = $lastengineonhours;

        return $this;
    }

    /**
     * Get lastengineonhours
     *
     * @return float
     */
    public function getLastengineonhours()
    {
        return $this->lastengineonhours;
    }

    /**
     * Set lastengineontime
     *
     * @param integer $lastengineontime
     *
     * @return Device
     */
    public function setLastengineontime($lastengineontime)
    {
        $this->lastengineontime = $lastengineontime;

        return $this;
    }

    /**
     * Get lastengineontime
     *
     * @return integer
     */
    public function getLastengineontime()
    {
        return $this->lastengineontime;
    }

    /**
     * Set lastengineofftime
     *
     * @param integer $lastengineofftime
     *
     * @return Device
     */
    public function setLastengineofftime($lastengineofftime)
    {
        $this->lastengineofftime = $lastengineofftime;

        return $this;
    }

    /**
     * Get lastengineofftime
     *
     * @return integer
     */
    public function getLastengineofftime()
    {
        return $this->lastengineofftime;
    }

    /**
     * Set lastenginehours
     *
     * @param float $lastenginehours
     *
     * @return Device
     */
    public function setLastenginehours($lastenginehours)
    {
        $this->lastenginehours = $lastenginehours;

        return $this;
    }

    /**
     * Get lastenginehours
     *
     * @return float
     */
    public function getLastenginehours()
    {
        return $this->lastenginehours;
    }

    /**
     * Set enginehoursoffset
     *
     * @param float $enginehoursoffset
     *
     * @return Device
     */
    public function setEnginehoursoffset($enginehoursoffset)
    {
        $this->enginehoursoffset = $enginehoursoffset;

        return $this;
    }

    /**
     * Get enginehoursoffset
     *
     * @return float
     */
    public function getEnginehoursoffset()
    {
        return $this->enginehoursoffset;
    }

    /**
     * Set lastignitiononhours
     *
     * @param float $lastignitiononhours
     *
     * @return Device
     */
    public function setLastignitiononhours($lastignitiononhours)
    {
        $this->lastignitiononhours = $lastignitiononhours;

        return $this;
    }

    /**
     * Get lastignitiononhours
     *
     * @return float
     */
    public function getLastignitiononhours()
    {
        return $this->lastignitiononhours;
    }

    /**
     * Set lastignitionontime
     *
     * @param integer $lastignitionontime
     *
     * @return Device
     */
    public function setLastignitionontime($lastignitionontime)
    {
        $this->lastignitionontime = $lastignitionontime;

        return $this;
    }

    /**
     * Get lastignitionontime
     *
     * @return integer
     */
    public function getLastignitionontime()
    {
        return $this->lastignitionontime;
    }

    /**
     * Set lastignitionofftime
     *
     * @param integer $lastignitionofftime
     *
     * @return Device
     */
    public function setLastignitionofftime($lastignitionofftime)
    {
        $this->lastignitionofftime = $lastignitionofftime;

        return $this;
    }

    /**
     * Get lastignitionofftime
     *
     * @return integer
     */
    public function getLastignitionofftime()
    {
        return $this->lastignitionofftime;
    }

    /**
     * Set lastignitionhours
     *
     * @param float $lastignitionhours
     *
     * @return Device
     */
    public function setLastignitionhours($lastignitionhours)
    {
        $this->lastignitionhours = $lastignitionhours;

        return $this;
    }

    /**
     * Get lastignitionhours
     *
     * @return float
     */
    public function getLastignitionhours()
    {
        return $this->lastignitionhours;
    }

    /**
     * Set laststoptime
     *
     * @param integer $laststoptime
     *
     * @return Device
     */
    public function setLaststoptime($laststoptime)
    {
        $this->laststoptime = $laststoptime;

        return $this;
    }

    /**
     * Get laststoptime
     *
     * @return integer
     */
    public function getLaststoptime()
    {
        return $this->laststoptime;
    }

    /**
     * Set laststarttime
     *
     * @param integer $laststarttime
     *
     * @return Device
     */
    public function setLaststarttime($laststarttime)
    {
        $this->laststarttime = $laststarttime;

        return $this;
    }

    /**
     * Get laststarttime
     *
     * @return integer
     */
    public function getLaststarttime()
    {
        return $this->laststarttime;
    }

    /**
     * Set lastmalfunctionlamp
     *
     * @param boolean $lastmalfunctionlamp
     *
     * @return Device
     */
    public function setLastmalfunctionlamp($lastmalfunctionlamp)
    {
        $this->lastmalfunctionlamp = $lastmalfunctionlamp;

        return $this;
    }

    /**
     * Get lastmalfunctionlamp
     *
     * @return boolean
     */
    public function getLastmalfunctionlamp()
    {
        return $this->lastmalfunctionlamp;
    }

    /**
     * Set lastfaultcode
     *
     * @param string $lastfaultcode
     *
     * @return Device
     */
    public function setLastfaultcode($lastfaultcode)
    {
        $this->lastfaultcode = $lastfaultcode;

        return $this;
    }

    /**
     * Get lastfaultcode
     *
     * @return string
     */
    public function getLastfaultcode()
    {
        return $this->lastfaultcode;
    }

    /**
     * Set isactive
     *
     * @param boolean $isactive
     *
     * @return Device
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
     * @return Device
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
     * @return Device
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
     * @return Device
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
     * @return Device
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
     * @return Device
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
