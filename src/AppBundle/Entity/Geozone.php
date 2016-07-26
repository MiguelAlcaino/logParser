<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Geozone
 *
 * @ORM\Table(name="Geozone", indexes={@ORM\Index(name="bounds", columns={"minLatitude", "maxLatitude", "minLongitude", "maxLongitude"}), @ORM\Index(name="altIndex", columns={"clientID"})})
 * @ORM\Entity
 */
class Geozone
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
     * @ORM\Column(name="geozoneID", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $geozoneid;

    /**
     * @var integer
     *
     * @ORM\Column(name="sortID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sortid;

    /**
     * @var float
     *
     * @ORM\Column(name="minLatitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $minlatitude;

    /**
     * @var float
     *
     * @ORM\Column(name="maxLatitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $maxlatitude;

    /**
     * @var float
     *
     * @ORM\Column(name="minLongitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $minlongitude;

    /**
     * @var float
     *
     * @ORM\Column(name="maxLongitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $maxlongitude;

    /**
     * @var string
     *
     * @ORM\Column(name="zonePurposeID", type="string", length=32, nullable=true)
     */
    private $zonepurposeid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reverseGeocode", type="boolean", nullable=true)
     */
    private $reversegeocode;

    /**
     * @var boolean
     *
     * @ORM\Column(name="arrivalZone", type="boolean", nullable=true)
     */
    private $arrivalzone;

    /**
     * @var boolean
     *
     * @ORM\Column(name="departureZone", type="boolean", nullable=true)
     */
    private $departurezone;

    /**
     * @var boolean
     *
     * @ORM\Column(name="autoNotify", type="boolean", nullable=true)
     */
    private $autonotify;

    /**
     * @var boolean
     *
     * @ORM\Column(name="zoomRegion", type="boolean", nullable=true)
     */
    private $zoomregion;

    /**
     * @var string
     *
     * @ORM\Column(name="shapeColor", type="string", length=12, nullable=true)
     */
    private $shapecolor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="zoneType", type="boolean", nullable=true)
     */
    private $zonetype;

    /**
     * @var integer
     *
     * @ORM\Column(name="radius", type="integer", nullable=true)
     */
    private $radius;

    /**
     * @var string
     *
     * @ORM\Column(name="vertices", type="text", length=65535, nullable=true)
     */
    private $vertices;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude1", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitude1;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude1", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitude1;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude2", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitude2;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude2", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitude2;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude3", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitude3;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude3", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitude3;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude4", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitude4;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude4", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitude4;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude5", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitude5;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude5", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitude5;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude6", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitude6;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude6", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitude6;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude7", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitude7;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude7", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitude7;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude8", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitude8;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude8", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitude8;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude9", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitude9;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude9", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitude9;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude10", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitude10;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude10", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitude10;

    /**
     * @var boolean
     *
     * @ORM\Column(name="clientUpload", type="boolean", nullable=true)
     */
    private $clientupload;

    /**
     * @var integer
     *
     * @ORM\Column(name="clientID", type="integer", nullable=true)
     */
    private $clientid;

    /**
     * @var string
     *
     * @ORM\Column(name="groupID", type="string", length=32, nullable=true)
     */
    private $groupid;

    /**
     * @var string
     *
     * @ORM\Column(name="streetAddress", type="string", length=90, nullable=true)
     */
    private $streetaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=40, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="stateProvince", type="string", length=40, nullable=true)
     */
    private $stateprovince;

    /**
     * @var string
     *
     * @ORM\Column(name="postalCode", type="string", length=16, nullable=true)
     */
    private $postalcode;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=40, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="subdivision", type="string", length=32, nullable=true)
     */
    private $subdivision;

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

