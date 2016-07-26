<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Systemprops
 *
 * @ORM\Table(name="SystemProps")
 * @ORM\Entity
 */
class Systemprops
{
    /**
     * @var string
     *
     * @ORM\Column(name="propertyID", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $propertyid;

    /**
     * @var string
     *
     * @ORM\Column(name="dataType", type="string", length=80, nullable=true)
     */
    private $datatype;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=true)
     */
    private $value;

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

