<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eventdata
 *
 * @ORM\Table(name="EventData")
 * @ORM\Entity
 */
class Eventdata
{
    /**
     * @var integer
     *
     * @ORM\Column(name="timestamp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $timestamp;

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
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitude;

    /**
     * @var integer
     *
     * @ORM\Column(name="gpsAge", type="integer", nullable=true)
     */
    private $gpsage;

    /**
     * @var float
     *
     * @ORM\Column(name="speedKPH", type="float", precision=10, scale=0, nullable=true)
     */
    private $speedkph;

    /**
     * @var float
     *
     * @ORM\Column(name="heading", type="float", precision=10, scale=0, nullable=true)
     */
    private $heading;

    /**
     * @var float
     *
     * @ORM\Column(name="altitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $altitude;

    /**
     * @var string
     *
     * @ORM\Column(name="transportID", type="string", length=32, nullable=true)
     */
    private $transportid;

    /**
     * @var integer
     *
     * @ORM\Column(name="inputMask", type="integer", nullable=true)
     */
    private $inputmask;

    /**
     * @var integer
     *
     * @ORM\Column(name="outputMask", type="integer", nullable=true)
     */
    private $outputmask;

    /**
     * @var integer
     *
     * @ORM\Column(name="seatbeltMask", type="integer", nullable=true)
     */
    private $seatbeltmask;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=90, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="dataSource", type="string", length=32, nullable=true)
     */
    private $datasource;

    /**
     * @var string
     *
     * @ORM\Column(name="rawData", type="text", length=65535, nullable=true)
     */
    private $rawdata;

    /**
     * @var float
     *
     * @ORM\Column(name="distanceKM", type="float", precision=10, scale=0, nullable=true)
     */
    private $distancekm;

    /**
     * @var float
     *
     * @ORM\Column(name="odometerKM", type="float", precision=10, scale=0, nullable=true)
     */
    private $odometerkm;

    /**
     * @var float
     *
     * @ORM\Column(name="odometerOffsetKM", type="float", precision=10, scale=0, nullable=true)
     */
    private $odometeroffsetkm;

    /**
     * @var integer
     *
     * @ORM\Column(name="geozoneIndex", type="integer", nullable=true)
     */
    private $geozoneindex;

    /**
     * @var string
     *
     * @ORM\Column(name="geozoneID", type="string", length=32, nullable=true)
     */
    private $geozoneid;

    /**
     * @var integer
     *
     * @ORM\Column(name="creationTime", type="integer", nullable=true)
     */
    private $creationtime;



    /**
     * Set timestamp
     *
     * @param integer $timestamp
     *
     * @return Eventdata
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return integer
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set accountid
     *
     * @param string $accountid
     *
     * @return Eventdata
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
     * @return Eventdata
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
     * Set statuscode
     *
     * @param integer $statuscode
     *
     * @return Eventdata
     */
    public function setStatuscode($statuscode)
    {
        $this->statuscode = $statuscode;

        return $this;
    }

    /**
     * Get statuscode
     *
     * @return integer
     */
    public function getStatuscode()
    {
        return $this->statuscode;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return Eventdata
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Eventdata
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set gpsage
     *
     * @param integer $gpsage
     *
     * @return Eventdata
     */
    public function setGpsage($gpsage)
    {
        $this->gpsage = $gpsage;

        return $this;
    }

    /**
     * Get gpsage
     *
     * @return integer
     */
    public function getGpsage()
    {
        return $this->gpsage;
    }

    /**
     * Set speedkph
     *
     * @param float $speedkph
     *
     * @return Eventdata
     */
    public function setSpeedkph($speedkph)
    {
        $this->speedkph = $speedkph;

        return $this;
    }

    /**
     * Get speedkph
     *
     * @return float
     */
    public function getSpeedkph()
    {
        return $this->speedkph;
    }

    /**
     * Set heading
     *
     * @param float $heading
     *
     * @return Eventdata
     */
    public function setHeading($heading)
    {
        $this->heading = $heading;

        return $this;
    }

    /**
     * Get heading
     *
     * @return float
     */
    public function getHeading()
    {
        return $this->heading;
    }

    /**
     * Set altitude
     *
     * @param float $altitude
     *
     * @return Eventdata
     */
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get altitude
     *
     * @return float
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Set transportid
     *
     * @param string $transportid
     *
     * @return Eventdata
     */
    public function setTransportid($transportid)
    {
        $this->transportid = $transportid;

        return $this;
    }

    /**
     * Get transportid
     *
     * @return string
     */
    public function getTransportid()
    {
        return $this->transportid;
    }

    /**
     * Set inputmask
     *
     * @param integer $inputmask
     *
     * @return Eventdata
     */
    public function setInputmask($inputmask)
    {
        $this->inputmask = $inputmask;

        return $this;
    }

    /**
     * Get inputmask
     *
     * @return integer
     */
    public function getInputmask()
    {
        return $this->inputmask;
    }

    /**
     * Set outputmask
     *
     * @param integer $outputmask
     *
     * @return Eventdata
     */
    public function setOutputmask($outputmask)
    {
        $this->outputmask = $outputmask;

        return $this;
    }

    /**
     * Get outputmask
     *
     * @return integer
     */
    public function getOutputmask()
    {
        return $this->outputmask;
    }

    /**
     * Set seatbeltmask
     *
     * @param integer $seatbeltmask
     *
     * @return Eventdata
     */
    public function setSeatbeltmask($seatbeltmask)
    {
        $this->seatbeltmask = $seatbeltmask;

        return $this;
    }

    /**
     * Get seatbeltmask
     *
     * @return integer
     */
    public function getSeatbeltmask()
    {
        return $this->seatbeltmask;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Eventdata
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set datasource
     *
     * @param string $datasource
     *
     * @return Eventdata
     */
    public function setDatasource($datasource)
    {
        $this->datasource = $datasource;

        return $this;
    }

    /**
     * Get datasource
     *
     * @return string
     */
    public function getDatasource()
    {
        return $this->datasource;
    }

    /**
     * Set rawdata
     *
     * @param string $rawdata
     *
     * @return Eventdata
     */
    public function setRawdata($rawdata)
    {
        $this->rawdata = $rawdata;

        return $this;
    }

    /**
     * Get rawdata
     *
     * @return string
     */
    public function getRawdata()
    {
        return $this->rawdata;
    }

    /**
     * Set distancekm
     *
     * @param float $distancekm
     *
     * @return Eventdata
     */
    public function setDistancekm($distancekm)
    {
        $this->distancekm = $distancekm;

        return $this;
    }

    /**
     * Get distancekm
     *
     * @return float
     */
    public function getDistancekm()
    {
        return $this->distancekm;
    }

    /**
     * Set odometerkm
     *
     * @param float $odometerkm
     *
     * @return Eventdata
     */
    public function setOdometerkm($odometerkm)
    {
        $this->odometerkm = $odometerkm;

        return $this;
    }

    /**
     * Get odometerkm
     *
     * @return float
     */
    public function getOdometerkm()
    {
        return $this->odometerkm;
    }

    /**
     * Set odometeroffsetkm
     *
     * @param float $odometeroffsetkm
     *
     * @return Eventdata
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
     * Set geozoneindex
     *
     * @param integer $geozoneindex
     *
     * @return Eventdata
     */
    public function setGeozoneindex($geozoneindex)
    {
        $this->geozoneindex = $geozoneindex;

        return $this;
    }

    /**
     * Get geozoneindex
     *
     * @return integer
     */
    public function getGeozoneindex()
    {
        return $this->geozoneindex;
    }

    /**
     * Set geozoneid
     *
     * @param string $geozoneid
     *
     * @return Eventdata
     */
    public function setGeozoneid($geozoneid)
    {
        $this->geozoneid = $geozoneid;

        return $this;
    }

    /**
     * Get geozoneid
     *
     * @return string
     */
    public function getGeozoneid()
    {
        return $this->geozoneid;
    }

    /**
     * Set creationtime
     *
     * @param integer $creationtime
     *
     * @return Eventdata
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
